@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Equipamentos</div>

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



                            <form action="{{ route('equipaments.store') }}" method="POST">
                                {{ csrf_field() }} <!-- campo invísivel para segurança de formulário -->
                                {{ method_field('POST') }} <!-- campo para méthodo de envio POST = Criar -->

                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
                                </div>

                                    <div class="form-group">
                                        <label for="name">Nome Fantasia</label>
                                        <input type="text" class="form-control" id="name_fantasy" name="name_fantasy" value="{{ old('name_fantasy') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Tipo de Pessoa</label>
                                        <select class="form-control" name="category_id">
                                            <option value="type">FISICA</option>
                                            <option value="type">JURIDICA</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">CPF/CNPJ</label>
                                        <input type="text" class="form-control" id="cpf_cnpj" name="cpf_cnpj" value="{{ old('cpf_cnpj') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Endereço</label>
                                        <input type="text" class="form-control" id="address" name="address" value="{{ old('address') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="number">Número</label>
                                        <input type="number" class="form-control" id="number" name="number" value="{{ old('number') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Cidade</label>
                                        <input type="text" class="form-control" id="city" name="city" value="{{ old('city') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">UF</label>
                                        <input type="text" class="form-control" id="uf" name="uf" value="{{ old('uf') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="name">E-mail</label>
                                        <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="value_cost">Observação</label>
                                        <textarea class="form-control" name="obs">{{ old('obs') }}</textarea>
                                    </div>


                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
