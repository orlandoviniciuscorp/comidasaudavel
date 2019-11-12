@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

@if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
@endif

<table id="producer_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Produtor</th>
    </tr>
    </thead>

    @forelse ($producers as $producer)
        <tr>

            <td><a href="{{ route('producers.show', ['id' => $producer->id]) }} ">{{$producer->id}}</a></td>
            <td>{{ is_null($producer->name) ? : $producer->name }}</td>
        </tr>
    @empty
        <p>Nenhum Produtor encontrado</p>
    @endforelse
</table>
