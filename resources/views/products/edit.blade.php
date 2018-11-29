@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Categoria</div>

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



                            <form action="{{ route('products.update',$product) }}" method="POST">
                                {{ csrf_field() }} <!-- campo invísivel para segurança de formulário -->
                                {{ method_field('PUT') }} <!-- campo para méthodo de envio POST = Criar -->

                                <div class="form-group">
                                    <label for="name">Nome</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name',$product->name) }}">
                                </div>

                                    <div class="form-group">
                                        <label for="name">Nome</label>
                                        <select class="form-control" name="category_id">
                                            @foreach($categories as $category)<option value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif >{{ $category->name }}</option>@endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="value_sale">R$ Venda</label>
                                        <input type="number" step="any" class="form-control" id="value_sale" name="value_sale" value="{{ old('value_sale',$product->value_sale) }}" >
                                    </div>

                                    <div class="form-group">
                                        <label for="value_cost">R$ Custo</label>
                                        <input type="number" step="any" class="form-control" id="value_cost" name="value_cost" value="{{ old('value_cost',$product->value_cost) }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="value_cost">Observação</label>
                                        <textarea class="form-control" name="obs">{{ old('obs',$product->obs) }}</textarea>
                                    </div>
                                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Salvar</button>
                            </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
