@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>{{ $person->name }}</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('person.index') }}" title="Go back"> <i class="fas fa-backward "></i>  Voltar</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $person->name }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>CPF:</strong>
                        {{ $person->cpf }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Data Nascimento:</strong>
                        {{ $person->date_of_birth }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Criado em:</strong>
                        {{ date_format($person->created_at, 'jS M Y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection