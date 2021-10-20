<?php

namespace App\Database\Seeds;

use App\Models\Pengguna_12200457;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200457 extends Seeder
{
    public function run()
    {
        $data = [
        [
            'nama'      =>'WindaDwiSeptiani',
            'password'  =>md5('12200457')
        ],
        [
            'nama'      =>'admin',
            'password'  =>md5('12345')
        ],
        [
            'nama'      =>'12200457',
            'password'  =>md5('WindaDwiSeptiani')  
        ]
        ];

        
        $p = new Pengguna_12200457();
        $p->insertBatch($data); 
    }
}