<?php

namespace App\Models;

use CodeIgniter\Model;

class PelayananModel extends Model
{
    protected $table = 'pelayanan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['nama', 'keterangan', 'kode'];

} 