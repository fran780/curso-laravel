<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{

    use SoftDeletes; //esto es para habilitar el uso de soft deletes en el modelo Note, lo que permite marcar las notas como eliminadas sin borrarlas físicamente de la base de datos, lo que facilita su recuperación posterior si es necesario.

    protected $fillable = ['title', 'content']; //definimos los campos que se pueden asignar masivamente*/
    
    public function editUrl()
    {
        return route('notes.edit', ['id' => $this->id]); /*esto se encarga de generar la url para editar la nota actual*/
    }

}
