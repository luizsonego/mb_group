@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb mb-3">
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('products.create') }}" title="Criar produto"> <i class="fas fa-plus-circle"></i>
                    Criar </a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div>
        <div class="mx-auto float-right mb-3">
            <form action="{{ route('products.index') }}" method="GET" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="term" placeholder="Busque por codigo ou nome" id="term">
                    <div class="input-group-prepend">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit" title="buscar">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                    </div>
                    <div class="input-group-prepend">
                        <a href="{{ route('products.index') }}" class=" ">
                            <span class="input-group-btn">
                                <button class="btn btn-danger" type="button" title="Limpar busca">
                                    <span class="fas fa-sync-alt"></span>
                                </button>
                            </span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Cod.</th>
                    <th>Nome</th>
                    <th>Preço unitario</th>
                    <th width="110px">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($products as $product)
                <tr>
                    <td>{{ $product->code }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->unit_price }}</td>
                    <td>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            <a href="{{ route('products.show', $product->id) }}" title="show">
                                <i class="fas fa-eye text-success  fa-lg"></i> 
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}">
                                <i class="fas fa-edit  fa-lg"></i>
                            </a>

                            @csrf
                            @method('DELETE')
                            <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                <i class="fas fa-trash fa-lg text-danger"></i>
                            </button>

                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="pagination">
        {!! $products->links() !!}
    </div>
</div>


@endsection
