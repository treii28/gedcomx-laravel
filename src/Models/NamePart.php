<?php

namespace Treii28\GedcomxLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class NamePart extends Model
{
    protected $preferred; // boolean

    // relation
    public function person() { return $this->belongsTo(Person::class); }
    public function qualifier() { return $this->belongsTo(QualifierType::class); }
}
