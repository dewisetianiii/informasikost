<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kos;
use App\Kamar;
// use App\Parkir;
use Session;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class KosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kos = Kos::all();
        $kamar = Kamar::all();
        return view('backend.kos.index', compact('kos', 'kamar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kamar = Kamar::all();
        // $parkir = Parkir::all();
        $kos = Kos::all();
        return view('backend.kos.create', compact('kamar', 'kos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kos = new Kos();
        $kos->nama = $request->nama;
        $kos->alamat = $request->alamat;
        $kos->harga = $request->harga;
        $kos->luas_kamar = $request->luaskamar;
        $kos->telepon = $request->telepon;
        // $kos->id_kamar = $request->kamar;
        // $kos->id_parkir = $request->parkir;

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $destinationPath = public_path() . '/assets/img/kos/';
            $filename = str_random(6) . '_' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $filename);
            $kos->gambar = $filename;
        }


        $kos->save();
        $kos->kamar()->attach($request->id_kamar);
        Session::flash("flash_notification", [
            "level" => "success",
            "message" => "Berhasil menyimpan data kost berjudul <b>$kos->nama</b>!"
        ]);
        return redirect()->route('kos.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kos = Kos::findOrFail($id);
        $kamar = Kamar::all();
        $selected = $kos->kamar->pluck('id')->toArray();

        return view('backend.kos.show', compact('kos', 'kamar', 'selected'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kos = Kos::findOrFail($id);
        $kamar = Kamar::all();
        $selected = $kos->kamar->pluck('id')->toArray();
        // $parkir = Parkir::all();
        return view('backend.kos.edit', compact('kos', 'kamar', 'selected'));
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
        $kos = Kos::findOrFail($id);
        $kos->nama = $request->nama;
        $kos->alamat = $request->alamat;
        $kos->id_kamar = $request->kamar;
        // $kos->id_parkir = $request->parkir;
        $kos->harga = $request->harga;
        $kos->luas_kamar = $request->luaskamar;
        $kos->telepon = $request->telepon;


            if ($request->hasFile('gambar')) {
                $file = $request->file('gambar');
                $Path = public_path() . '/assets/img/kos/';
                $filename = str_random(6) . '_' . $file->getClientOriginalName();
                $upload = $file->move($Path, $filename);
    
                if ($kos->gambar) {
                    $old_foto = $kos->gambar;
                    $filepath = public_path() . '/assets/img/kos/' . $kos->gambar;
                    try {
                        File::delete($filepath);
                    }catch (FileNotFoundException $e) { }
                }
                $kos->gambar = $filename;
            }

            $kos->save();
        $kos->kamar()->sync($request->id_kamar);
        return redirect()->route('kos.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kos = Kos::findOrFail($id);

        if ($kos->gambar) {
            $old_foto = $kos->gambar;
            $filepath = public_path() . '/assets/img/artikel/' . $kos->gambar;
            try {
                File::delete($filepath);
            } catch (FileNotFoundException $e) { }
        }

        $kos->delete();
        return redirect()->route('kos.index');
    }
}
