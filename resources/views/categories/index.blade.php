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


                    <div class="col-md-12 text-right mb-3">
                        <a href="{{ route('categories.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Adicionar</a>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th width="80%">Nome</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('categories.show',$category) }}" class="btn btn-info"><i class="fa fa-eye"></i></i> </a>
                                            <a href="{{ route('categories.edit',$category) }}" class="btn btn-warning"><i class="fa fa-edit"></i></i> </a>
                                            <a class="btn btn-danger"><i href="#" class="fa fa-trash"></i> </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                        {{ $categories->links() }}





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
