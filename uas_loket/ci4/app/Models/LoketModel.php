<?php

namespace App\Models;

use CodeIgniter\Model;

class LoketModel extends Model
{
    protected $table = 'loket';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields = ['id','nama', 'keterangan', 'pelayanan_id'];

} 