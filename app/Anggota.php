<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Poin_Keaktifans;

class Anggota extends Model
{


	public function poin_keakttifan()
	{
		return $this->hasMany(Poin_Keaktifans::class);
	}


}
