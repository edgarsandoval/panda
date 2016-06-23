@extends('layout.default')

@section('style')
{{ Html::style( asset('css/flexslider.css') )}}
{{ Html::style( asset('css/home.css'))}}
@endsection

@section('script')
{{ Html::script( asset('js/jquery.flexslider.js'))}}
{{ Html::script( asset('js/home.js'))}}
@endsection


@section('main')
<!-- Home content -->
<section class="home">
    <!-- Slider -->
    <section class="flexslider">
        <ul class="slides">
            <li>
                <img src="{{ asset('images/slides/1.jpg') }}" alt="" />
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6">
                            <h3>360+ Retina-ready icons</h3>
                            <br />
                            <p>The iconic Font Awesome for Bootstrap</p>
                            <br /> <a class="btn btn-sm" title="" href="/retina-ready-icons">Find out more</a> 
                            <a class="btn btn-primary btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">
                                Buy now &nbsp; <em class="fa fa-chevron-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slides/2.jpg') }}" alt="" />
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6">
                            <h3>Built-in Stripe payments</h3>
                            <br />
                            <p>Instant setup with payment profiles. No monthly fees.</p>
                            <br /> <a class="btn btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">Find out more</a> 
                            <a class="btn btn-primary btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">
                                Buy now &nbsp; <em class="fa fa-chevron-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slides/3.jpg') }}" alt="" />
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-md-offset-6 text-right">
                            <h3>Feature-packed modules</h3>
                            <br />
                            <p>Isotope listing, price filtering, instand search and much more...</p>
                            <br /> <a class="btn btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">Find out more</a> 
                            <a class="btn btn-primary btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">
                                Buy now &nbsp; <em class="fa fa-chevron-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <img src="{{ asset('images/slides/4.jpg') }}" alt="" />
                <div class="caption">
                    <div class="container">
                        <div class="col-md-6 col-md-offset-6 text-right">
                            <h3>Responsive. Flexible &amp; sleek.</h3>
                            <br />
                            <p>Expertly crafted with Bootstrap front-end framework</p>
                            <br /> <a class="btn btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">Find out more</a> 
                            <a class="btn btn-primary btn-sm" title="" href="http://themeforest.net/item/la-boutique-responsive-ecommerce-template/5573130?ref=Tfingi">
                                Buy now &nbsp; <em class="fa fa-chevron-right"></em>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <!-- End class="flexslider" -->
    <section class="featured">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <!-- Products list -->
                    <ul class="product-list isotope loading">
                        @for($i = 0; $i < 5; $i++)
                        <li class="standard" data-price="58" style="position: absolute; left: 0px; top: 0px;">
                            <a href="product.html" title="Lisette Dress">
                                <div class="image">
                                    <img class="primary" src="{{ asset('images/thumbnails/db_file_img_48_640xauto.jpg')}}" alt="Lisette Dress">
                                    <img class="secondary" src="{{ asset('images/thumbnails/db_file_img_49_640xauto.jpg')}}" alt="Lisette Dress">
                                </div>

                                <div class="title">
                                    <div class="prices">
                                        <span class="price">$58.00</span>
                                    </div>
                                    <h3>Lisette Dress</h3>
                                </div>
                            </a>
                        </li>
                        @endfor
                    </ul>
                    <!-- End class="product-list isotope" -->
                </div>
                <div class="col-sm-3">
                    <!-- Categories widget -->
                    <div class="widget Categories">
                        <h3 class="widget-title widget-title ">Categories</h3>
                        <ul>
                            <li>
                                <a href='category.html' class="title">Mens</a>

                                <ul>
                                    <li>
                                        <a href='category.html' class="title">T-Shirts</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Jackets</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Jumpers</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Shoes</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Shirts</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Accessories</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href='category.html' class="title">Womens</a>
                                <ul>
                                    <li>
                                        <a href='category.html' class="title">Shoes</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Dresses</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Bags</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Trousers</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Tops</a>
                                    </li>
                                    <li>
                                        <a href='category.html' class="title">Accessories</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- End class="widget Categories" -->
                </div>
            </div>
        </div>
    </section>
</section>
@endsection