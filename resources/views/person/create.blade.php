@extends('layouts.app')


{{-- @push('scripts')
  <script>
    //Input mask
    $(document).ready(function($){
        $('.date').mask('00/00/0000');
        $('#cpf').mask('000.000.000-00', {reverse: true});
    });
  </script>
@endpush --}}

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
            <strong>Whoops!</strong> Houve alguns problemas com sua entrada.<br><br>
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
                      <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Nome" required value="{{ old('name')}}">
                  </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="form-group">
                    <strong>CPF:</strong>
                    <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" placeholder="CPF" id="cpf" required value="{{ old('cpf')}}" v-model="maskCpf" v-mask-cpf>
                  </div>
                </div>

              <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                  <strong>Data Nascimento:</strong>
                  <input type="date" name="date_of_birth" id="product" class="form-control @error('date_of_birth') is-invalid @enderror" placeholder="Data Nascimento" required value="{{ old('date_of_birth')}}">
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
