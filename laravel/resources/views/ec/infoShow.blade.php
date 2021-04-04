@extends ('common.app')
@section ('main')

<main>
  <div class="inner">
    <h1 class="heading"><i>Infos</i></h1>
    <article class="main_contents">
    <h3>{{ $info->title }}</h3>
   
    <p class="sub_txt">{{ $info->created_at }}</p>
    {{ $info->contents }}
    </article>
  </div>
</main>

@endsection