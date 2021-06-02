<?php

namespace App\Controllers;

class Ide extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'List Ide',

        ];

        return view('Ide/index', $data);
    }
}
