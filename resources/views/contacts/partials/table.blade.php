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

<div class="col-xs-4">
    <a href="{{ route('producer-contacts.create') }}" class="btn btn-danger pull-right">
        <i class="fa fa-plus"></i> Novo Contato</a>
</div>
<table id="contacts_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
    <thead>
    <tr>
        <th>#</th>
        <th>Tipo de Contato</th>
        <th>Contato</th>
        <th></th>
    </tr>
    </thead>

    @forelse ($producerContacts as $producerContact)
        <tr>

            <td><a href="{{ route('producers.show', ['id' => $producer->id]) }} ">{{$producer->id}}</a></td>
            <td>{{ is_null($producer->name) ? : $producer->name }}</td>
        </tr>
    @empty
        <p>Nenhum Contato encontrado</p>
    @endforelse
</table>

