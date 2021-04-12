<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mahasiswa;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $quest = DB::table('Mahasiswa')->get();
        $quest = Mahasiswa::orderBy('updated_at', 'desc')->get();
        return view('CRUD\table', compact('quest'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $create_quest = DB::table('Mahasiswa')->get();
        return view('CRUD\create', compact('create_quest'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // DB::table('Mahasiswa')->insert([
        //     'pertanyaan' => $request->name,
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        Mahasiswa::create([
               'pertanyaan' => $request->name,
        ]);
        return redirect(url('/pertanyaan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DB::table('Mahasiswa')->where('id', $id)->first();
        return view('CRUD\show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $data = DB::table('Mahasiswa')->where('id',$id)->first();
        $data = Mahasiswa::where('id',$id)->first();
        return view('CRUD\edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // DB::table('Mahasiswa')->where('id', "=", $id)->update([
        //     'pertanyaan'=> $request->data,
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        $todo = Mahasiswa::findOrFail($id);
        $todo->pertanyaan = $request->data;
        $todo->save();
        return redirect(url('/pertanyaan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('Mahasiswa')->where('id',$id)->delete();
        Mahasiswa::find($id)->delete();
        return redirect(url('/pertanyaan'));
    }
}
