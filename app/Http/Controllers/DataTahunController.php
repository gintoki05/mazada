<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTahun;
use Yajra\Datatables\Datatables;

class DataTahunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datatahun');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new DataTahun;
    	$data->tahun = $request->get('tahun');
    	$data->semester = $request->get('semester');

    	$data->save();

    	return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_tahun)
    {
         $data = DataTahun::find($id_tahun);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tahun)
    {
        $data = new DataTahun;
    	$data->tahun = $request->get('tahun');
    	$data->semester = $request->get('semester');

    	$data->update();

    	return response()->json($data);
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

      public function dataTahun()
    {
      $data = DataTahun::all();

        return Datatables::of($data)
           ->addColumn('action', function($data){
                return  '<a onclick="aktif('. $data->id_tahun .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-off"></i> Aktifkan</a> '.
                        '<a onclick="editTahun('. $data->id_tahun .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ';
            })
           ->make(true);
    }

}
