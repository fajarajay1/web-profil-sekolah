<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestasi extends Model
{
    use HasFactory;
    protected $table = 'prestasi';
	protected $guarded = ['id'];
	protected $primaryKey = 'id';
}