<section class="section">
  <div class="container">
    @if($data['title'])
      @include('partials.title', ['title' => $data['title']])
    @endif
    <div class="menu">
      <div class="menu__buttons">
        <a href="#" class="menu__button menu__button--active" menu-button="pizza">
          Pizza
        </a>
        <a href="#" class="menu__button" menu-button="burger">
          Burger
        </a>
        <a href="#" class="menu__button" menu-button="salatki">
          Sałatki
        </a>
        <a href="#" class="menu__button" menu-button="obiady">
          Obiady
        </a>
        <a href="#" class="menu__button" menu-button="sniadania">
          Śniadania
        </a>
        <a href="#" class="menu__button" menu-button="fastfood">
          Fast food
        </a>
        <a href="#" class="menu__button" menu-button="zupy">
          Zupy
        </a>
        <a href="#" class="menu__button" menu-button="ryby">
          Ryby
        </a>
        <a href="#" class="menu__button" menu-button="makarony">
          Makarony
        </a>
        <a href="#" class="menu__button" menu-button="desery">
          Desery
        </a>
        <a href="#" class="menu__button" menu-button="dzieci">
          Dla dzieci
        </a>
        <a href="#" class="menu__button" menu-button="pizza">
          Napoje
        </a>
      </div>
    </div>
  </div>
</section>