@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb mb-3">
            <div class="float-left">
                <h2>Criar novo produto</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Voltar"> <i class="fas fa-backward "></i> Voltar </a>
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
        <form action="{{ route('products.store') }}" method="POST" >
            @csrf

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                      <strong>Codigo:</strong>
                      <input type="text" name="code" class="form-control" placeholder="Codigo" required>
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>Nome:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Nome" required>
                  </div>
                </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Preço unitario:</strong>
                  <input type="text" name="unit_price" id="product" class="form-control" placeholder="Preço unitario" required>
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