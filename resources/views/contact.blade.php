<x-layout>
    {{-- Navbar --}}
    <x-navbar/>
    
    {{-- Header Contatti --}}
    <section class="container-fluid">
        <div class="row">
            <div class="col-12 header-background height-header-column d-flex align-items-center justify-content-center">
                <h1 class="display-3 animate__animated animate__bounce">Contatti</h1>
            </div>
        </div>
    </section>
    
    {{-- Section Google Maps --}}
    <section class="container my-5 py-5">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12088.736529799064!2d-73.9855426!3d40.7579747!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes%20Square!5e0!3m2!1sen!2sit!4v1680187173846!5m2!1sen!2sit" width="1280" height="720" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    
    {{-- Section Form --}}
    <section class="container">
        <form method='post' action="{{route('submit')}}">
            @csrf
            <div class="row">
                <div class="col-12 pb-3">
                    <h3>Contattaci</h3>
                </div>
                
                <div class="col-md-8 m-0">
                    <textarea class="form-control-textarea w-100" name="message" id="message" cols="30" rows="9" placeholder="Enter Message"></textarea>
                    <div class="row">
                        <div class="col-md-6 my-1">
                            <input class="form-control-custom" name="name" id="name" type="text" placeholder="Enter your name">
                        </div>
                        <div class="col-md-6 my-1">
                            <input class="form-control-custom" name="email" id="email" type="email" placeholder="Enter your email">
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 mt-md-0 mt-3">
                    <div class="d-flex">
                        <i class="fa-solid fa-house-chimney fa-fw"></i>
                        <p class="ps-2">Manhattan, NY 10036, United States</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-solid fa-mobile-screen-button fa-fw"></i>
                        <p class="ps-2">000 00 00 00</p>
                    </div>
                    <div class="d-flex">
                        <i class="fa-regular fa-envelope fa-fw"></i>
                        <p class="ps-2 pe-4">davidebenedetti1995@gmail.com</p>
                    </div>
                </div>
                
                <div class="col-12 pt-4">
                    <button type="submit" class="btn-custom">Submit</button>
                </div>   
            </div>
        </form>    
    </section>
    
    {{-- Footer --}}
    <x-footer/>
</x-layout>
