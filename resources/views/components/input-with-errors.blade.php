<div class="col-md-6">
    <label for="input{{ $name }}" class="form-label">{{ $label }}</label>
    <input type="{{$type}}" name="{{ $name }}" value="{{ $value }}" class="form-control" id="input{{ $name }}">
    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror
</div>
