<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Couchify</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
    {{-- Kursor CSS --}}
    <link href="
    https://cdn.jsdelivr.net/npm/kursor@0.1.6/dist/kursor.min.css
    " rel="stylesheet">
    {{-- Favicon --}}
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    {{-- Swiper CSS --}}
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
    <!-- Aos CDN -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    @if (session('message'))
        <div class="alert alert-success">
        <p class="m-0">{{session('message')}}</p>
        </div>
    @endif
    @if (session('errorMessage'))
        <div class="alert alert-danger">
        <p class="m-0">{{session('errorMessage')}}</p>
        </div>
    @endif
    
    
    <main>
        {{$slot}}
    </main>


    {{-- Kursor JS --}}
    <script src="https://cdn.jsdelivr.net/npm/kursor"></script>
    <script>
        new kursor({
            removeDefaultCursor: true,
            type: 4,
            color: '#000000',
        })
    </script>
    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    {{-- Fontawesome --}}
    <script src="https://kit.fontawesome.com/e3cc6884a7.js" crossorigin="anonymous"></script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- Inizialize and AOS Setting -->
    <script>
        AOS.init({
        });
    </script>
    {{-- Typed.js --}}
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#sale', {
          strings: ['tutti i nostri Divani. ^1000', 'tutte le nostre Poltrone. ^1000',' tutti i nostri Puff. ^1000'],
          typeSpeed: 50,
          loop: true,
          backSpeed: 50,
        });
      </script>
</body>
</html>
