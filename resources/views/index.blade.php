@extends('layouts.Frontend.FrontendLayout')
@section('content')
    <!--Homepage1 Section Start -->
    <section id="homepage1-sec">
        <div class="homepage-second-sec mt-24">
            <div class="container">
                <div class="Homepage-top-sec">
                    <div class="home-top-first">
                        <h2 class="">Kategori</h2>
                    </div>
                    <div class="home-top-second">
                        <a href="category-page.html">
                            <p class="see-all-txt">Lihat Semua
                                <span><img src="assets/images/homepage/see-all-icon.svg" alt="right-arrow"></span>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="homepage-category-sec mt-16">
                <h3 class="d-none">Categories Details</h3>
                @foreach ($categories as $category)
                    <div class="homepage-category-Details">
                        <div class="home-cate-shape">
                            <img src="assets/images/homepage/category-1.png" class="img-fluid" alt="furniture-img">
                        </div>
                        <div class="mt-12">
                            <h4 class="cate-title">{{ $category->nama }}</h4>
                            <h5 class="cate-subtitle">120 items</h5>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="homepage-sixth-sec mt-24">
            <div class="container">
                <div class="favourite-top-sec">
                    <div class="fav-first-button">
                        <div class="fav-first-button-wrapper">
                            <div class="abc">
                                <h2 class="home-cate-title">Produk</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="favourite-bottom-sec mt-24">
                    <div class="favourite-bottom-sec-wrapper">
                        @foreach ($products as $product)
                            <div class="related-item">
                                <div class="related-item-img">
                                    <a href="{{ route('product.detail', $product->id) }}">
                                        <img src="{{ url($product->gambar) }}" class="img-fluid" alt="chair-img">
                                    </a>
                                    <div class="img-bottom-content">
                                        <div class="img-first-content">
                                            <p>{{ $product->category->nama }}</p>
                                        </div>
                                        <div class="favourite-sec">
                                            <div class="product-page-favourite">
                                                <form action="{{ route('product.cart', $product->id) }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="quantity" value="1">
                                                    <button type="submit" class="item-bookmark">
                                                        <svg width="50" height="50" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M7.2998 5H22L20 12H8.37675M21 16H9L7 3H4M4 8H2M5 11H2M6 14H2M10 20C10 20.5523 9.55228 21 9 21C8.44772 21 8 20.5523 8 20C8 19.4477 8.44772 19 9 19C9.55228 19 10 19.4477 10 20ZM21 20C21 20.5523 20.5523 21 20 21C19.4477 21 19 20.5523 19 20C19 19.4477 19.4477 19 20 19C20.5523 19 21 19.4477 21 20Z"
                                                                stroke="#0ea5e9" stroke-width="2" stroke-linecap="round"
                                                                stroke-linejoin="round" />
                                                        </svg>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="related-item-content">
                                    <h5 class="rel-txt1">{{ $product->nama }}</h5>
                                    <div class="related-item-content-rating-sec">
                                        <div class="related-item-first">
                                            <h6 class="rel-txt2">{{ 'Rp. ' . number_format($product->harga) }}
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Homepage1 Section End -->
@endsection
