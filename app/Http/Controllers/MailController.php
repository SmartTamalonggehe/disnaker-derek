<?php

namespace App\Http\Controllers;

use App\Mail\ProsesDataMail;
use App\Mail\VerifikasiDataMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function prosesData()
    {
        $user = Auth::user();

        $details = [
            'title' => 'Proses Data',
        ];
        // $status = "";

        Mail::to($user->email)->send(new ProsesDataMail($details));
        // check for email success
        if (Mail::failures()) {
            $status = "gagal";
        } else {
            $status = "berhasil";
        }
        return $status;
    }

    public function verifikasi($pencaker)
    {
        $details = [
            'title' => 'Proses Data',
        ];
        // $status = "";

        Mail::to($pencaker->user->email)->send(new VerifikasiDataMail($details, $pencaker));
        // check for email success
        if (Mail::failures()) {
            $status = "gagal";
        } else {
            $status = "berhasil";
        }
        return $status;
    }
}
