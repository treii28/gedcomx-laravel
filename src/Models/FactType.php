<?php

namespace Treii28\GedcomxLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class FactType extends Model
{
    // https://github.com/FamilySearch/gedcomx/blob/master/specifications/fact-types-specification.md
    protected $type;
    protected $url;
    protected $description;

    public function facts() { return $this->hasMany(Fact::class); }
}
