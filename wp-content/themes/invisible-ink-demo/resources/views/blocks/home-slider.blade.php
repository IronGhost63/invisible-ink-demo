<div class="home-slider {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="home-slider__swiper swiper">
    <div class="swiper-wrapper">
      @foreach( $slides as $slide )
      <div class="home-slider__slide swiper-slide" data-title="{{ $slide['title'] }}">
        <img src="{{ $slide['background'] }}" alt="{{ $slide['title'] }}" class="home-slider__slide-background">
        <div class="home-slider__slide-content">
          <h3 class="home-slider__slide-tagline">{{ $slide['tagline'] }}</h3>
          <h3 class="home-slider__slide-title">{{ $slide['title'] }}</h3>
          <a href="{{ $slide['link']['url'] }}" class="home-slider__slide-link">{{ $slide['link']['title'] }}</a>
        </div>
      </div>
      @endforeach
    </div>
    <div class="home-slider__button-next swiper-button-next"></div>
    <div class="home-slider__button-prev swiper-button-prev"></div>
    <div class="home-slider__pagination container"></div>
  </div>
</div>
