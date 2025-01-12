<div class="newsletter {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="container">
    <h3 class="newsletter__title">{{ $title }}</h3>
    <div class="newsletter__input">
      <input type="email" name="email" class="newsletter__email" placeholder="Email">
      <button class="newsletter__subscribe">Subscribe</button>
    </div>
  </div>
</div>
