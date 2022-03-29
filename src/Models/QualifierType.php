<?php

namespace Treii28\GedcomxLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class QualifierType extends Model
{
    // https://github.com/FamilySearch/gedcomx/blob/master/specifications/name-part-qualifiers-specification.md
    protected $type;
    protected $url;
    protected $description;

    public function nameparts() { return $this->hasMany(NamePart::class); }
}
