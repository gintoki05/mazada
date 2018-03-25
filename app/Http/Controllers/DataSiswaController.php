<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSiswa;
use Yajra\Datatables\Datatables;
use PDF;

class DataSiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasiswa');
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
        $input = $request->all();
        $input['foto'] = null;

        if ($request->hasFile('foto')){
            $input['foto'] = '/upload/foto/'.str_slug($input['nama'], '-').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/upload/foto/'), $input['foto']);
        }

        DataSiswa::create($input);

        return response()->json([
            'success' => true,
            'message' => 'Data Siswa Dibuat'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = DataSiswa::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DataSiswa::find($id);
        return $data;
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
        $input = $request->all();
        $data = DataSiswa::findOrFail($id);

        $input['foto'] = $data->foto;

        if ($request->hasFile('foto')){
            if (!$data->foto == NULL){
                unlink(public_path($data->foto));
            }
            $input['foto'] = '/upload/foto/'.str_slug($input['nama'], '-').'.'.$request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('/upload/foto/'), $input['foto']);
        }

        $data->update($input);

        return response()->json([
            'success' => true,
            'message' => 'Data Siswa Update'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DataSiswa::findOrFail($id);

        if (!$data->foto == NULL){
            unlink(public_path($data->foto));
        }

        DataSiswa::destroy($id);

        return response()->json([
            'success' => true,
            'message' => 'Data Siswa Dihapus'
        ]);
    }
    

     public function dataSiswa()
    {
      $data = DataSiswa::all();

        return Datatables::of($data)
            ->addColumn('show_foto', function($data){
                if ($data->foto == NULL){
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'. url($data->foto) .'" alt="">';
            })
           ->addColumn('action', function($data){
                return '<a onclick="showData('. $data->id .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Tampilkan</a> ' .
                       '<a onclick="editForm('. $data->id .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                       '<a onclick="deleteData('. $data->id .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';
            })
            ->rawColumns(['show_foto', 'action'])->make(true);
    }

    public function exportPDF()
    {
      /* $data = DataSiswa::limit(20)->get(); */
      $datasiswa = DataSiswa::all();
      $pdf = PDF::loadView('pdfsiswa', compact('datasiswa'));
      $pdf->setPaper('a4', 'potrait');

      return $pdf->stream();
     /*  return view('pdfsiswa', compact('data')); */
    }

}
