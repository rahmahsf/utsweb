<?php

namespace App\Http\Controllers;

use App\Models\Flower;
use App\Http\Requests\StoreFlowerRequest;
use App\Http\Requests\UpdateFlowerRequest;

class FlowerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Flower::all();
        return view('dashboard.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.store');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFlowerRequest $request)
    {
        $data = $request->all();
        $extension = $request->file('gambar')->getClientOriginalExtension();

        $filename= $request->nama_game. '.' . $extension;
        $path = $request->file('gambar')->storeAs('images/bunga',$filename);
        $basenamefile = basename($path);
        $request->file('gambar')->move(public_path('images/bunga'), $basenamefile);

        Flower::create([
            'nama'=> $data['nama_bunga'],
            'deskripsi'=>$data['deksripsi_bunga'],
            'harga'=>$data['harga'],
            'stok'=>$data['stok'],
            'gambar'=>$basenamefile,
        ]);
        return redirect()->route('dashboard.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Flower $flower)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Flower::findOrFail($id);
        // dd($data);
        return view('dashboard.edit',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFlowerRequest $request, $id)
    {
        $data = Flower::findOrFail($id);
        $data_request =$request->all();
        $data->update([
            'nama'=> $data_request['nama_bunga'],
            'deskripsi'=>$data_request['deksripsi_bunga'],
            'harga'=>$data_request['harga'],
            'stok'=>$data_request['stok'],
        ]);
        return redirect()->route('dashboard.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Flower::findOrFail($id);
        $data->delete();
        return redirect()->route('dashboard.index');
    }
}
