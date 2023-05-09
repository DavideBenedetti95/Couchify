<x-layout>
    {{-- Navbar --}}
    <x-navbar/>
    {{-- header --}}
    <header class="container-fluid header-background">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex justify-content-center align-items-center custom-height-column-header">
                    <!-- Slider main container -->
                    <div id="swiper" class="swiper animate__animated animate__backInDown">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <!-- Slides -->
                            @foreach ($products as $product)
                            <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-12 col-md-12 col-lg-6 p-5">
                                        <h2 class="display-2">{{$product['name']}}<br>{{$product['type']}}</h2>
                                        <p class="my-4">{{$product['description']}}</p>
                                        <a href="{{route('product.detail' , ['type' => $product['type']])}}">
                                            <button class="btn-custom">Dettaglio</button>
                                        </a>
                                    </div>
                                    <div class="col-12 col-md-12 col-lg-6">
                                        <img class="swiper-image img-fluid" src={{$product['img']}} alt="">
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- category --}}
    <section class="container py-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-12 text-center pb-5">
                <h2 class="display-4">Categorie</h2>
            </div>
            <div class="col-12 col-lg-5 mx-2 mb-4 p-5 background-category" data-aos="fade-right">
                <div class="row">
                    <div class="col-6">
                        <p>Qualita' Premium</p>
                        <h3>Poltrone</h3>
                        <div class="h-100 d-flex align-items-center btn_explore">
                            <a class="explore" href="">Explore Now <span class="ps-2"><i class="fa-solid fa-circle-right explore"></i></span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="media/categoria_1.png" alt="immagine poltrona">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 mx-2 mb-4 p-5 background-category" data-aos="fade-left">
                <div class="row">
                    <div class="col-6">
                        <p>Qualita' Premium</p>
                        <h3>Sedie</h3>
                        <div class="h-100 d-flex align-items-center btn_explore">
                            <a class="explore" href="">Explore Now <span class="ps-2"><i class="fa-solid fa-circle-right explore"></i></span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="media/categoria_2.png" alt="immagine sedia">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 p-5 mx-2 background-category" data-aos="fade-left">
                <div class="row">
                    <div class="col-6">
                        <p>Qualita' Premium</p>
                        <h3>Divani</h3>
                        <div class="h-100 d-flex align-items-center btn_explore">
                            <a class="explore" href="">Explore Now <span class="ps-2"><i class="fa-solid fa-circle-right explore"></i></span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="media/categoria_3.png" alt="immagine divano">
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-5 mx-2 p-5 background-category" data-aos="fade-right">
                <div class="row">
                    <div class="col-6">
                        <p>Qualita' Premium</p>
                        <h3>Puf</h3>
                        <div class="h-100 d-flex align-items-center btn_explore">
                            <a class="explore" href="">Explore Now <span class="ps-2"><i class="fa-solid fa-circle-right explore"></i></span></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="media/categoria_4.png" alt="immagine puf">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- Offer --}}
    <section class="container-fluid header-background py-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex justify-content-center aling-items-center custom-height-column-offer">
                    <img src="media/offer.png" alt="immagine puff" class="img-fluid my-auto" data-aos="fade-left">
                </div>
                <div class="col-12 col-md-6 p-5 d-flex flex-column justify-content-center custom-height-column-offer">
                    <h2 class="display-4" data-aos="fade-down">Sconti settimanali su:<p id="sale"></p></h2>
                    {{-- Countdown --}}
                    
                    <div id="countdown" class="d-flex justify-content-between pt-5">
                        <div>
                            <p class="countdown-title text-center">Giorni</p>
                            <h3 class="countdown" id="days"></h3>
                        </div>
                        <div>
                            <p class="countdown-title text-center">Ore</p>
                            <h3 class="countdown" id="hours"></h3>
                        </div>
                        <div>
                            <p class="countdown-title text-center">Minuti</p>
                            <h3 class="countdown" id="minutes"></h3>
                        </div>
                        <div>
                            <p class="countdown-title text-center">Secondi</p>
                            <h3 class="countdown" id="seconds"></h3>
                        </div>
                    </div>

                    <div>
                        <p class="expired text-center" id="expired"></p>
                    </div>
                    {{-- End Countdown --}}  
                </div>
            </div>
        </div>
    </section>

    {{-- Newsletter --}}
    <section class="container-fluid py-5 my-5 background-newletter">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex flex-column justify-content-center align-items-center custom-height-column-newsletter" data-aos="fade-down">
                    <p class="text-danger">Iscriviti alla newsletter</p>
                    <h2 class="display-3 text-center py-4">Iscriviti per rimanere aggiornato<br>sulle nuove offerte</h2>
                    <div class="d-flex">
                        <input type="text" class="form-control" placeholder="inserisci la tua mail">
                        <button class="btn-custom">Iscriviti ora</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- footer --}}
    <x-footer/>
</x-layout>