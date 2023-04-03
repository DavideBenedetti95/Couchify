<x-layout>
    {{-- Navbar --}}
    <x-navbar/>
    {{-- Header --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 d-flex justify-content-center align-items-center height-header-column header-background">
                <h1 class="animate__animated animate__backInLeft display-3">ACCOUNT</h1>
            </div>
        </div>
    </div>
    {{-- Login Section --}}
    <section class="container pt-5 section-height-login animate__animated animate__backInUp">
        <div class="row h-100">
            <div class="col-6 d-flex justify-content-center align-items-center flex-column custom-background-login">
                <h3> Benvenuto su Couchify.</h3>
                <p class="py-3">Non sei ancora registrato? clicca qui sotto per registrarti</p>
                <button class="btn-custom-login">Registrati</button>
            </div>
            <div class="col-6 d-flex justify-content-center align-items-center flex-column">
                <h3 class="ps-2">Bentornato<br>Accedi al tuo account</h3>
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" class="form-control-custom">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control-custom">
                    </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                    </div>
                    <button type="submit" class="btn cart_button mt-3">Log In</button>
                    <div class="pt-3">
                        <a class="" href="">Hai dimenticato la tua password?</a>
                    </div>
                  </form>
            </div>
        </div>
    </section>
    {{-- Footer --}}
    <x-footer/>
</x-layout>