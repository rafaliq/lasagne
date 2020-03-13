<section class="section section--color">
  <div class="container">
    @if($data['title'])
      @include('partials.title', ['title' => $data['title']])
    @endif
    <div class="gallery">
      @php
        $galleryName = rand(1, 999);
      @endphp
      @foreach ($data['gallery'] as $img)
        <div class="gallery__image">
          <a data-fancybox="gallery{{$galleryName}}" href="{{ $img['url'] }}">
            <img class="gallery__image" src="{{ $img['url'] }}">
          </a>
        </div>  
      @endforeach
    </div>
    <div class="button--center">
      <a href="#" class="button button--dark button--center">
        Więcej
      </a>
    </div>
  </div>
</section>