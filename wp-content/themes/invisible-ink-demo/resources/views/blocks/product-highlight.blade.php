<div class="product-highlight {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="container">
    <h3 class="product-highlight__title">{{ $title }}</h3>
    @if( $block->preview )
    <div class="product-highlight__preview">
      Product carousel will display here
    </div>
    @else
    <div class="product-highlight__product-slide">
      <div class="product-highlight__swiper swiper">
        <div class="swiper-wrapper">
          @foreach( $products as $product )
          <div class="product-highlight__slide swiper-slide">
            <div class="product-highlight__item">
              <div class="product-highlight__image-container">
                <img src="{{ $product['thumbnail']}} " alt="{{ $product['title'] }}" class="product-highlight__image">
              </div>
              <p class="product-highlight__brand">{{ $product['brand'] }}</p>
              <p class="product-highlight__name">{{ $product['title'] }}</p>
              <p class="product-highlight__price">S${{ $product['price'] }}</p>
              <p class="product-highlight__link-container">
                <a href="{{ $product['url'] }}" class="product-highlight__link">Discover more</a>
              </p>
            </div>
          </div>
          @endforeach
        </div>
        <div class="product-highlight__button-prev swiper-button-prev"></div>
        <div class="product-highlight__button-next swiper-button-next"></div>
        <div class="product-highlight__scrollbar swiper-scrollbar"></div>
      </div>
    </div>
    @endif
  </div>
</div>
