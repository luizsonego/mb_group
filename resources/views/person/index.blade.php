@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-lg-12 margin-tb mb-3">
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('person.create') }}" title="Criar produto"> <i class="fas fa-plus-circle"></i>
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
            <form action="{{ route('person.index') }}" method="GET" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" name="term" placeholder="Buscar" id="term">
                    <div class="input-group-prepend">
                        <span class="input-group-btn">
                            <button class="btn btn-info" type="submit" title="Buscar">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                    </div>
                    <div class="input-group-prepend">
                        <a href="{{ route('person.index') }}" class="">
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
                    <th>Nome</th>
                    <th>cpf</th>
                    <th>Aniversario</th>
                    <th width="110px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($person as $p)
                    <tr>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->cpf }}</td>
                        <td>{{ $p->date_of_birth }}</td>
                        <td>
                            <form action="{{ route('person.destroy', $p->id) }}" method="POST">

                                <a href="{{ route('person.show', $p->id) }}" title="show">
                                    <i class="fas fa-eye text-success  fa-lg"></i>
                                </a>

                                <a href="{{ route('person.edit', $p->id) }}">
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
    {!! $person->links() !!}
    </div>
    
</div>


@endsection
