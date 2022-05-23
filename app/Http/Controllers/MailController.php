<?php

namespace App\Http\Controllers;

use App\Mail\ProsesDataMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function prosesData()
    {

        $details = [
            'title' => 'Proses Data',
        ];

        Mail::to('smartspartacus@gmail.com')->send(new ProsesDataMail($details));

        dd("Email sudah terkirim.");
    }
}
