<?php

namespace App\Models;

use CodeIgniter\Model;

class HomeModel extends Model
{
    protected $table      = 'qrcode';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['tempat', 'tgl_lahir', 'profesi', 'thn-pendaftaran', 'nohp', 'sarana', 'nama_qr'];
}
