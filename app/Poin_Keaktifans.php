<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Anggota;

class Poin_Keaktifans extends Model
{
	protected $fillable = [
		'user_id', 'deskripsi',
		'poin_keaktifan',
	];

	public function user()
	{
		return $this->belongsTo(Anggota::class);
	}
}
