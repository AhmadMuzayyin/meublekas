@extends('layouts.Frontend.FrontendLayout', ['title' => 'Detail Produk'])
@section('content')
    <!-- Single Product Page Details Section Start -->
    <section id="single-prduct-page">
        <div class="product-page1-first-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators productpage2-custom-indicator">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active custom-dots" aria-current="true"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        class="custom-dots"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        class="custom-dots"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="product-page2-slider">
                            <img src="{{ url($product->gambar) }}" alt="product-img" class="img-fluid w-100">
                            <div class="product-page1-top">
                                <div class="prod-page1-sofas">
                                    <p>{{ $product->category->nama }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-page1-second-sec">
            <div class="container">
                <div class="product-page1-bottom-wrapper mt-24">
                    <h1 class="prod-page1-title">{{ $product->nama }}</h1>
                    <h2 class="d-none">Product Details</h2>
                    <p class="prod-page1-subtitle">{{ 'Rp. ' . number_format($product->harga) }}</p>
                </div>
            </div>
        </div>
        <div class="product-page1-sixth-sec mt-24">
            <div class="container">
                <div class="product-page2-second-sec-wrapper">
                    <h3 class="description-txt">Description</h3>
                    <p class="read-less-text read-desc mt-12">
                        {!! $product->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
        <form action="{{ route('product.cart', $product->id) }}" method="post">
            @csrf
            <div class="product-page2-fourth-sec">
                <div class="product-page2-fourth-sec-wrap">
                    <div class="product-incre">
                        <a href="javascript:void(0)" class="product__minus sub">
                            <span>
                                <svg width="8" height="8" viewBox="0 0 8 2" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 1H7" stroke="#666666" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                        <input name="quantity" type="text" class="product__input" value="1">
                        <a href="javascript:void(0)" class="product__plus add">
                            <span>
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 4H7" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                    <path d="M4 7V1" stroke="#0EA5E9" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                    </div>
                    <div class="product-page2-buy-btn">
                        <button type="submit">Tambah Pesanan</button>
                    </div>
                </div>
            </div>
        </form>
    </section>
    <!-- Single Product Page Details Section End -->
@endsection
