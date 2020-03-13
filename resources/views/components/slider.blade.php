<section>
  <div class="main-carousel">
      @foreach ($data['baner'] as $ban)
        <div class="slider carousel-cell">
          <img class="slider_bg" src="{{ $ban['image']['url'] }}" alt="{{ $data['image']['alt'] }}">
          <div class="container">
            <div class="slider__content">
              <h1>
                <span class="headline slider__title">
                  {{ $ban['title'] }}
                </span>
              </h1>
              <div class="text slider__text">
                {!! $ban['desc'] !!}
              </div>
              @if($ban['link'])
                <a class="button" href="{{ $ban['link']['url'] }}">
                  {{ $ban['link']['title'] }}
                </a>
              @endif
            </div>
          </div>
        </div>
      @endforeach
  </div>
</section>