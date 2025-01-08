<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('storage/image/no-bg.ico')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
{{-- Header --}}
<header>
  <h1 class="text-center text-dark m-0 p-0 py-3" style="background: #F2F3D9">AMAZING E-GROCERY</h1>

  <nav class="navbar navbar-expand-lg" style="background: #030027">
    <div class="container-fluid px-3 py-0">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto me-auto m-3 mb-lg-2">
          @auth 
          <ul class="navbar-nav mb-3 mb-lg-1">   
            <li class="nav-item mx-2">
                <a class="nav-link text-white fw-bold" aria-current="page" href="/home"><h3>{{__('template.home')}}</h3></a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link text-white fw-bold" aria-current="page" href="/cart"><h3>{{__('template.cart')}}</h3></a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link text-white fw-bold" aria-current="page" href="/profile"><h3>{{__('template.profile')}}</h3></a>
            </li>

            @auth
              @if(Auth::user()->role_id == 1)
                <li class="nav-item mx-2">
                    <a class="nav-link text-white fw-bold" aria-current="page" href="/accountMaintenance"><h3>{{__('template.maintenance')}}</h3></a>
                </li>
              @endif
            @endauth

            <form action="/logout" method="get">
              <button class="btn btn-outline-warning my-2 fw-bold" type="submit" value="logout">{{__('template.logout')}}</button>
            </form>
            
          </ul>
        </ul>  
          @else
            <ul class="navbar-nav ms-auto me-auto mb-3 mb-lg-1"> 
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/register">
                      <button class="btn btn-outline-warning mb-3 fw-bold w-100">{{__('template.register')}}</button>
                  </a>
              </li>
                
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="/login">
                      <button class="btn btn-outline-warning mb-3 fw-bold w-100">{{__('template.login')}}</button>
                  </a>
              </li>
            </ul>
          @endauth
      </div>
    </div>
  </nav>
</header>


{{-- content --}}
 <div class="flex-grow-1 p-2" style="background-color: #F2F3D9; height: auto;">
  <div class="py-3" style="background-color: #F2F3D9;">
    @yield('body')
  </div>
</div>

{{-- footer --}}
<footer>
  <div class="sticky-bottom text-center text-warning p-3 lh-1" style="background: #030027">
    <h6 >&copy;Amazing E-Grocery 2023</h6>
    <h7>Made by Giovan Norick Yang - 2440066216</h7>
  </div>
</footer>
</body>
</html>