<?php

namespace App\Controllers;

use App\Models\UploadModel;

class Upload extends BaseController
{
    protected $homeModel;
    public function __construct()
    {
        // $this->homeModel = new UploadModel();
    }

    public function index()
    {
        // $upload = $this->uploadModel->findAll();

        $data = [
            'title' => 'Upload | DataOn',
            // 'upload' => $upload
        ];

        return view('upload/create', $data);
    }

    // public function create()
    // {
    //     $data = [
    //         'title' => 'Create Upload | DataOn'
    //     ];

    //     return view('upload/create', $data);
    // }
}
