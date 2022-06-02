<?php

namespace App\Controllers;

use App\Models\DistributorModel;


class Distributor extends BaseController
{
    protected $distributorModel;
    public function __construct()
    {
        $this->distributorModel = new DistributorModel();
    }


    public function index()
    {
        $distributor = $this->distributorModel->findAll();

        $data = [
            'title' => 'Distributor | DatOn',
            'distributor' => $distributor
        ];

        return view('distributor/index', $data);
    }

    public function add()
    {
        $data = [
            'title' => 'Add | DataOn'
        ];

        return view('distributor/tambah', $data);
    }

    public function save()
    {
        $this->distributorModel->save([
            'name' => $this->request->getVar('name'),
            'city' => $this->request->getVar('city'),
            'region' => $this->request->getVar('region'),
            'country' => $this->request->getVar('country'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email')
        ]);

        session()->setFlashdata('pesan', 'Data bershasil ditambahkan');

        return redirect()->to('/distributor');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data | DataOn',
            'distributor' => $this->distributorModel->getDistributor($id)
        ];

        return view('distributor/edit', $data);
    }

    public function update($id)
    {
        $this->distributorModel->save([
            'id' => $id,
            'name' => $this->request->getVar('name'),
            'city' => $this->request->getVar('city'),
            'region' => $this->request->getVar('region'),
            'country' => $this->request->getVar('country'),
            'phone' => $this->request->getVar('phone'),
            'email' => $this->request->getVar('email')
        ]);

        session()->setFlashdata('pesan', 'Data bershasil ditambahkan');

        return redirect()->to('/distributor');
    }
}
