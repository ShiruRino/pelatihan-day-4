<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = "cruds";
    protected $fillable = [
        "text_Field",
        "radio_field",
        "checkbox",
        "select_field",
        "date_field",
        "file_field",
        "textarea",
    ] ;
    protected $casts = [
        'checkbox' => 'array',

    ] ;
}
