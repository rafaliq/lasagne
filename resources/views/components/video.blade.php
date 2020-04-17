<section>
  <div class="video">
    <div class="container">
      <div class="video__content">
        <h1>
          <span class="headline video__title">
            {{ $data['title'] }}
          </span>
        </h1>
        <div class="text video__text">
          {!! $data['desc'] !!}
        </div>
        @if($data['link'])
          <a class="button" href="{{ $data['link']['url'] }}">
            {{ $data['link']['title'] }}
          </a>
        @endif
      </div>
    </div>
    <video class="video__bg" playsinline autoplay muted loop poster>
      <source src="{{ $data['video']['url'] }}" type="video/mp4">
    </video>
  </div>
</section>