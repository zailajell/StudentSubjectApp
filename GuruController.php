<?php

namespace App\Http\Controllers;

use App\Models\Guru;
// use Illuminate\View\View;
// use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $guru = Guru::when($request->search,function($query,$search){
            return $query->where('nama_guru','like',"%".$search.'%');
        })->oldest()->paginate(5);

        return view('guru.index',compact('guru'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('guru.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[
             'nama_guru'=> 'required|min:5',
             'pendidikan_terakhir'=> 'required|min:2',
             'nohp_guru'=> 'required|min:1'
        ]);

        Guru::create(attributes:[
            'nama_guru'=> $request->nama_guru,
            'pendidikan_terakhir'=> $request->pendidikan_terakhir,
            'nohp_guru'=> $request->nohp_guru
        ]);

        return redirect()->route('guru.index')->with(['success' =>'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Guru $guru)
    {
        //
        return view('guru.show', compact('guru'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $guru = Guru::findOrFail($id);

        //render view with post
        return view('guru.edit', compact('guru'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guru $guru)
    {
        //
        $this->validate($request,[
            'nama_guru'=> 'required|min:5',
            'pendidikan_terakhir'=> 'required|min:2',
            'nohp_guru'=> 'required|min:5'
       ]);

       $guru->update($request->all());
       return redirect()->route('guru.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guru $guru)
    {
        //
        $guru->delete();
        return redirect()->route('guru.index');
    }
}