<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convite extends Model {

    protected $table = 'tb_convite';

    protected $fillable = [
        'id_de',
        'id_para'
    ];
}
