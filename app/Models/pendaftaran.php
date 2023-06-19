<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pendaftaran extends Model
{
    use HasFactory;
    protected $fillable = ['nim','nisn','nama','jenis_kelamin','jurusan','gambar'];
    public $timestamp = false;

}
