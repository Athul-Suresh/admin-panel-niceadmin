<div class="col-6">

    <label for="input{{ $name }}" class="form-label">{{ $label }}</label>
    <select for="input{{ $name }}"  class="form-select" name="{{ $name }}">
        <option selected value="">Choose...</option>
        @forelse ($collection as $item)
            <option value="{{ $item->$value }}">{{  $item->$label }}</option>
        @empty
            <option value="{{ null }}">No Data</option>
        @endforelse
    </select>

    @error($name)
        <span class="text-danger">{{ $message }}</span>
    @enderror

</div>
