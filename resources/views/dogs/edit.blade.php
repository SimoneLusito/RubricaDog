<x-layout>
    <div class="container-fluid bg-img">
        <div class="row">
            <div class="col-12">
                @if (session()->has('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                @endif
            </div>
            
            <div class="col-12 col-sm-3 m-5 p-4 container-create">
            <form method="POST" action="{{ route('dogs.update', ['dog' => $dog]) }}" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ $dog->name }}">
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Età</label>
                    <input type="number" class="form-control" id="age" name="age"
                        value="{{ $dog->age }}">
                </div>
                @error('age')
                    {{ $message }}
                @enderror
                <div class="mb-3">
                    <label for="img" class="form-label">Immagine</label>
                    <input type="file" class="form-control" id="img" name="img">
                </div>
                @error('img')
                    {{ $message }}
                @enderror
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input type="text" class="form-control" id="description" name="description"
                        value="{{ $dog->description }}">
                </div>
                @error('description')
                    {{ $message }}
                @enderror
                <button type="submit" class="btn btn-success">MODIFICA</button>
            </form>
        </div>
    </div>
    </div>
</x-layout>
