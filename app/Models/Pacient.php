<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    use HasFactory;

    protected $table = "pacients";

    protected $fillable = [
        'name',
        'birthday',
        'gender',
        'weight',
        'height',
        'ethnicity',
        'schooling',
        'occupation',
        'rg',
        'cpf',
        'marital_status',
        'nationality',
        'nationality_state',
        'father',
        'father_nationality',
        'mother',
        'mother_nationality',
        'contact',
        'street',
        'number',
        'add_on',
        'district',
        'city',
        'cep',
        'state'
    ];

    public function medical_records() {
        return $this->hasMany(MedicalRecord::class);
    }

    public function avaliation() {
        return $this->hasOne(Avaliation::class);
    }
}
