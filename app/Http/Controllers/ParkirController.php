<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Parkir;
use Session;
use Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Contracts\Filesystem\FileNotFoundException;

class ParkirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parkir = Parkir::all();
        return view('backend.parkir.index', compact('parkir'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $parkir = Parkir::all();
        return view('backend.parkir.create', compact('parkir'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parkir = new Parkir();
        $parkir->fasilitas_parkir = $request->fasilitas_parkir;

    $parkir->save();
    return redirect()->route('parkir.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parkir = Parkir::findOrFail($id);
        return view('backend.parkir.show', compact('parkir'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parkir = Parkir::findOrFail($id);
        return view('backend.parkir.edit', compact('parkir'));
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
        $parkir = Parkir::findOrFail($id);
        $parkir->fasilitas_parkir = $request->fasilitas_parkir;
        $parkir->save();
        return redirect()->route('parkir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parkir = Parkir::findOrFail($id);
        $parkir->delete();
        return redirect()->route('parkir.index');
    }
}
