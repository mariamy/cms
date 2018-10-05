<div style="margin-top: 34px">
  <input type="hidden" name="{{ $name }}" value="{{ $default_value or '' }}">
  <label class="custom-switch">
    <input type="checkbox" {{ isset($checked) && $checked ? 'checked' : '' }} name="{{ $name }}" value="{{ $value }}" class="custom-switch-input">
    <span class="custom-switch-indicator"></span>
    <span class="custom-switch-description">{{ $switch_label or '' }}</span>
  </label>
</div>
