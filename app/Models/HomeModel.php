<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table      = 'beans';
    protected $allowedFields = ['id', 'title', 'description'];

    public function getHome($id)
    {
        // return $this->findAll();
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
