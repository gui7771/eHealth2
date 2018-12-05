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
                                    <label for="name">Nome do Equipamento</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
                                </div>

                                    <div class="form-group">
                                        <label for="name">Marca</label>
                                        <input type="text" class="form-control" id="marca" name="marca" value="{{ old('marca') }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="value_cost">Descrição</label>
                                        <textarea class="form-control" name="descricao">{{ old('descricao') }}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Condição do Equipamento</label>
                                        <select class="form-control" name="condicao">
                                            <option value="OTIMO">OTIMO</option>
                                            <option value="BOM">BOM</option>
                                            <option value="REGULAR">REGULAR</option>
                                            <option value="PESSIMO">PESSIMO</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="name">Data de Aquisição</label>
                                        <input type="date" class="form-control" id="dataaquisicao" name="dataaquisicao" value="{{ old('dataaquisicao') }}">
                                    </div>

                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
