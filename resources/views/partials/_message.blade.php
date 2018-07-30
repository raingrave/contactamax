@if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
    <strong>
      <i class="fas fa-check"></i>
    </strong>
    {{ __(session()->get('success')) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif

@if (session()->has('danger'))
  <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
    <strong>
      <i class="fas fa-exclamation-circle"></i>
    </strong>
    {{ __(session()->get('danger')) }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif