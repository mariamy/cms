<input 
    placeholder="{{ $placeholder or '' }}" 
    type="text" 
    class="form-control{{ isset($name) && $errors->has($name) ? ' is-invalid' : '' }}" 
    name="{{ $name or '' }}" 
    value="{{ $value or '' }}"
    {{ isset($disabled) ? 'disabled' : ''}}
/>
