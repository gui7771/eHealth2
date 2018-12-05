@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Clientes</div>

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
                            <strong>ID:</strong> {{$client->id}}<br/>
                            <strong>Nome:</strong> {{$client->name}}<br/>
                            <strong>Nome Fantasia:</strong> {{$client->name_fantasy}}<br/>
                            <strong>Tipo de Pessoa:</strong> {{$client->category_id}}<br/>
                            <strong>CPF_CNPJ:</strong> {{$client->cpf_cnpj}}<br/>
                            <strong>Endereço:</strong> {{$client->address}}<br/>
                            <strong>Número:</strong> {{$client->number}}<br/>
                            <strong>Cidade:</strong> {{$client->type}}
                            <strong>UF:</strong> {{$client->uf}}<br/>
                            <strong>E-mail:</strong> {{$client->email}}<br/>
                            <strong>Observação:</strong> {{$client->obs}}<br/>

                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
