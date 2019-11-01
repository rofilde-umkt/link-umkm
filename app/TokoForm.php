<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class TokoForm extends Form
{
    public function buildForm()
    {
        $this
        ->add("nama")
        ->add("alamat")
		->add("pemilik")
		->add("ktp_pemilik")
		->add("nomor_hp")
		->add("telepon")
		->add("email")
		->add("status_user", 'choice', [
		    'choices' => [
		        1 => 'Terverifikasi',
                0 => 'Belum Terverifikasi'
            ]
        ])
		->add("status", 'choice', [
		    'choices' => [
		        1 => 'Buka',
                0 => 'Tutup'
            ]
        ])

		->add('Simpan', 'submit')
		;
    }
}
