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
        @foreach(get_option_field("menu") as $item)
          @php
            $content = $item['content']
          @endphp
          <div class="container menu__content @if($loop->first) menu__content--active @endif" menu-content="{{ $content['title'] }}">
            @php
              $countrows = count($content['list'])/2;
            @endphp
            @if($content['menu-type'] == 'pizza')
              <div class="menu__columns">
                <div class="menu__row menu__row--th menu__row--col3">
                  <div>
                  </div>
                  <div class="text--center">
                    {!! $content['size1'] !!}
                  </div>
                  <div class="text--center">
                    {!! $content['size2'] !!}
                  </div>
                </div>
                <div class="menu__row menu__row--th menu__row--col3">
                  <div>
                  </div>
                  <div class="text--center">
                    {!! $content['size1'] !!}
                  </div>
                  <div class="text--center">
                    {!! $content['size2'] !!}
                  </div>
                </div>
              </div>
            @endif
            <div class="menu__columns" style="grid-auto-flow: column; grid-template-rows: repeat({{ $countrows }}, 1fr);">
              @foreach($content['list'] as $item)
                <div class="menu__row @if($content['menu-type'] == 'pizza') menu__row--col3 @endif">
                    <div>
                      <span class="text--bold">
                        {{ $loop->index+1 }}. {{ $item['name'] }}
                      </span>
                      @if($item['desc'])
                        <br>
                        ({{ $item['desc'] }})
                      @endif
                    </div>
                    <div class="text--center">
                      {{ $item['price'] }} zł
                    </div>
                    @if($content['menu-type'] == 'pizza')
                      <div class="text--center">
                        @if($item['price2'])
                          {{ $item['price2'] }} zł
                        @endif
                      </div>
                    @endif
                </div>
              @endforeach
            </div>
          </div>
        @endforeach
      </div>
    </div>
</section>