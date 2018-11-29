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
                                            <a class="btn btn-info"><i href="#" class="fa fa-eye"></i></i> </a>
                                            <a class="btn btn-warning"><i href="#" class="fa fa-edit"></i></i> </a>
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
