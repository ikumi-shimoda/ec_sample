<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="inner">
      <ul class="header_nav">
        <li>top</li>
        <li>category</li>
        <li>news</li>
        <li>contact</li>
        <li>
          <form action="" method="POST">
            <div class="serch">
              <input name="serch" type="serch" placeholder="Search...">
              <input type="submit" value="&#xf002;" class="fas">
            </div>
          </form>
        </li>
      </ul>
    </div>
  </header>
  <main>
    <!-- <img class="main_visual" src="{{ asset('/img/main.jpg') }}" alt="メインビジュアル"> -->
    <div class="main_visual"></div>
    <div class="inner">
      <article class="main_contents">
        <h1 class="heading">New Arrivals</h1>
        <ul class="items">
          <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/01.jpg') }}" alt="商品画像"></a>
            <p>商品名</p>
            <small>¥ 5,000</small>
          </li>
          <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/02.jpg') }}" alt="商品画像"></a>
            <p>商品名商品名</p>
            <small>¥ 5,000</small>
          </li>
          <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/03.jpg') }}" alt="商品画像"></a>
            <p>商品名商品名商品名</p>
            <small>¥ 5,000</small>
          </li>
          <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/04.jpg') }}" alt="商品画像"></a>
            <p>商品名商品名</p>
            <small>¥ 5,000</small>
          </li>
        </ul>
        <h1 class="heading">Best Sellers</h1>
        <ul class="items">
        <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/03.jpg') }}" alt="商品画像"></a>
            <p>商品名</p>
            <small>¥ 5,000</small>
          </li>
          <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/01.jpg') }}" alt="商品画像"></a>
            <p>商品名</p>
            <small>¥ 5,000</small>
          </li>
          <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/04.jpg') }}" alt="商品画像"></a>
            <p>商品名</p>
            <small>¥ 5,000</small>
          </li>
          <li>
            <a href="#"><img class="products_img" src="{{ asset('/img/02.jpg') }}" alt="商品画像"></a>
            <p>商品名</p>
            <small>¥ 5,000</small>
          </li>
        </ul>
        <div class="news">
          <h1 class="heading">Infos</h1>
          <ul>
            <li><a class="link" ="#">お知らせのテキストお知らせのテキスト</a></li>
            <li><a class="link" href="#">お知らせのテキストお知らせのテキスト</a></li>
          </ul>
        </div>
      </article>
    </div>
  </main>
  <div class="clear"></div>
  <footer class="col-12">
    <div class="inner"></div>
  </footer>
</body>
</html>