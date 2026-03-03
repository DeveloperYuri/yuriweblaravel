<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RegistrationSuccessMail extends Mailable
{
    use Queueable, SerializesModels;

    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function build()
    {
        return $this->from('infoyuri@yuri-indonesia.co.id', 'Yuri Event')
            // ->subject('Pendaftaran Berhasil')
            ->subject('Terima Kasih Sudah Daftar! Video Kamu Sudah Masuk. Siap Jadi Pemenang? 😉')
            ->view('emails.registration_success');
    }
}
