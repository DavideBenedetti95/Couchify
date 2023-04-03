<x-layout>
    {{-- Navbar --}}
    <x-navbar/>
        {{-- header --}}
        <header class="container-fluid header-background">
            <div class="row">
                <div class="col-12 custom-height-column-header-detail d-flex justify-content-center align-items-center">
                    <h2 class="display-2 text-center">{{$product['type']}}</h2>
                </div>
            </div>
        </header>

    {{-- Detail Product --}}
    <section class="container mt-5">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-8">
                <div id="gallery" class="container-gallery">
                    <div class="product_image_gallery">
                      <div class="product-img d-flex justify-content-center align-items-center">
                        <img
                          src="{{$product['img']}}"
                          alt="Product Image"
                          class="product-main-img"
                          data-index="1"
                        />
                      </div>
                      <div class="product-thumbnail-container">
                        <div class="product-thumbnail active">
                          <img
                            src="{{$product['th1']}}"
                            alt="thumbnail Image"
                            data-index="1"
                          />
                        </div>
                        <div class="product-thumbnail">
                          <img
                          src="{{$product['th2']}}"
                            alt="thumbnail Image"
                            data-index="2"
                          />
                        </div>
                        <div class="product-thumbnail">
                          <img
                          src="{{$product['th3']}}"
                            alt="thumbnail Image"
                            data-index="3"
                          />
                        </div>
                        <div class="product-thumbnail">
                          <img
                          src="{{$product['th4']}}"
                            alt="thumbnail Image"
                            data-index="4"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
            <div class="col-12 col-md-12 col-lg-4 d-flex flex-column justify-content-center px-3">
                <h2>{{$product['name']}} {{$product['type']}}</h3>
                <h3 class="price pt-2">{{$product['price']}}</h2>
                <p class="py-4 product-description">{{$product['description']}}</p>
                <div class="d-flex justify-content-around">
                  <div id="buttonCounter" class="wrapper">
                    <span class="minus">-</span>
                    <span class="num px-3">01</span>
                    <span class="plus">+</span>
                  </div>
                    <button class="cart_button">add to cart</button>
                </div>
            </div>
        </div>
    </section>
    {{-- Footer --}}
    <x-footer/>
</x-layout>