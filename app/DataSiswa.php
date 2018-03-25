<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataSiswa extends Model
{
    protected $table="datasiswa";
    protected $primaryKey="id";
    protected $fillable=['nis', 'nama', 'foto'];
    public $timestamps=false;
}
