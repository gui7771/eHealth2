<?php

namespace App\Http\Controllers;

use App\Equipaments;
use Illuminate\Http\Request;

class EquipamentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipaments = Equipaments::paginate(10);
        return view('equipaments.index',compact('equipaments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipaments.create');
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
            Equipaments::create($request->only(['nome','marca','descricao','condicao','dataaquisicao']));
            return redirect(route('equipaments.index'))
                ->with('status','Equipamento cadastrado com sucesso!');
        } catch (\Exception $exception) {

            //return redirect(route('equipaments.index'));
                //->with('error', 'Erro ao cadastrar o equipamento: ' .
                 //   $exception->getMessage());
            echo $exception->getMessage();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Equipaments  $equipaments
     * @return \Illuminate\Http\Response
     */
    public function show(Equipaments $equipament)
    {
        return view('equipaments.show',compact('equipament'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Equipaments  $equipaments
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipaments $equipaments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Equipaments  $equipaments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipaments $equipaments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Equipaments  $equipaments
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipaments $equipaments)
    {
        //
    }
}
