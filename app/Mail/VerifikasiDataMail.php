<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifikasiDataMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;
    public $pencaker;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($details, $pencaker)
    {
        $this->details = $details;
        $this->pencaker = $pencaker;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Disnaker')->view('admin.emails.verifikasi', [
            'details' => $this->details,
            'pencaker' => $this->pencaker
        ]);
    }
}
