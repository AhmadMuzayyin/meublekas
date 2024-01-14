@extends('layouts.Frontend.FrontendLayout', ['title' => 'Checkout'])
@section('content')
    <!-- Checkout page Section Start -->
    <section id="checkout-page">
        <div class="checkout-page-increment-sec-full mt-24">
            <div class="container">
                <div class="check-page-top-content">
                    <h1 class="d-none">Checkout Page</h1>
                    <h2 class="d-none">Checkout Details</h2>
                    @foreach ($cart as $item)
                        <div class="checkout-page-top-sec mt-4">
                            <div class="checkout-page-top-sec-img">
                                <img src="{{ url($item->product->gambar) }}" alt="chair-img" width="100" class="img-fluid">
                            </div>
                            <div class="checkout-quantity-sec">
                                <p class="chek-txt1">{{ $item->product->category->nama }}</p>
                                <h3 class="chek-txt2 mt-16">{{ $item->product->nama }}</h3>
                                <h4 class="chek-txt3 mt-8">Qty: {{ $item->quantity }}</h4>
                            </div>
                            <div class="checkoutpage-increment-full">
                                <div class="checkoutpage-increment-full-details">
                                    <p class="chek-txt4">{{ 'Rp. ' . number_format($item->product->harga) }}</p>
                                    <div class="quantity">
                                        <a href="{{ route('product.min_qty_cart', $item->product->id) }}"
                                            class="quantity__minus">
                                            <span>
                                                <svg width="8" height="8" viewBox="0 0 8 2" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 1H7" stroke="#666666" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                        <input name="quantity" type="text" class="quantity__input"
                                            value="{{ $item->quantity }}">
                                        <a href="{{ route('product.add_qty_cart', $item->product->id) }}"
                                            class="quantity__plus">
                                            <span>
                                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M1 4H7" stroke="#0EA5E9" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path d="M4 7V1" stroke="#0EA5E9" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </svg>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="checkoutpage-boder mt-16"></div>
                </div>
            </div>
        </div>
        <div class="checkoutpage-third-sec mt-24">
            <div class="container">
                <div class="time-addreess-sec">
                    <div class="time-addreess-sec-deatils">
                        <div class="checkout-message mt-24">
                            <div class="checkout-message-full">
                                <h4 class="time-txt1">Form Pemesanan</h4>
                                <form class="checkout-message-des">
                                    <div class="checkout-message-form">
                                        <input type="text" class="checkout-message message" id="nama"
                                            placeholder="Nama Lengkap"></input>
                                    </div>
                                    <div class="checkout-message-form mt-2">
                                        <input type="text" class="checkout-message message" id="alamat"
                                            placeholder="Alamat"></input>
                                    </div>
                                    <div class="checkout-message-form mt-2">
                                        <input type="text" class="checkout-message message" id="whatsapp"
                                            placeholder="whatsapp"></input>
                                    </div>
                                </form>
                            </div>
                            <div class="checkoutpage-boder mt-24"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="payment-method-checkoutpage mt-24">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h4 class="pay-text1">Metode Pembayaran</h4>
                    </div>
                </div>
            </div>
            <div class="payment-method-checkoutpage-full payment-mode mt-12">
                <div class="check-select-mode">
                    <input type="radio" id="payment" name="payment-option">
                    <label class="payment-custom-radio" for="payment">
                        <svg width="800px" height="800px" viewBox="4.445 -155.668 462.37 462.37"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill="#005FAF" stroke="#005FAF"
                                d="M255.169 72.04c29.217-13.252 33.538-56.497-8.021-56.497H199.02l-17.786 34.875h8.37l-21.274 83.351h55.8c40.709.348 59.017-47.588 31.039-61.729zm-31.039 31.388h-13.95l5.231-18.832h13.252c15.694 3.138 5.93 19.529-4.533 18.832zm8.37-40.107h-11.857l3.487-16.391h13.252c12.805 3.139 1.745 17.089-4.882 16.391z" />
                            <path fill="#005FAF" stroke="#005FAF"
                                d="M369.418 60.083l18.271-32.254-24.723-12.896-3.225 3.98c-13.337-7.06-83.176 2.688-87.549 71.581 2.614 57.793 67.373 47.397 73.725 43.73l17.811-36.819c-17.444 11.49-53.162 17.006-54.673-17.509 3.133-28.462 36.737-39.091 60.363-19.813zM460.592 15.543h-56.169l-17.854 33.831h9.172l-42.33 84.395h40.973l8.412-20.356h25.151l.627 20.356h37.717l-5.699-118.226zm-46.401 70.463l13.755-32.833.627 32.833h-14.382z" />
                            <g fill="#005FAF">
                                <path
                                    d="M109.826 128.125l2.182-.633-2.393-3.307zM74.004 127.562l-.422 2.956c1.086-.106 2.423.83 2.956-1.267-.04-1.634-1.284-1.724-2.534-1.689zM91.388 127.492c-.181-.805-.853-1.398-2.534-.844l.563 3.025c1.381-.306 2.091-1.123 1.971-2.181zM52.117 125.016l-.672 2.688c1.08.045 2.345.921 3.062-.672.048-.998.089-1.992-2.39-2.016zM89.91 131.926l.493 3.097c1.153.029 2.205-.664 1.9-2.111-.294-1.392-1.463-1.172-2.393-.986z" />
                                <path
                                    d="M135.678 17.137C98.411-1.848 53.904-1.32 18.396 16.309c-18.31 32.233-18.893 77.332 0 117.276 39.119 19.796 82.385 18.492 117.557.828 16.53-33.913 19.26-74.721-.275-117.276zm-62.94 96.248l-2.209.025c-.547-6.104-2.006-11.234-5.136-15.16C51.04 80.251 21.7 93.802 29.239 63.213c3.92-15.638 48.633-24.861 43.499 50.172zM29.292 83.173c3.134 6.379 22.769 7.424 29.585 12.307 10.812 7.745 9.26 17.933 9.26 17.933h-2.55c-5.02-15.387-19.109-3.204-30.394-7.348-7.085-2.52-12.229-13.443-5.901-22.892zm35.774 50.161l1.056-8.375 1.9.141-.845 9.219c-.852 4.061-6.907 3.518-7.671-.352l.985-9.571 2.252.353-.985 8.022c.125 2.655 2.788 2.496 3.308.563zm-10.111 2.287l-2.166-.523c.254-1.79 2.377-5.432-1.819-5.432l-1.168 4.76-2.39-.448 2.539-11.427c6.206.676 6.749 2.403 6.872 4.257-.245 1.438-.628 2.442-1.867 2.688 1.45 1.316.017 4.074-.001 6.125zm-13.757-12.799c-.597.792-1.792 3.559-1.965 5.764-.184 2.337 2.061 1.845 2.62 1.572.451-.219.786-2.096.786-2.096l-1.572-.524.524-1.571 3.538 1.179-1.703 5.896-1.441-.394.131-.917c-1.764.804-4.993.201-5.372-1.834-.379-1.635.769-6.592 2.62-8.908 1.799-2.252 6.182-.051 6.289 1.31.106 1.356-.429 2.882-.429 2.882l-1.65-.311s.101-.49.245-1.262c.152-.818-1.981-1.637-2.621-.786zm32.173 9.596l-.422 5.068-1.759-.07.633-12.035c4.393.091 6.911.699 6.827 3.801-.262 4.238-3.694 3.285-5.279 3.236zm4.379-19.006h-2.943c-.261-10.422 1.743-29.485-3.733-43.514-4.149-10.635-14.649-15.419-16.976-24.01-3.684-13.598 2.586-28.311 23.652-29.444 18.263 1.875 23.874 15.974 20.759 29.101-5.356 13.125-10.713 11.239-17.382 24.313-5.447 14.015-3.373 32.376-3.377 43.554zm32.639 19.288l-2.041.704-.634-12.105 2.393-.633 5.912 9.993-1.619 1.056-1.971-2.814-2.252.844.212 2.955zm-23.811-19.288h-2.354c1.94-26.766 35.575-20.951 38.649-30.239 5.316 9.208 3.405 16.972-2.146 20.952-13.794 9.894-27.021-7.322-34.149 9.287zm12.481 13.518l1.056 5.56c.657 1.281 1.103 1.044 2.111.915 1.169-.846.925-1.67.704-2.745l2.041-.281c.532 4.028-1.383 4.439-2.815 4.715-3.071.22-3.673-.378-4.504-4.363-.484-3.411-1.32-7.013 1.548-7.671 4.708-.719 4.43 1.4 4.856 2.885l-2.041.353c-.326-1.276-.795-1.782-1.83-1.688-.943.433-1.33 1.134-1.126 2.32zm-4.293 5.77c.098 1.753-.497 2.917-1.619 3.308l-4.786.985-1.9-11.612c.982-.16 5.797-1.924 6.967 1.268.577 1.949-.021 2.648-.704 3.518 1.295.416 1.732 1.424 2.042 2.533zm-12.29-58.273c10.662-30.02 35.059-24.715 40.47-11.213 7.413 27.093-16.457 19.663-31.747 30.773-5.779 5.026-8.82 10.792-8.865 19.533h-2.62c-.157-17.606-.442-30.073 2.762-39.093z" />
                            </g>
                        </svg>
                    </label>
                </div>
            </div>
            <div class="container">
                <div class="checkoutpage-boder mt-24"></div>
            </div>
        </div>
        <div class="checkoutpage-fifth-sec mt-24">
            <div class="container">
                <div class="checkoutpage-price-sec">
                    <div class="checkoutpage-price-sec-full">
                        <div class="check-page-top">
                            <h4 class="check-price-txt1">Pembyaran</h4>
                            <div class="checkoutpage-boder mt-8"></div>
                        </div>
                        <div class="check-page-bottom mt-12">
                            @foreach ($cart as $item)
                                <div class="check-page-bottom-deatails">
                                    <div class="check-price-name">
                                        <p>{{ $item->product->nama }} x {{ $item->quantity }}</p>
                                    </div>
                                    <div class="check-price-list">
                                        <p>{{ 'Rp. ' . number_format($item->product->harga) }}</p>
                                    </div>
                                </div>
                            @endforeach
                            <div class="checkoutpage-boder mt-12"></div>
                            <div class="check-page-bottom-deatails mt-12">
                                <div>
                                    <p class="col-black">Total Pembayaran</p>
                                </div>
                                <div>
                                    <p class="col-black">{{ 'Rp.' . number_format($total_pembayaran) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="buy-now-btn mt-24">
            <button class="checkout-1" id="whatsappButton">Pesan Sekarang</button>
            <a href="#" class="checkout-2" id="whatsappButton">Buy Now</a>
        </div>
    </section>
    <!-- Checkout page Section End -->
@endsection
@push('js')
    <script>
        document.getElementById('whatsappButton').addEventListener('click', function() {
            // var phoneNumber = '6287716408127';
            var phoneNumber = '6287761873813';
            var nama = $('#nama').val();
            var alamat = $('#alamat').val();
            var wa = $('#whatsapp').val();
            var total_harga = "{{ $total_pembayaran }}";
            var message = encodeURIComponent(`
    Halo kak admin!

    Saya mau pesan produk ini:
    @foreach ($cart as $item)
    {{ $loop->iteration }}. {{ $item->product->nama }}
            Qty: {{ $item->quantity }} pcs
            Harga: Rp. {{ $item->product->harga }}
    @endforeach

    Berikut data profil saya:
    Nama: ${nama}
    No WA: ${wa}
    Alamat: ${alamat}

    Total orderan saya:
    Total: Rp. {{ $total_pembayaran }}

    Pembayaran via: BCA 3899999984 an Karunia Meuble

    Pembayaran dilakukan dengan cara transfer ke rekening yang tertera sesuai dengan nominal belanja.

    Terima kasih, mohon dibalas ya
    `);

            // Buat link WhatsApp dengan nomor dan pesan
            var whatsappLink = `https://wa.me/${phoneNumber}?text=${message}`;
            $.ajax({
                url: "{{ route('product.order') }}",
                type: "POST",
                data: {
                    nama: nama,
                    alamat: alamat,
                    wa: wa,
                    total_harga: total_harga,
                    message: message,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response[0] == 'success') {
                        alert(response[1])
                        window.open(whatsappLink, '_blank');
                        setInterval(() => {
                            window.location.href = "{{ route('index') }}";
                        }, 5000);
                    } else {
                        alert(response[1])
                    }
                }
            })
        });
    </script>
@endpush
