<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataGallery extends Model
{
    use HasFactory;
    protected $table = 'datagallery';
	protected $guarded = ['id'];
	protected $primaryKey = ['id'];
}