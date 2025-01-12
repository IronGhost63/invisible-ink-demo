<div class="navigation">
  <div class="container">
    <div class="navigation__logo">
      <a href="{{ $site_url }}" class="navigation__home-link">
        <img src="@asset('images/logo.svg')" alt="{{ $site_name }}" class="navigation__logo-image">
      </a>
    </div>
    <div class="navigation__mobile-menu">
      <button class="navigation__mobile-trigger">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</div>
<div class="main-menu">
  <a href="#" class="main-menu__close-btn">&times;</a>
  <ul class="main-menu__container">
    @foreach ( $menu as $item)
    <li class="main-menu__item">
      <a href="{{ $item['url'] }}" class="main-menu__item-link {{ $item['active'] ? 'active' : '' }}">{{ $item['title'] }}</a>
    </li>
    @endforeach
  </ul>
</div>
