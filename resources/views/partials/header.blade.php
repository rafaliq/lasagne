<header class="header" header>
  <div class="container">
    <div class="row header__row">
      @if(get_option_field("logo"))
        <a class="header__brand col-auto" href="{{ home_url('/') }}">
          <img src="{{  get_option_field("logo")['url'] }}" alt="{{  get_option_field("logo")['alt'] }}">
        </a>
      @else
        <span>
        </span>
      @endif
      <button class="header__hamburger hamburger" data-toggle-menu>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
        <span class="hamburger__line"></span>
      </button>
      <nav class="header__nav col-auto" data-nav>
         @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(
            [
              'theme_location' => 'primary_navigation',
              'menu_class' => 'header__menu',
            ]) !!}
        @endif
        <div class="header__button--mobile">
          <a href="{{ get_option_field("facebook") }}" style="text-decoration: none;">
            <i class="fab fa-facebook-square header__icon"></i>
          </a>
          <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}" class="button button--small">
            {{ get_option_field('phone')  }}
          </a>
        </div>
      </nav>
      <div class="header__button">
        <a href="{{ get_option_field("facebook") }}" style="text-decoration: none;">
          <i class="fab fa-facebook-square header__icon"></i>
        </a>
        <a href="tel:{{ str_replace(' ','', get_option_field('phone')) }}" class="button button--small">
          {{ get_option_field('phone')  }}
        </a>
      </div>
    </div>
  </div>
</header>