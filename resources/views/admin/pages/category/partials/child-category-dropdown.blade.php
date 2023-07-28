<option></option>
@foreach ($childCategories as $childCategorie)
    <option value="{{ $childCategorie->id }}">{{ $childCategorie->name }}</option>
@endforeach
