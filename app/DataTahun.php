<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataTahun extends Model
{
    public $primaryKey = 'id_tahun';

  # Tentukan nama tabel terkait
	protected $table = 'tbl_tahun';

	# MASS ASSIGNMENT
	# Untuk membatasi attribut yang boleh di isi (Untuk keamanan)
	protected $fillable = array('tahun', 'semester');

	/*
	 * Relasi One-to-Many
	 * ==================
	 * Buat function bernama siswaaktif(), dimana model 'SiswaAktif' akan memiliki 
	 * relasi One-to-Many terhadap model 'DataTahun' sebagai 'kd_tahun'
	 */
	public function siswaaktif() {
		return $this->hasMany('App\DataSiswaAktif', 'kd_tahun');
	}
}
