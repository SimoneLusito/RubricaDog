<x-layout>
    @if (session()->has('success'))
        <div class="alert alert-danger">
            {{ session('success') }}
    @endif
    <div class="container-fluid containerbg">
        <div class="row">
            <h2 class="d-flex justify-content-center mt-5">LISTA CANI</h2>
            @foreach ($dogs as $dog)
                <div class=" col-12 col-md-4  mt-5 d-flex justify-content-around">
                    <x-card :dog="$dog" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
