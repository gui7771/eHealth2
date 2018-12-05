@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Equipamentos</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-body">
                            <strong>ID:</strong> {{$equipament->id}}<br/>
                            <strong>Nome:</strong> {{$equipament->nome}}<br/>
                            <strong>Marca:</strong> {{$equipament->marca}}<br/>
                            <strong>Descricao:</strong> {{$equipament->descricao}}<br/>
                            <strong>Condição:</strong> {{$equipament->condicao}}<br/>
                            <strong>Data de Aquisição:</strong> {{$equipament->dataaquisicao}}<br/>


                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
