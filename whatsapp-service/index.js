const {
    default: makeWASocket,
    useMultiFileAuthState,
    DisconnectReason,
} = require("@whiskeysockets/baileys");
const pino = require("pino");
const express = require("express");
const bodyParser = require("body-parser");
const qrcode = require("qrcode-terminal");
const fs = require("fs");

const app = express();
app.use(bodyParser.json());

let sock;
let qrCodeData;

async function connectToWhatsApp() {
    const { state, saveCreds } = await useMultiFileAuthState(
        "baileys_auth_info"
    );

    sock = makeWASocket({
        auth: state,
        printQRInTerminal: false,
        logger: pino({ level: "silent" }),
    });

    sock.ev.on("connection.update", (update) => {
        const { connection, lastDisconnect, qr } = update;
        if (qr) {
            qrCodeData = qr;
            console.log("QR Code diterima, silakan scan:");
            // qrcode.generate(qr, { small: true });
        }
        if (connection === "close") {
            const shouldReconnect =
                lastDisconnect.error?.output?.statusCode !==
                DisconnectReason.loggedOut;
            console.log(
                "Koneksi terputus karena ",
                lastDisconnect.error,
                ", mencoba menghubungkan kembali... ",
                shouldReconnect
            );
            if (shouldReconnect) {
                connectToWhatsApp();
            }
        } else if (connection === "open") {
            console.log("Koneksi WhatsApp berhasil dibuka!");
            qrCodeData = null;
        }
    });

    sock.ev.on("creds.update", saveCreds);
}

// Endpoint untuk mengirim file (versi terbaru)
// Endpoint PINTAR: Bisa kirim teks atau file
app.post("/send-message", async (req, res) => {
    const { number, message, fileUrl, fileName, caption } = req.body;

    if (!number || (!message && !fileUrl)) {
        return res.status(400).json({
            status: "error",
            message: "Nomor dan (message atau fileUrl) wajib diisi.",
        });
    }

    if (!sock || !sock.user) {
        return res.status(500).json({
            status: "error",
            message: "Koneksi WhatsApp belum siap atau belum login.",
        });
    }

    try {
        const formattedNumber = number.startsWith("0")
            ? "62" + number.substring(1) + "@s.whatsapp.net"
            : number + "@s.whatsapp.net";

        let messageOptions;

        // Cek jika ada fileUrl, maka kirim sebagai dokumen
        if (fileUrl) {
            messageOptions = {
                document: { url: fileUrl },
                mimetype: "application/pdf", // ubah dari docx ke pdf
                fileName: fileName || "Kwitansi.pdf", // ubah ekstensi default
                caption: caption || "",
            };

            await sock.sendMessage(formattedNumber, messageOptions);
            console.log(`File PDF terkirim ke ${number}`);
            res.status(200).json({
                status: "success",
                message: "File PDF berhasil dikirim.",
            });
        }

        // Jika tidak ada fileUrl, kirim sebagai teks biasa
        else {
            await sock.sendMessage(formattedNumber, { text: message });
            console.log(`Pesan teks terkirim ke ${number}`);
            res.status(200).json({
                status: "success",
                message: "Pesan teks berhasil dikirim.",
            });
        }
    } catch (error) {
        console.error("Gagal mengirim pesan/file:", error);
        res.status(500).json({
            status: "error",
            message: "Gagal mengirim pesan/file.",
            details: error.message,
        });
    }
});

// Endpoint untuk mengecek status & QR Code
app.get("/status", (req, res) => {
    if (sock && sock.user) {
        res.json({ connected: true, message: "WhatsApp terhubung." });
    } else if (qrCodeData) {
        res.json({
            connected: false,
            message: "Menunggu pemindaian QR Code.",
            qr: qrCodeData,
        });
    } else {
        res.json({ connected: false, message: "WhatsApp tidak terhubung." });
    }
});

app.post("/logout", async (req, res) => {
    console.log('Menerima permintaan logout...');
    qrCodeData = null; // Hapus QR code yang mungkin masih tersimpan
    try {
        if (sock) {
            await sock.logout();
            console.log('Logout dari Baileys berhasil.');
        }
        if (fs.existsSync("baileys_auth_info")) {
            fs.rmSync("baileys_auth_info", { recursive: true, force: true });
            console.log('Folder baileys_auth_info berhasil dihapus.');
        }
        // Coba hubungkan kembali untuk menghasilkan QR baru
        connectToWhatsApp();
        res.status(200).json({ status: 'success', message: 'Logout berhasil, memuat ulang koneksi...' });
    } catch (e) {
        console.error('Gagal melakukan logout:', e);
        res.status(500).json({ status: 'error', message: 'Gagal melakukan logout.' });
    }
});

// Endpoint untuk testing ping-pong
app.get("/ping", (req, res) => {
    res.status(200).json({ message: "pong" });
});

const PORT = 3000;
connectToWhatsApp().then(() => {
    app.listen(PORT, () => {
        console.log(`Server WhatsApp berjalan di port ${PORT}`);
    });
});
