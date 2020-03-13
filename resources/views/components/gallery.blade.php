@php
$gallery = $data['gallery'];
@endphp

<section>
  <div class="container">
    @if($data['title'])
      @include('partials.title', ['title' => $data['title'], 'subtitle' => $data['subtitle']])
    @endif
    <div class="gallery">
      @php
        $galleryName = rand(1, 999);
      @endphp
      @foreach ($gallery as $img)
        <div class="gallery__image">
          <a data-fancybox="gallery{{$galleryName}}" href="{{ $img['url'] }}">
            <img class="gallery__image" src="{{ $img['url'] }}">
          </a>
        </div>  
      @endforeach
    </div>
  </div>
</section>