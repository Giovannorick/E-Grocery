<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('storage/image/logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand fw-bold" href="/home">
                    <img src="{{ asset('storage/image/logo.png') }}" alt="E-GROCERY" style="height: 80px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav me-auto">
                        @auth
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('home') ? 'active fw-bold text-success' : 'text-white' }}"
                                    href="/home" style="font-size: 1.2rem;">{{ __('template.home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('cart') ? 'active fw-bold text-success' : 'text-white' }}"
                                    href="/cart" style="font-size: 1.2rem;">{{ __('template.cart') }}</a>
                            </li>
                            @if (Auth::user()->role_id == 1)
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->is('accountMaintenance') ? 'active fw-bold text-success' : 'text-white' }}"
                                        href="/accountMaintenance"
                                        style="font-size: 1.2rem;">{{ __('template.maintenance') }}</a>
                                </li>
                            @endif
                        @endauth
                    </ul>
                    <ul class="navbar-nav ms-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('register') ? 'active fw-bold text-success' : 'text-white' }}"
                                    href="/register">
                                    <button class="btn btn-outline-warning"
                                        style="font-size: 1.2rem;">{{ __('template.register') }}</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->is('login') ? 'active fw-bold text-success' : 'text-white' }}"
                                    href="/login">
                                    <button class="btn btn-outline-warning"
                                        style="font-size: 1.2rem;">{{ __('template.login') }}</button>
                                </a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item dropdown d-flex align-items-center justify-content-center">
                                <a class="nav-link dropdown-toggle text-white" href="#" id="languageDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"
                                    style="font-size: 1.2rem;">
                                    {{ __('template.language') }}
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="languageDropdown">
                                    <li>
                                        <a class="dropdown-item {{ app()->getLocale() == 'en' ? 'active' : '' }}"
                                            href="{{ url('locale/en') }}">English</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item {{ app()->getLocale() == 'id' ? 'active' : '' }}"
                                            href="{{ url('locale/id') }}">Bahasa Indonesia</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown d-flex align-items-center justify-content-center">
                                <a class="nav-link dropdown-toggle text-white d-flex justify-content-center align-items-center"
                                    href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false" style="font-size: 1.2rem;">
                                    <i class="bi bi-person-circle" style="font-size: 30px;"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
                                    <li>
                                        <a class="dropdown-item {{ request()->is('profile') ? 'active' : '' }}"
                                            href="/profile">{{ __('template.profile') }}</a>
                                    </li>
                                    <li>
                                        <form action="/logout" method="get" class="d-inline">
                                            <button class="dropdown-item"
                                                type="submit">{{ __('template.logout') }}</button>
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    {{-- Content --}}
    <main class="container my-4">
        @yield('body')
    </main>

    {{-- Footer --}}
    <footer class="footer text-center py-3 navbar-dark bg-dark text-white">
        <div class="container py-3">
            <p class="mb-0">&copy; E-Grocery 2023</p>
            <p class="mb-0">Made by Giovan Norick Yang</p>
        </div>
    </footer>
</body>

</html>
