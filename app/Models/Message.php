<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Mail\MessageMail;
use Mail;

class Message extends Model
{
    use HasFactory;
    protected $table='send_message';
    public $fillable = ['name', 'email', 'mobile',  'message'];



    // public static function boot() {

    //     parent::boot();
  
    //     static::created(function ($item) {
                
    //         $adminEmail = "Admin@gmail.com";
    //         Mail::to($adminEmail)->send(new MessageMail($item));
    //     });
    // }
}
