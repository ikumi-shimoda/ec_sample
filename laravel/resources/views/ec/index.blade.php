@extends ('common.app')
@section ('main')

  <main>
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img class="top_img" src="{{ asset('/img/main1.jpg') }}" alt="トップ画像">
          <a href="#"><p class="sale_link">See More</p></a>
        </div>
        <div class="swiper-slide">
          <img class="top_img" src="{{ asset('/img/main2.jpg') }}" alt="トップ画像">
          <a href="#"><div class="sale_link">See More</div></a>
        </div>
        <div class="swiper-slide">
          <img class="top_img" src="{{ asset('/img/main3.jpg') }}" alt="トップ画像">
          <a href="#"><div class="sale_link">See More</div></a>
        </div>
        ...
      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
      </div>
    <div class="inner">
    <!-- <div id="app">
      <example-component></example-component>
    </div> -->
      <article class="main_contents">
        <h1 class="heading"><i>New Arrivals</i></h1>
        <ul class="items">
          @foreach ($reverseProducts as $product)
            @if($loop->index <= 7)
              <li>
                <a href="{{ route('product.show', $product->id) }}">
                <img class="products_img" src="{{ asset('/img/' . $product->image) }}" alt="商品画像">
                </a>
                <p>{{$product->name}}</p>
                <small>¥ {{ $product->price }}</small>
              </li>
            @endif
          @endforeach
        </ul>
        <h1 class="heading"><i>Best Sellers</i></h1>
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
          <h1 class="heading"><i>Infos</i></h1>
          <ul>
            @foreach ($infos as $info)
              @if($loop->index <= 4)
                <li><span>{{ $info->created_at->format('Y/m/d') }}</span><a class="link" href="{{ route('info.show', $info->id) }}">{{ $info->title }}</a></li>
              @endif
            @endforeach
          </ul>
        </div>
      </article>
    </div>
  </main>

@endsection