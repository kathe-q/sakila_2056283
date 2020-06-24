<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Atributos correspondientes
    protected $table = "category"; //tabla que vamos a usar
    protected $primaryKey = "category_id"; // id de la tabla que vamos a usar
    public $timestamps = false; // No queremos campos de auditoria

}
