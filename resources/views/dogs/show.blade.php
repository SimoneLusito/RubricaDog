<x-layout>
    <div class="container-fluid containerbg">
        <div class="row ">
            <div class="col-12 col-sm-12 d-flex justify-content-around colonna">
                <div class="card cardcustom">
                    <img src="{{ Storage::url($dog->img) }}" class="card-img-top" alt="...">
                    <div class="card-body cardbodycustom">
                        <h5 class="card-title mt-3">Nome:{{ $dog->name }}</h5>
                        <h5 class="card-title mt-3">Età:{{ $dog->age }}</h5>
                        @if ($dog->category)
                            <a class="categorylink mt-3"
                                href="{{ route('category.dogs', ['category' => $dog->category]) }}">
                                RAZZA: {{ $dog->category->name }} </a>
                        @else
                            <p> no category'</p>
                        @endif
                    </div>
                </div>
                <div class=" bgdescription">
                    <p style="font-size: 20px; font-family:Montserrat"class="fw-bold">
                        DESCRIZIONE:{{ $dog->description }}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>
