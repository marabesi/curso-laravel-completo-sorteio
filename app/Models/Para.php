<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Para extends Model {

    protected $primaryKey = 'id';

    protected $table = 'tb_para';

    protected $fillable = [
        'usuario_github',
        'email',
        'confirmado',
        'token'
    ];

    public function convite()
    {
        return $this->belongsToMany('App\Models\Convite', 'tb_convite', 'id_para', 'id_de');
    }
}
