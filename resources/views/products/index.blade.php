@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Produtos</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <div class="col-md-12 text-right mb-3">
                        <a href="{{ route('products.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Adicionar</a>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Descrição</th>
                                <th>Categoria</th>
                                <th>R$ Compra</th>
                                <th>R$ Venda</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->id }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ @$product->category->name }}</td>
                                    <td>{{ $product->value_sale }}</td>
                                    <td>{{ $product->value_cost }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a class="btn btn-info"><i href="#" class="fa fa-eye"></i></i> </a>
                                            <a class="btn btn-warning"><i href="#" class="fa fa-edit"></i></i> </a>
                                            <a class="btn btn-danger"><i href="#" class="fa fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                        {{ $products->links() }}





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
