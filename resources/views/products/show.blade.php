@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>{{ $product->name }}</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-primary" href="{{ route('products.index') }}" title="Go back"> <i class="fas fa-backward "></i>  Voltar</a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Codigo:</strong>
                        {{ $product->code }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nome:</strong>
                        {{ $product->name }}
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Preço unitario:</strong>
                        {{ $product->unit_price }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Criado em:</strong>
                        {{ date_format($product->created_at, 'jS M Y') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection