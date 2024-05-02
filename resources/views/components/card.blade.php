<div class="card cardcustom">
    <img src="{{ Storage::url($dog->img) }}" class="card-img-top" alt="...">
    <div class="card-body cardbodycustom">
        <h5 class="card-title text-truncate">NOME: {{ $dog->name }}</h5>
        <h5 class="card-title">ETA': {{ $dog->age }}</h5>
        @if ($dog->category)
            <a class="categorylink" href="{{ route('category.dogs', ['category' => $dog->category]) }}"> RAZZA:
                {{ $dog->category->name }} </a>
        @else
            <p> no category'</p>
        @endif
        <a href="{{ route('dogs.show', ['dog' => $dog]) }}" class="btn btninfo d-flex mt-2">INFO</a>
        <a href="{{ route('dogs.edit', ['dog' => $dog]) }}" class="btn btnedit d-flex mt-2">MODIFICA</a>
        <form method="POST" action="{{ route('dogs.destroy', ['dog' => $dog]) }}">
            @csrf
            @method('delete')
            <button type="submit" class="btn btnremove mt-3 d-flex">ELIMINA</button>
        </form>
    </div>
</div>
