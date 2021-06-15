<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | WebBelajarCodingDasar',
            'tes' => ['satu', 'dua', 'tiga']
        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About Me'
        ];

        return view('pages/about', $data);
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact Us',
            'alamat' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Desa Kaliacar',
                    'kota' => 'Probolinggo'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Kraksaan',
                    'kota' => 'Probolinggo'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
