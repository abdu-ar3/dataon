<?php

namespace App\Controllers;

use App\Models\CatalogModel;


class Catalog extends BaseController
{
    protected $catalogModel;
    public function __construct()
    {
        $this->catalogModel = new CatalogModel();
    }


    public function index()
    {
        $catalog = $this->catalogModel->findAll();

        $data = [
            'title' => 'Home | CI4App',
            'catalog' => $catalog
        ];

        return view('catalog/index', $data);
    }
}
