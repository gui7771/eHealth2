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

                        <div class="col-md-12 text-right mb-3">
                            <a href="{{route('clients.create')}}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Adicionar</a>
                        </div>


                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>CPF/CNPJ</th>
                                <th>Email</th>
                                <th>Cidade/UF</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->cpf_cnpj }}</td>
                                    <td>{{ $client->email }}</td>
                                    <td>{{ $client->city }}/{{ $client->uf }}</td>
                                    <td>
                                        <div class="btn-group btn-group-sm">
                                            <a href="{{ route('clients.show',$client) }}" class="btn btn-info"><i  class="fa fa-eye"></i></i> </a>
                                            <a href="{{ route('clients.edit',$client) }}"  class="btn btn-warning"><i href="#" class="fa fa-edit"></i></i> </a>
                                            <a href="#"  class="btn btn-danger" onclick="event.preventDefault();
                                                    document.getElementById('delete-form-{{$client->id}}').submit();"><i href="#" class="fa fa-trash"></i> </a>
                                            <form id="delete-form-{{$client->id}}" action="{{ route('clients.destroy', $client->id) }}" method="POST" style="display: none;">
                                                @csrf
                                                {{method_field('DELETE')}}
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                        {{ $clients->links() }}





                </div>
            </div>
        </div>
    </div>
</div>
@endsection
