<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Pikmi | Pick your Dream',

        ];

        return view('pages/home', $data);
    }
    public function member()
    {
        $data = [
            'title' => 'Member page'
        ];
        return view('pages/member', $data);
    }
    public function ide()
    {
        $data = [
            'title' => 'Ide PKM',
            'listIde' => [
                [
                    'teknologi' => 'AI',
                    'wirausaha' => 'susu sapi',
                    'penelitian' => 'komunikasi'
                ],
                [
                    'teknologi' => 'big data',
                    'wirausaha' => 'snack bar',
                    'penelitian' => 'buah pepaya'
                ]
            ]
        ];
        return view('pages/ide', $data);
    }
}
