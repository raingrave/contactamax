<nav class="navbar navbar-expand navbar-light bg-light width-100">
  <a class="navbar-brand">
    {{ config('app.name', 'Laravel') }} - gestão de estoque
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    @auth
      <ul class="navbar-nav mr-auto">
        @include('partials._topmenu')
      </ul>
      <ul class="navbar-nav">
        @include('partials._notification')
        @include('partials._logout')
      </ul>
    @endauth
  </div>
</nav>