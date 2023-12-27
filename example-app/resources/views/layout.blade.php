<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
      integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
      integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
      crossorigin="anonymous"
    ></script>
    <title>@yield('title')</title>
</head>
<body style="margin: 0; padding: 0 ; background-color: aliceblue ">
<header>
      <nav>
          <ul class='nav-bar'>
              <li class='logo'><a href="{{ route('home')}}"><img src='assets/Leaf.jpg'style="border-radius: 25%;"/></a></li>
              <input type='checkbox' id='check' />
              <span class="menu">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact') }}">Conatct Us</a></li>
                <li><a href="{{ route('about') }}">About</a></li>
                <li><a href="{{ route('donate') }}">Donate</a></li>
                <li><a href="{{ route('shopNow') }}">Shop Now</a></li>
                <li><a href="{{ route('cart') }}">Cart</a></li>
                @auth
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown" style='color: green'>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-success" style='width: 100%'>Logout</button>
                        </form>

                    </ul>
                </li>
                @else
                <li><a href="{{ route('loginView') }}">Login</a></li>
                @endauth
                </span>
                <label for="check" class="close-menu"><i class="fas fa-times"></i></label>
              
              <label for="check" class="open-menu"><i class="fas fa-bars"></i></label>
          </ul>
      </nav>
      </header>
    
    @yield('content')


    <div class="footer" style="margin-top: 30px;">
  <div class="contain">
  <div class="col">
    <h1>Company</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Products</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Accounts</h1>
    <ul>
      <li>About</li>
      <li>Mission</li>
      <li>Services</li>
      <li>Social</li>
      <li>Get in touch</li>
    </ul>
  </div>
  <div class="col">
    <h1>Resources</h1>
    <ul>
      <li>Webmail</li>
      <li>Redeem code</li>
      <li>WHOIS lookup</li>
      <li>Site map</li>
      <li>Web templates</li>
      <li>Email templates</li>
    </ul>
  </div>
  <div class="col">
    <h1>Support</h1>
    <ul>
      <li>Contact us</li>
      <li>Web chat</li>
      <li>Open ticket</li>
    </ul>
  </div>
  <div class="col social">
    <h1>Social</h1>
    <ul>
      <li><img src="assets/facebook.png" width="2" style="width: 20px;"></li>
        <li><img src="assets/twitter.png" width="20" style="width: 20px;"></li>
        <li><img src="assets/gmail.png" width="20" style="width: 20px;"></li>    </ul>
  </div>
<div class="clearfix"></div>
</div>
</div>


</body>
</html>
