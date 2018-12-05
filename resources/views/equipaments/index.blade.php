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

                        <div class="col-md-12 text-right mb-3">
                            <a href="{{route('equipaments.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Adicionar</a>
                        </div>


                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>Marca</th>
                                <th>Dt. Aquisição</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($equipaments as $equipament)
                                <tr>
                                    <td>{{ $equipament->id }}</td>
                                    <td>{{ $equipament->nome }}</td>
                                    <td>{{ $equipament->marca }}</td>
                                    <td>{{ $equipament->dataaquisicao }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('equipaments.show',$equipament) }}" class="btn btn-info"><i  class="fa fa-eye"></i></a>
                                            <a href="{{ route('equipaments.edit',$equipament) }}"  class="btn btn-warning"><i href="#" class="fa fa-edit"></i></i> </a>
                                            <a href="#"  class="btn btn-danger" onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{$equipament->id}}').submit();"><i href="#" class="fa fa-trash"></i> </a>

                                            <form id="delete-form-{{$equipament->id}}" action="{{ route('equipaments.destroy', $equipament->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                {{method_field('DELETE')}}
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                        {{ $equipaments->links() }}





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
