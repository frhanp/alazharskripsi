<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pembayaran SPP') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Klik tombol di bawah untuk melakukan pembayaran.</p>

                    <button id="pay-button" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Bayar Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- Script Midtrans --}}
    <script src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $('#pay-button').click(function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('payment.token') }}",
                method: "POST",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function (data) {
                    snap.pay(data.snapToken, {
                        onSuccess: function(result){
                            alert("Pembayaran sukses!");
                            console.log(result);
                        },
                        onPending: function(result){
                            alert("Menunggu pembayaran...");
                            console.log(result);
                        },
                        onError: function(result){
                            alert("Pembayaran gagal!");
                            console.log(result);
                        },
                        onClose: function(){
                            alert("Popup ditutup.");
                        }
                    });
                }
            });
        });
    </script>
</x-app-layout>
