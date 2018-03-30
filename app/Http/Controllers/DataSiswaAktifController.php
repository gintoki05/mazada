<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataSiswaAktif;
use Yajra\Datatables\Datatables;
use PDF;

class DataSiswaAktifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('datasiswaaktif');
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

        DataSiswaAktif::create($input);

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
    public function show($id_nis_aktif)
    {
        $data = DataSiswaAktif::findOrFail($id_nis_aktif);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_nis_aktif)
    {
        $data = DataSiswaAktif::find($id_nis_aktif);
        return $data;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_nis_aktif)
    {
        $input = $request->all();
        $data = DataSiswaAktif::findOrFail($id_nis_aktif);

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
    public function destroy($id_nis_aktif)
    {
        $data = DataSiswaAktif::findOrFail($id_nis_aktif);

        if (!$data->foto == NULL){
            unlink(public_path($data->foto));
        }

        DataSiswaAktif::destroy($id_nis_aktif);

        return response()->json([
            'success' => true,
            'message' => 'Data Siswa Dihapus'
        ]);
    }
    

     public function dataSiswaAktif()
    {
      $data = DataSiswaAktif::all();

        return Datatables::of($data)
            ->addColumn('show_foto', function($data){
                if ($data->foto == NULL){
                    return 'No Image';
                }
                return '<img class="rounded-square" width="50" height="50" src="'. url($data->foto) .'" alt="">';
            })
           ->addColumn('action', function($data){
                return '<a onclick="showData('. $data->id_nis_aktif .')" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Tampilkan</a> ' .
                       '<a onclick="editForm('. $data->id_nis_aktif .')" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-edit"></i> Edit</a> ' .
                       '<a onclick="deleteData('. $data->id_nis_aktif .')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i> Hapus</a>';
            })
            ->rawColumns(['show_foto', 'action'])->make(true);
    }

    public function exportPDF()
    {
      /* $data = DataSiswa::limit(20)->get(); */
      $datasiswaaktif = DataSiswaAktif::all();
      $pdf = PDF::loadView('pdfsiswa', compact('datasiswaaktif'));
      $pdf->setPaper('a4', 'potrait');

      return $pdf->stream();
     /*  return view('pdfsiswa', compact('data')); */
    }

}
