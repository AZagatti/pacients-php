<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliation extends Model
{
    use HasFactory;

    protected $table = "avaliations";

    public function pacient() {
        return $this->belongTo(Pacient::class);
    }
}
