

<div class="col-md-12">
    @if(isset($errors) && $errors->any())
      <p class="alert alert-danger">{{ $errors->first() }}</p>
    @endif
</div>
