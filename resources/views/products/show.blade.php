@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Categorias</div>

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
                            <strong>Nome:</strong> {{ $product->name }}<br/>
                            <strong>Categoria:</strong> {{ $product->category->name }}<br/>
                            <strong>R$ Venda:</strong> {{ $product->value_sale }}<br/>
                            <strong>R$ Custo:</strong> {{ $product->value_cost }}<br/>
                            <strong>Obs:</strong> <br />{{ $product->obs }}<br/>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
