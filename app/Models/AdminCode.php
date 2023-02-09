<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCode extends Model
{
    use HasFactory;
    use HasFactory;
  
    public $table = "admin_code";
  
    protected $fillable = [
        'admin_id',
        'code',
    ];
}
