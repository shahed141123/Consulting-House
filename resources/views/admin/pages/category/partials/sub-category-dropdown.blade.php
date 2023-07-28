<option></option>
@foreach ($subCategories as $subCategorie)
    <option value="{{ $subCategorie->id }}">{{ $subCategorie->name }}</option>
@endforeach
