<a href="{{ route($route) }}" class="card-block clearfix card-link">
  <div class="card">
    <div class="card-body card-body-effect bg-secondary text-white">
      <h5 class="card-title">
        <i class="fas fa-{{ $icon }}"></i>
        {{ __($title) }}
      </h5>
      <div class="text-right">
        <i class="fas fa-angle-double-right fa-2x text-white-50"></i>
      </div>
    </div>
  </div>
</a>