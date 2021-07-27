<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    protected $table = 'links';
	
	protected $fillable = [
		'descricao',
		'tipo',
		'link',
		'atualizado',
		'created_at',
		'updated_at'
	];
}
