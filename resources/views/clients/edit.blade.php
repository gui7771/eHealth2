@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Cliente</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                            {{--['type','cpf_cnpj','name','name_fantasy',--}}
                            {{--'email','address','number','city','uf','obs'];--}}

                            <form action="{{ route('clients.update',$client) }}" method="POST">
                                {{ csrf_field() }} <!-- campo invísivel para segurança de formulário -->
                                {{ method_field('PUT') }} <!-- campo para méthodo de envio POST = Criar -->



                                    <div class="form-group">
                                        <label for="name">CNPJ/CPF</label>
                                        <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" value="{{ old('cpf_cnpj',$client->cpf_cnpj) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$client->name) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Nome Fantasia</label>
                                        <input type="text" class="form-control" id="name_fantasy" name="name_fantasy" value="{{ old('name_fantasy',$client->name_fantasy) }}">
                                    </div>

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
