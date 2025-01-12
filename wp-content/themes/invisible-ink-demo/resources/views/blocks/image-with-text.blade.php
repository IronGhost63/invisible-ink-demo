<div class="image-with-text {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="image-with-text__image-container">
    <img src="{{ $image }}" alt="{{ $title }}" class="image-with-text__image">
  </div>
  <div class="image-with-text__content">
    <h3 class="image-with-text__title">{{ $title }}</h3>
    <div class="image-with-text__description">{{ $description }}</div>
    @if( $link )
    <a href="{{ $link['url'] }}" class="image-with-text__link" target="{{ $link['target'] }}">{{ $link['title'] }}</a>
    @endif
  </div>
</div>
