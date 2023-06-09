<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuentas extends Model
{
    use HasFactory;
    public function transacciones()
    {
       return $this->hasMany(Transacciones::class,"cuenta_id");
    }
}
