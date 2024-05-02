<x-layout>

    <div class="container-fluid bg-img">
        <div class="row">
            @if (session()->has('success'))
                <div class="col-12">
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                </div>
            @endif
            <div class="col-12 col-sm-3 m-5 p-4 container-create">
                <form method="POST" action="{{ route('dogs.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">NOME</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}">
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="age" class="form-label">ETA'</label>
                        <input type="number" class="form-control" id="age" name="age"
                            value="{{ old('age') }}">
                    </div>
                    @error('age')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="img" class="form-label">IMMAGINE</label>
                        <input type="file" class="form-control" id="img" name="img">
                    </div>
                    @error('img')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-3">
                        <label for="description" class="form-label">DESCRIZIONE</label>
                        <input type="text" class="form-control" id="description" name="description"
                            value="{{ old('description') }}">
                    </div>
                    @error('description')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <select class="form-select" aria-label="Default select example" name="category_id">
                        <option value="" selected>SELEZIONE RAZZA</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <button type="submit" class="btn btn-create mt-5">INSERISCI</button>
                </form>
            </div>

        </div>
    </div>

</x-layout>
