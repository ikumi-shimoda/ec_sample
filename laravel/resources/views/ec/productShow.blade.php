@extends ('common.app')
@section ('main')

<main>
  <div class="inner">
    <article class="main_contents">
      <h1 class="heading">product</h1>
      <div class="divide">
        <div class="divide_left">
          <img class="products_img" src="{{ asset('/img/' . $product->image) }}" alt="商品画像">
        </div>
        <div class="divide_right">
          <h2 class="heading">{{ $product->name }}</h2>
          <p class="main_contents">{{ $product->description }}</p>
          <h4>¥ {{ $product->price }}</h4>
          <div class="option">
            <form>
              <label class="label">Color<select>
                <option value="red">Red</option>
                <option value="">Blue</option>
              </select></label>
              <label class="label">Size<select>
                <option value="small">Small</option>
                <option value="midium">Midium</option>
                <option value="large">Large</option>
              </select></label>
              <div class="btn-border-gradient-wrap btn-border-gradient-wrap--gold">
                <a href="" class="btn btn-border-gradient"><button type="submit" class="btn-text-gradient--gold button">Add To Cart</button></a>
              </div>
            </form>
          </div>
        </div>
      </div>
      <ul class="items">
        @foreach ($reverseProducts as $product)
          <li>
          <a href="{{ route('product.show', $product->id) }}">
          <img class="products_img" src="{{ asset('/img/' . $product->image) }}" alt="商品画像">
          </a>
          </li>
        @endforeach
       </ul>
    </article>
  </div>
</main>

@endsection