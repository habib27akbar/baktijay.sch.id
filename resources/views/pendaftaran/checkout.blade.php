    @extends('layouts.master')
    
    @section('title','Pembayaran Formulir')
    @section('content')
    
                <div class="page-title">
                    <h4>Pembayaran Formulir</h4>
                </div>
                
                <section class="section">
                    
                   
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    
                                    <div class="card-body">
                                        @include('include.admin.alert')
                                        <h4>Pembayaran Formulir atas Nama {{ $pendaftaran->nama }} dengan Nominal Sebesar Rp 100.000;</h4>
                                        <button id="pay-button" class="btn btn-primary">Bayar Sekarang</button>
                                        
                                    </div>
                                </div>
                                
                            </div>
                           
                        </div>
                   
                </section>
               
    @endsection
    @section('js')
    
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    
    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
       var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
            // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token
            window.snap.pay('{{ $pendaftaran->snap_token }}', {
            onSuccess: function(result){
                /* You may add your own implementation here */
                alert("Pembayaran Berhasil!"); 
                //console.log(result);
            },
            onPending: function(result){
                /* You may add your own implementation here */
                alert("Pembayaran Dibatalkan");
                console.log(result);
            },
            onError: function(result){
                /* You may add your own implementation here */
                alert("Pembayaran Gagal!"); 
                console.log(result);
            },
            onClose: function(){
                /* You may add your own implementation here */
                alert('Anda Belum Menyelesaikan Pembayaran');
            }
            })
        });
    </script>
    @endsection

