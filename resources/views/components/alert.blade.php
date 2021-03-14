<div class="alert alert-{{ $theme }}" role="alert">
    {{ $slot }}

    @if($closeable == true)
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    @endif
  </div>
