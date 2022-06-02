<?php

namespace App\Models;

use CodeIgniter\Model;

class DistributorModel extends Model
{
    protected $table      = 'distributors';
    protected $allowedFields = ['id', 'name', 'city', 'region', 'country', 'phone', 'email'];

    public function getDistributor($id)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['id' => $id])->first();
    }
}
