<?php

namespace App;

use Kris\LaravelFormBuilder\Form;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class BarangForm extends Form
{
    public function buildForm()
    {
        $this
		->add("nama")
		->add("harga")
		->add("stok")
		->add("foto", 'file')
		->add('Simpan', 'submit');
    }
}
