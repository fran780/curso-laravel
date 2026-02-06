<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{

    protected $fillable = ['title', 'content']; //definimos los campos que se pueden asignar masivamente*/
    
    public function editUrl()
    {
        return route('notes.edit', ['id' => $this->id]); /*esto se encarga de generar la url para editar la nota actual*/
    }

}
