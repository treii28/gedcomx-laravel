<?php

namespace Treii28\GedcomxLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Fact extends Model
{
    protected $date;

    // relation
    public function person() { return $this->belongsTo(Person::class); }
    public function facttype() { return $this->belongsTo(FactType::class); }
    public function places() { return $this->hasMany(Place::class); }
}
