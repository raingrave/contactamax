<li class="nav-item">
  <a class="nav-link" href="{{ route('dashboard.index') }}">
    <i class="fas fa-home"></i>
    {{ __('Início') }}
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('dashboard.product.create') }}">
    <i class="fas fa-plus"></i>
    {{ __('Novo produto') }}
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('dashboard.input.order.create') }}">
    <i class="fas fa-angle-double-down"></i>
    {{ __('Nota de entrada') }}
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('dashboard.input.order.create') }}">
    <i class="fas fa-angle-double-up"></i>
    {{ __('Nota de saída') }}
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="{{ route('dashboard.input.order.create') }}">
    <i class="fas fa-chart-line"></i>
    {{ __('Relatórios') }}
  </a>
</li>