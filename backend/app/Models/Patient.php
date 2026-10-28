<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{

    //el borrado suave de la vida :v 
    use SoftDeletes;
    protected $fillable = [
        'name',
        'species',
        'breed',
        'date_of_birth',
        'owner_id',

    ];
    //relacion con el dueño
    public function owner(): BelongsTo
    {
        return $this->belongsTo(Owner::class);
    }
    //un helper
    protected function age(): Attribute
    {
        return Attribute::make(
            get: fn() => Carbon::parse($this->date_of_birth)->age,
        );
    }
}
