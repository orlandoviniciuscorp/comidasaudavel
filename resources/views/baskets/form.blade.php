@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="row">
                <div class="col-xs-8 col-md-10">
                    <h4>
                        <a href="{{ route('baskets.index') }}">Cestas</a>

                        @if(is_null($basket->id))
                            > NOVO
                        @else
                            > {{ $basket->name }}
                        @endif
                    </h4>
                </div>

                <div class="col-xs-4 col-md-2">
                    @include('partials.save-button')
                    @include('partials.edit-button', ['model' => $basket])
                </div>
            </div>
        </div>

        <div class="panel-body">
            @include('partials.alerts')

            <form name="formulario" id="formulario" action="{{ route('baskets.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="row">
                    <input name="id" type='hidden' value="{{$basket->id}}" id="id" >

                    <input name="created_by_id" type='hidden' value="1" id="created_by_id" >
                    <div class="form-group col-md-4">
                        <label for="name">Título da Cesta</label>
                        <input value="{{is_null(old('title')) ? $basket->titile : old('title')}}" name="title" class="form-control" id="title" placeholder="Nome" @include('partials.readonly')>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-4">
                            <label for="name">Abertura da Cesta</label>
                            <input type="date" value="{{is_null(old('start')) ? $basket->titile : old('start')}}" name="start" class="form-control" id="start" placeholder="Nome" @include('partials.readonly')>
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-4">
                            <label for="name">Encerramento da Cesta</label>
                            <input type="date" value="{{is_null(old('end')) ? $basket->titile : old('end')}}" name="end" class="form-control" id="end" placeholder="Nome" @include('partials.readonly')>
                    </div>
                </div>


            </form>

        </div>
    </div>


@endsection
