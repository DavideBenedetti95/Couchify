<div class="container-fluid header-background">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{route('homepage')}}"><h3>Couchify.</h3></a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="nav-link text-dark h5 d-lg-none pt-2" href="">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            
                <div class=" collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto ">
                        <li class="nav-item">
                            <a class="nav-link mx-2" aria-current="page" href="{{route('homepage')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link mx-2 dropdown-toggle default-pointer" href="{{route('shop')}}" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Shop
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{route('shop')}}">Visualizza tutti i prodotti</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="dropdown_1" class="nav-link mx-2 dropdown-toggle default-pointer" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Ordini
                            </a>
                            <ul id="dropdown_menu_1" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" data-bs-popper="static">
                                <li><a class="dropdown-item" href="{{route('tracking')}}">Tracking</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-2" aria-current="page" href="{{route('contact')}}">Contatti</a>
                        </li>
                        <li class="nav-item dropdown d-lg-none d-md-block">
                            <a id="dropdown_1" class="nav-link mx-2 dropdown-toggle default-pointer" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Account
                            </a>
                            <ul id="dropdown_menu_1" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" data-bs-popper="static">
                                <li><a class="dropdown-item" href="{{route('login')}}">Log In</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto d-none d-lg-flex">
                        <li class="nav-item d-flex ms-2">
                            <a class="nav-link text-dark h5" href="{{route('login')}}">
                                <i class="fa-solid fa-user"></i>
                            </a>
                            <a class="nav-link text-dark h5 px-4" href="">
                                <i class="fa-regular fa-heart"></i>
                            </a>
                            <a class="nav-link text-dark h5" href="">
                                <i class="fa-solid fa-cart-shopping"></i>
                            </a>
                        </li>
                    </ul>  
                </div>
            </div>
        </nav>
    </div>
</div>    