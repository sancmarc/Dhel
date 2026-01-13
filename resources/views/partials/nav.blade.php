<div class="fixed-top" id="fixedTop">
        <section class="container d-none d-md-block" id="contactInfo">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6 text-end">
                    <a href="#"><i class="bi bi-telephone-fill"></i> 0997-7942-104/0929-6412-578
                    </a>
                    <a href="#">
                        <i class="bi bi-envelope-fill"></i> saleshqmff@gmail.com
                    </a>
                </div>
            </div>
            <hr class="my-2">
        </section>
        <div class="container navbar-expand-lg mb-5">
            <nav class="navbar">
                <button class="navbar-toggler navbar-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center bg-nav" id="navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('/')) ? 'active' : '' }}" href="/">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('chairs')) ? 'active' : '' }}" href="{{route('chairs')}}">CHAIRS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ (request()->is('tables')) ? 'active' : '' }}" href="{{route('tables')}}">TABLES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{ (request()->is('beds')) ? 'active' : '' }}" href="{{route('beds')}}">BEDS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('gates')) ? 'active' : '' }}" href="{{route('gate')}}">GATES</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('doors')) ? 'active' : '' }}" href="{{route('doors')}}">DOORS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('railings')) ? 'active' : '' }}" href="{{route('railings')}}">RAILINGS</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('chandelier')) ? 'active' : '' }}" href="{{route('chandelier')}}">CHANDELIER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->is('client')) ? 'active' : '' }}" href="{{route('client')}}">CLIENT</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>
    </div>