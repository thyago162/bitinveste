<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Investimento extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id_investimento';
    protected $table = 'investimentos';

    protected $fillable = [
        'saldo_anterior','saldo_atual','data'
    ];
}
