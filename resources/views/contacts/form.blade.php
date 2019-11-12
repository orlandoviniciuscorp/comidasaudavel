@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-8 col-md-10">
                    <h4>
                        <a href="{{ route('producers.index') }}">Produtores</a>

                        @if(is_null($producer->id))
                            > NOVO
                        @else
                            > {{ $producer->name }}
                        @endif
                    </h4>
                </div>

                <div class="col-xs-4 col-md-2">
                    @include('partials.save-button')
                    @include('partials.edit-button', ['model' => $producer])
                </div>
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

            <form name="formulario" id="formulario" action="{{ route('producers.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="row">
                    <input name="id" type='hidden' value="{{$producer->id}}" id="id" >
                    <div class="form-group col-md-4">
                        <label for="name">Nome</label>
                        <input value="{{is_null(old('name')) ? $producer->name : old('name')}}" name="name" class="form-control" id="name" placeholder="Nome" @include('partials.readonly')>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="description">Descrição</label>
                        <textarea name="description" id="description" class="form-control">
                            {{is_null(old('description')) ? $producer->description : old('description')}}
                        </textarea>
                    </div>

                </div>

                @include('partials.save-button')
            </form>
        </div>
    </div>


@endsection
