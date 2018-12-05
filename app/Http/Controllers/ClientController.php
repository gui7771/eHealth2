<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::paginate(10);

        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients = Client::all(); //tras todas as categorias para montar o combobox de escolha

        return view('clients.create',compact('clients'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {
            Client::create($request->only(['type','cpf_cnpj','name','name_fantasy','email','address','number','city','uf','obs']));
            return redirect(route('clients.index'))->with('status','Cliente cadastrado com sucesso');
        } catch (\Exception $exception) {
            //return redirect(route('clients.index'))->with('error','Erro ao cadastrar o Cliente: ' . $exception->getMessage());
            echo $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        return view('clients.show',compact('client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {

       try {

            $client->name = $request->name;
            $client->cpf_cnpj = $request->cpf_cnpj;
            $client->name_fantasy = $request->name_fantasy;
            $client->address = $request->address;
            $client->number = $request->number;
            $client->city = $request->city;
            $client->uf = $request->uf;
            $client->email = $request->email;
            $client->obs = $request->obs;

            $client->save();

            return redirect(route('clients.index'))
                ->with('status','Cliente editada com sucesso!');
        } catch (\Exception $exception) {

   //         return redirect(route('clients.index'))
   //             ->with('error', 'Erro ao editar a categoria: ' .
   //                 $exception->getMessage());
           echo  $exception->getMessage();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
