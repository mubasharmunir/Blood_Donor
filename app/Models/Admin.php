<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Exception;
use Mail;
use App\Mail\SendCodeMail;



class Admin extends Authenticatable
{
    use HasFactory;
    use Notifiable;
    protected $fillable = [
        'email',
        'password'
    ];

    protected $table='admin_login';

    protected $guard = 'admin';
   
    public function generateCode()
    {
        $code = rand(1000, 9999);
  
        AdminCode::updateOrCreate(
            [ 'admin_id' => auth()->user()->id ],
            [ 'code' => $code ]
        );
    
        try {
  
            $details = [
                'title' => 'Here is your email OTP',
                'code' => $code
            ];
             
            Mail::to(auth()->user()->email)->send(new SendCodeMail($details));
    
        } catch (Exception $e) {
            info("Error: ". $e->getMessage());
        }
    }
 
    
}
