<select name="{{ $name }}" class="form-control custom-select">
  @foreach($options as $key => $option)
  <option {{ $key == $value ? 'selected' : '' }} value="{{ $key }}">{{ $option }}</option>
  @endforeach                            
</select>
