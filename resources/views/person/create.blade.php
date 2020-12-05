@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb mb-3">
            <div class="float-left">
                <h2>Criar nova pessoa</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('person.index') }}" title="Voltar"> <i class="fas fa-backward "></i> Voltar </a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card">
      <div class="card-body">
        <form action="{{ route('person.store') }}" method="POST" >
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Nome:</strong>
                      <input type="text" name="name" class="form-control" placeholder="Nome" required>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>CPF:</strong>
                    <input type="text" name="cpf" class="form-control" placeholder="CPF" required>
                  </div>
                </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Data Nascimento:</strong>
                  <input type="text" name="date_of_birth" id="product" class="form-control" placeholder="Data Nascimento" required>
                </div>
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
              </div>
            </div>

        </form>
      </div>
    </div>

</div>


@endsection