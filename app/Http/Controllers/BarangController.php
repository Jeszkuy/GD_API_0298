<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            $barang = Barang::all();
            return response()->json([
                "status" => true,
                "message" => 'Berhasil ambil data',
                "data" => $barang
            ], 200); // status code 200 = success
        }
        catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message" => $e->getMessage(),
                "data" => []
            ], 400); // status code 400 = bad request
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            //$request->all() untuk mengambil semua input dalam request body
            $barang = Barang::create($request->all());
            return response()->json([
                "status" => true,
                "message" => 'Berhasil ambil data',
                "data" => $barang
            ], 200); // status code 200 = success
        }
        catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message" => $e->getMessage(),
                "data" => []
            ], 400); // status code 400 = bad request
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        try{
            $barang = Barang::find($id);
            
            if(!$barang) throw new \Exception("Barang Tidak Ditemukan !");

            return response()->json([
                "status" => true,
                "message" => 'Berhasil ambil data',
                "data" => $barang
            ], 200); // status code 200 = success
        }
        catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message" => $e->getMessage(),
                "data" => []
            ], 400); // status code 400 = bad request
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        try{
            $barang = Barang::find($id);
            
            if(!$barang) throw new \Exception("Barang Tidak Ditemukan !");

            return response()->json([
                "status" => true,
                "message" => 'Berhasil ambil data',
                "data" => $barang
            ], 200); // status code 200 = success
        }
        catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message" => $e->getMessage(),
                "data" => []
            ], 400); // status code 400 = bad request
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barang  $barang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        try{
            $barang = Barang::find($id);
            
            if(!$barang) throw new \Exception("Barang Tidak Ditemukan !");
            
            $barang->delete();
            
            return response()->json([
                "status" => true,
                "message" => 'Berhasil ambil data',
                "data" => $barang
            ], 200); // status code 200 = success
        }
        catch(\Exception $e){
            return response()->json([
                "status" => false,
                "message" => $e->getMessage(),
                "data" => []
            ], 400); // status code 400 = bad request
        }
    }
}
