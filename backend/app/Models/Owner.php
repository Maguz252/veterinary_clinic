<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Casts\Attribute;

use Carbon\Carbon;

class Owner extends Model
{
    //
    //el borrado suave de la vida :v 
    use SoftDeletes;
    protected $fillable = [
        'ci',
        'expedido',
        'complemento',
        'date_of_birth',
        'name',
        'last_name',
        'address',
        'cell_phone',
    ];

    //relacion con el dueño (seguir leyendo cuesta dominar)
    public function patients(): HasMany
    {
        return $this->hasMany(Patient::class);
    }

    //helper 
    protected function age(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::parse($this->date_of_birth)->age,
        );
    }
}
