<section class="section">
  <div class="container">
    @if($data['title'])
      @include('partials.title', ['title' => $data['title']])
    @endif
  </div>
    <div class="menu">
      <div class="container">
        <div class="menu__buttons">
          @foreach(get_option_field("menu") as $item)
            <a href="#" class="menu__button @if($loop->first) menu__button--active @endif" menu-button="{{ $item['content']['title'] }}">
              {{ $item['content']['title'] }}
            </a>
          @endforeach
        </div>
      </div>
      <div class="menu__main text">
        <div class="menu__bg">
          <img class="menu__img" src="@asset('./images/pizzabg.jpg')" alt="pizza">
        </div>
        <div class="container menu__content menu__content--active" menu-content="pizza">
          <div class="menu__columns">
            <table class="table">
              @foreach(get_option_field("menu")[0]['content']['list'] as $item)
                @php
                  $half = $loop->count/2
                @endphp
                @if($loop->iteration <= $half)
                  <tr>
                    <td>
                      <span class="text--bold">
                        {{ $loop->index+1 }}. {{ $item['name'] }}
                      </span>
                      <br>
                      ({{ $item['desc'] }})
                    </td>
                    <td>{{ $item['price'] }} zł</td>
                    <td>{{ $item['price2'] }} zł</td>
                  </tr>
                @endif
              @endforeach
            </table>
            <table class="table">
              @foreach(get_option_field("menu")[0]['content']['list'] as $item)
                @php
                  $half = $loop->count/2
                @endphp
                @if($loop->iteration > $half)
                  <tr>
                    <td>
                      <span class="text--bold">
                        {{ $loop->index+1 }}. {{ $item['name'] }}
                      </span>
                      <br>
                      ({{ $item['desc'] }})
                    </td>
                    <td>{{ $item['price'] }} zł</td>
                    <td>{{ $item['price2'] }} zł</td>
                  </tr>
                @endif
              @endforeach
            </table>
          </div>
        </div>
      </div>
    </div>
</section>