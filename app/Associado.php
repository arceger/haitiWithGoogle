<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Associado extends Model
{
    protected $fillable = ['id','nome','est_civel','endereco','email','telefone','telefone_rec','cidade','estado','description'];
    use HasFactory;
}
