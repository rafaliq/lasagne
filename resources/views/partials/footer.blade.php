@if(get_field('show_map'))
  <section class="section">
    <div class="container contact">
      <div class="contact__content">
        <h2 class="title">
          Kontakt
        </h2>
        <div class="text contact__text">
          <p>
            {{  get_option_field("name")  }}
          </p>
          <p>
            {!! get_option_field("address") !!}
          </p>
          <p>
            Telefon: 
            <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}" class="link">
              {{ get_option_field("phone") }}
            </a>
          </p>
        </div>
      </div>
      <div class="contact__map">
        {!! do_shortcode('[google_map_easy id="1"]') !!}
      </div>
    </div>
  </section>
@endif
<footer class="footer">
  <div class="container">
    <div class="footer__row">
      <div class="footer__copyright text text--white">
        {{ get_option_field("copyright") }}
      </div>
      <div class="footer__logo">
        <a href="http://iqconnect.pl">
          <img src="{{ get_option_field('iqlogo')['url'] }}" alt="{{ get_option_field('iqlogo')['alt'] }}">
        </a>
      </div>
    </div>
  </div>
</footer>