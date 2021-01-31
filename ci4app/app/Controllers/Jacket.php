<?php

namespace App\Controllers;

use App\Models\JacketModel;

class Jacket extends BaseController
{
    protected $jacketModel;
    public function __construct()
    {
        $this->jacketModel = new JacketModel();
    }

    public function index()
    {
        // $jacket = $this->jacketModel->findAll();

        $data = [
            'title' => 'Jacket List',
            'jacket' => $this->jacketModel->getJacket()
        ];

        // $jacketModel = new \App\Models\JacketModel();
        // $jacketModel = new JacketModel();


        return view('jacket/index', $data);
    }


    public function detail($slug)
    {
        $data = [
            'title' => 'Detail Jacket',
            'jacket' => $this->jacketModel->getJacket($slug)
        ];

        //jika jacket tidak terdapat pada tabel
        if (empty($data['jacket'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Jacket name ' . $slug .
                ' not found.');
        }


        return view('jacket/detail', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Form Add Jacket Data'
        ];
        return view('jacket/create', $data);
    }

    public function save()
    {
        // dd($this->request->getVar('name'));

        $slug = url_title($this->request->getVar('name'), '-', true);
        $this->jacketModel->save([
            'name' => $this->request->getVar('name'),
            'slug' => $slug,
            'product_price' => $this->request->getVar('product_price'),
            'product_code' => $this->request->getVar('product_code'),
            'pictures' => $this->request->getVar('pictures')
        ]);

        session()->setFlashdata('message', 'Managed to add.');

        return redirect()->to('/jacket');
    }
}
