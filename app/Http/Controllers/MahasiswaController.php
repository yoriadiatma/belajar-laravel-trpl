<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{

    private $arrayMhs = [
        '001' => 'Linus Torvald',
        '002' => 'Bill Gates',
        '003' => 'Elon Musk',
        '010' => 'Sergey Brin',
        '005' => 'Budi Gunawan',
        '007' => 'Andi'
    ];

    public function index()
    {
        //array numeric
        $listMahasiswa = [
            'Larry Page',
            'Sergey Brin',
            'Bill Gates',
            'Linus Torvald',
            'Elon Musk'
        ];

        //array assosiative
        $arrayMhs = $this->arrayMhs;

        return view('master.mahasiswa')->with(compact('arrayMhs', 'listMahasiswa'));
    }

    public function students()
    {
        $arrayMhs = [
            '001' => 'Linus Torvald',
            '002' => 'Bill Gates',
            '003' => 'Elon Musk',
            '010' => 'Sergey Brin'
        ];

        return view('mahasiswa', ['students' => $arrayMhs]);
    }

    public function detail($nim)
    {
        $mahasiswa = $this->findStudent($nim);

        if ($mahasiswa) {
            return view('master.detail', compact('mahasiswa'));
        } else {
            return redirect('/mahasiswa');
        }
    }

    public function findStudent($nim)
    {
        if (array_key_exists($nim, $this->arrayMhs)) {
            return [
                'nim' => $nim,
                'nama' => $this->arrayMhs[$nim]
            ];
            return null;
        }
    }
}
