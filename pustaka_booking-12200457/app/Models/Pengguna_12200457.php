<?php

namespace App\Models;

use CodeIgniter\Model;

class Pengguna_12200457 extends Model
{
    protected $DBGroup              = 'koneksiku';
    protected $table                = 'pengguna_12200457';
    protected $primaryKey           = 'id';
    protected $useAutoIncrement     = true;
    protected $returnType           = 'array';
    protected $protectFields        = true;
    protected $allowedFields        = ['nama', 'password'];
/**
 * 
 * Method untuk cek Login  dari tabel pengguna berdasarkan 
 * nama dan password 
 * @var string $user
 * @var string pass
 */
    public function cekLogin($user , $pass){
        return $this->where ('nama', $user)
                    ->where ('password', md5($pass)  )->first();
    }
}