<section>
  <div class="hero">
    <div class="container">
      <h1 class="hero__title">
        <span class="headline">
          {{ $data['title'] }}
        </span>
      </h1>
    </div>
    <video class="hero__bg" playsinline autoplay muted loop poster>
      <source src="{{ $data['bg']['url'] }}" type="video/mp4">
    </video>
  </div>
</section>