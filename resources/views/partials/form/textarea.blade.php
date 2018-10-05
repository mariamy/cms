<textarea 
    placeholder="{{ $placeholder or '' }}" 
    type="textarea" 
    class="form-control{{ isset($name) && $errors->has($name) ? ' is-invalid' : '' }}" 
    name="{{ $name or '' }}"   
    rows="{{ $rows or '' }}"
    {{ isset($disabled) ? 'disabled' : ''}}
/>{{ $value or '' }}</textarea>
