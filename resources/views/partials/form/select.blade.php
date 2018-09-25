<select name="{{ $name or ''}}" id="{{ $id or '' }}"  name="{{ $value or '' }}" class="form-control custom-select" >
  @foreach($options as $key => $option)
  <option {{ $key == $value ? 'selected' : '' }} value="{{ $key }}">{{ $option }}</option>
  @endforeach                            
</select>