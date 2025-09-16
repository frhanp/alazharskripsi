const { default: makeWASocket, useMultiFileAuthState, DisconnectReason } = require('@whiskeysockets/baileys');
const pino = require('pino');
const express = require('express');
const bodyParser = require('body-parser');
const qrcode = require('qrcode-terminal');

const app = express();
app.use(bodyParser.json());

let sock;
let qrCodeData;

async function connectToWhatsApp() {
    const { state, saveCreds } = await useMultiFileAuthState('baileys_auth_info');
    
    sock = makeWASocket({
        auth: state,
        printQRInTerminal: true,
        // BARU: Menambahkan logger sesuai referensi Anda, ini sangat penting
        logger: pino({ level: 'silent' }) 
    });

    sock.ev.on('connection.update', (update) => {
        const { connection, lastDisconnect, qr } = update;
        if(qr) {
            qrCodeData = qr;
            console.log("QR Code diterima, silakan scan:");
            qrcode.generate(qr, { small: true });
        }
        if(connection === 'close') {
            // Logika reconnect disesuaikan dengan referensi Anda
            const shouldReconnect = (lastDisconnect.error)?.output?.statusCode !== DisconnectReason.loggedOut;
            console.log('Koneksi terputus karena ', lastDisconnect.error, ', mencoba menghubungkan kembali... ', shouldReconnect);
            if(shouldReconnect) {
                connectToWhatsApp();
            }
        } else if(connection === 'open') {
            console.log('Koneksi WhatsApp berhasil dibuka!');
            qrCodeData = null;
        }
    });

    sock.ev.on('creds.update', saveCreds);
}

// Endpoint untuk mengirim pesan
app.post('/send-message', async (req, res) => {
    const { number, message } = req.body;

    if (!number || !message) {
        return res.status(400).json({ status: 'error', message: 'Nomor dan pesan wajib diisi.' });
    }
    
    // Pengecekan koneksi yang lebih baik
    if (!sock || !sock.user) {
         return res.status(500).json({ status: 'error', message: 'Koneksi WhatsApp belum siap atau belum login.' });
    }

    try {
        const formattedNumber = number.startsWith('0') ? '62' + number.substring(1) + '@s.whatsapp.net' : number + '@s.whatsapp.net';
        await sock.sendMessage(formattedNumber, { text: message });
        console.log(`Pesan terkirim ke ${number}`);
        res.status(200).json({ status: 'success', message: 'Pesan berhasil dikirim.' });
    } catch (error) {
        console.error('Gagal mengirim pesan:', error);
        res.status(500).json({ status: 'error', message: 'Gagal mengirim pesan.', details: error.message });
    }
});

// Endpoint untuk mengecek status & QR Code
app.get('/status', (req, res) => {
    if (sock && sock.user) {
        res.json({ connected: true, message: 'WhatsApp terhubung.' });
    } else if (qrCodeData) {
        res.json({ connected: false, message: 'Menunggu pemindaian QR Code.', qr: qrCodeData });
    } else {
        res.json({ connected: false, message: 'WhatsApp tidak terhubung.' });
    }
});

// Endpoint untuk testing ping-pong
app.get('/ping', (req, res) => {
    res.status(200).json({ message: 'pong' });
});

const PORT = 3000;
connectToWhatsApp().then(() => {
    app.listen(PORT, () => {
        console.log(`Server WhatsApp berjalan di port ${PORT}`);
    });
});