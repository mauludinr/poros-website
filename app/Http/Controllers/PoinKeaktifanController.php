<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poin_Keaktifans;
use Auth;

class PoinKeaktifanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Poin_Keaktifans::all();
        return response()->json($notes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Poin_Keaktifans::find($id);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = Poin_Keaktifans::create($request->all());
        return response()->json($note);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $note = Poin_Keaktifans::find($id);
        return response()->json($note);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Poin_Keaktifans $poin)
    {
        $poin->update($request->all());
        return response()->json($poin, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function add(Request $request, Poin_Keaktifans $poin_keaktifan)
    {

        $post = $post->create([
            'user_id' => Auth::user()->id,
            'deskripsi' => $request->deskripsi,
            'poin_keaktifan' => $request->poin_keaktifan,
        ]);

    }
}
