<div class="form-group {{ isset($name) && $errors->has($name) ? ' is-invalid' : '' }}">
    @if(isset($label))
      <label class="form-label">
        {{ __($label) }}
        @if(isset($required))
          <span class="form-required">*</span>
        @endif
      </label>
    @endif
    <div class="input-icon">
      @if(isset($icon))
        <span class="input-icon-addon">
            <i class="fa fa-{{ $icon }}"></i>
        </span>
      @endif
      @include('partials.form.' . (isset($type) ? $type : 'text') )
    </div>  
    @if (isset($name) && $errors->has($name))
      <span class="invalid-feedback">
          <strong>{{ $errors->first($name) }}</strong>
      </span>
    @endif
</div>