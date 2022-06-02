<?php

namespace App\Models;

use CodeIgniter\Model;

class CatalogModel extends Model
{
    protected $table      = 'beans';
    protected $allowedFields = ['id', 'title', 'description'];

    public function getCatalog($id)
    {
        // return $this->findAll();
        return $this->findAll();
    }
}
