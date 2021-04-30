<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="inner">
      <ul class="header_nav">
        <li><a href="{{ route('home') }}">top</a></li>
        <li>category</li>
        <li>news</li>
        <li>contact</li>
        <li>
          <a href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        <li>
          <form action="{{ route('main.search') }}" method="GET">
            <div class="serch">
              <input name="name" type="serch" placeholder="Search...">
              <input type="submit" value="&#xf002;" class="fas">
            </div>
          </form>
        </li>
      </ul>
    </div>
  </header>
  @yield ('main')
  <footer>
    <div class="inner">
      <ul class="footer_icon">
        <li><a herf="#"><i class="fab fa-facebook-f fa-3x"></i></a></li>
        <li><a herf="#"><i class="fab fa-twitter-square fa-3x"></i></a></li>
        <li><a herf="#"><i class="fab fa-youtube fa-3x"></i></a></li>
        <li><a herf="#"><i class="fab fa-instagram fa-3x"></i></a></li>
        <li><a herf="#"><i class="far fa-envelope fa-3x"></i></a></li>
      </ul>
    </div>
  </footer>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
  <script src=" {{ mix('js/app.js') }} "></script>
  <script src="{{ asset('/js/ec.js') }}"></script>
</body>
</html>