@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Escolha uma opção') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('products.index') }}">Produtos</a>
                    <br>
                    <a href="{{ route('person.index') }}">Pessoa</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
