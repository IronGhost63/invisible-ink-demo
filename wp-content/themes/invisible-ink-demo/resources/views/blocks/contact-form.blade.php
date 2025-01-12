<div class="contact-form {{ $block->classes }}" style="{{ $block->inlineStyle }}">
  <div class="container mx-auto">
    @if ($contact_form_id)
    <h3 class="contact-form__title">{{ $title }}</h3>
    @if ( $block->preview )
    <div class="contact-form__preview">
      Your contact form will display here
    </div>
    @else
      {!! do_shortcode('[fluentform id="'.$contact_form_id.'"]') !!}
    @endif
  @else
    <p>Please select form id</p>
  @endif
  </div>
</div>
