<div class="grid grid-cols-3 gap-3">
    @foreach ($fotos as $foto)
        <img src="{{ asset('storage/' . $foto->foto) }}" class="rounded-lg shadow-md h-24 w-full object-cover">
    @endforeach
</div>
