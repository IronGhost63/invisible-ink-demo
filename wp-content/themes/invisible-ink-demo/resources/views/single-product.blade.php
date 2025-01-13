@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="product__wrapper">
      @while(have_posts()) @php(the_post())
      <div class="product__photo">
        @php(the_post_thumbnail('large'))
      </div>
      <div class="product__detail">
        <div class="product__meta">
          <h1 class="product__title">@php( the_title() )</h1>
          <h3 class="product__brand">{{ get_field('brand') }}</h3>
          <h3 class="product__price">S${{ get_field('price') }}</h3>
        </div>
        <div class="product__description">
        @php( the_content() )
        </div>
      </div>
      @endwhile
    </div>
  </div>
@endsection
