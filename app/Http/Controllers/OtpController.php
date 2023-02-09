<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class OtpController extends Controller
{
    public function generateOtp($userId)
{
    $user = User::findOrFail($userId);

    $otp = mt_rand(10000, 99999);
    $user->otp = Crypt::encryptString($otp);
    $user->save();

    // send the OTP to the user via email or SMS
    // ...

    return $otp;
}
public function verifyOtp($userId, $otp)
{
    $user = User::findOrFail($userId);

    $decryptedOtp = Crypt::decryptString($user->otp);

    if ($decryptedOtp == $otp) {
        $user->otp = null;
        $user->save();

        return true;
    }

    return false;
}


}
