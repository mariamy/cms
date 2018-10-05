<input 
    placeholder="{{ $placeholder or '' }}" 
    type="email" 
    class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" 
    name="{{ $name }}" 
    value="{{ $value or '' }}"
/>
