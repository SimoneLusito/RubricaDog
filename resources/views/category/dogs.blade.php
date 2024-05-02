<x-layout>
    <div class="container-fluid" style="background: #cc6d33;">
        <div class="row">
            <h2 class="d-flex justify-content-center mt-5" style="text-transform:uppercase">{{$category->name }}</h2>
            @foreach ($category->dogs as $dog)
                <div class="col-6">
                    <x-card :dog="$dog" />
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
