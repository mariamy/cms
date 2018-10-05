<input 
    placeholder="{{ $placeholder or '' }}" 
    type="number" 
    class="form-control{{ $errors->has($name) ? ' is-invalid' : '' }}" 
    name="{{ $name }}" 
    value="{{ $value or '' }}"
    {{ isset($disabled) ? 'disabled' : ''}}
/>
