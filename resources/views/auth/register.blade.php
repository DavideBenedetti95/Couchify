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
  @if ($errors -> any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors -> all() as $error)
      <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
  @endif 
  {{-- Login Section --}}
  <section class="container pt-5 section-height-login animate__animated animate__backInUp">
    <div class="row">
      <div class="col-12 d-flex justify-content-center align-items-center flex-column">
        <h3 class="display-4 animate__animated animate__bounce text-center">Benvenuto, inserisci i tuoi dati per registrarti</h3>
        <div class="col-12 mt-5 d-flex justify-content-center align-items-center">
          <form method="POST" action="{{route('register')}}">
            @csrf
            <div class="mb-3 animate__animated animate__backInLeft">
              <label class="form-label">Nome Utente</label>
              <input type="text" class="form-control-custom" name="name">
            </div>
            <div class="mb-3 animate__animated animate__backInRight">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control-custom" name="email">
            </div>
            <div class="mb-3 animate__animated animate__backInLeft">
              <label  class="form-label">Password</label>
              <input type="password" class="form-control-custom" name="password">
            </div>
            <div class="mb-3 animate__animated animate__backInRight">
              <label  class="form-label">Conferma la tua Password</label>
              <input type="password" class="form-control-custom" name="password_confirmation">
            </div>
            <button type="submit" class="btn cart_button mt-3">Registrati</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  {{-- Footer --}}
  <x-footer/>
</x-layout>