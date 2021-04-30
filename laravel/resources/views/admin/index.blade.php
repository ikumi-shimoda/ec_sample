@extends ('common.app')
@section ('main')

<main>
  <div class="inner">
    <article class="main_contents">
      管理画面
      商品
      <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <input type="text" name="name" placeholder="Name">
      <input type="number" name="price" placeholder="Price">
      <input type="number" name="category" placeholder="Category Number">
      <textarea name="description" cols="30" rows="10"  placeholder="Description"></textarea>
      <input type="file" name="image">
      <button type="submit" name="product">送信</button>
      <!-- お知らせ
      <input type="text" name="title"  placeholder="Title">
      <textarea name="contents" cols="30" rows="10" placeholder="Contents"></textarea>
      <button type="submit" name="info">送信</button>
      </form> -->
    </article>
  </div>
</main>

@endsection