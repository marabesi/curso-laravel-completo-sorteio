<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class De extends Model {

    protected $primaryKey = 'id';

    protected $table = 'tb_de';

    protected $fillable = [
        'usuario_github',
        'email'
    ];

    public function convite()
    {
        return $this->belongsToMany('App\Models\Convite', 'tb_convite', 'id_de', 'id_para');
    }
}