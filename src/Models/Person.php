<?php

namespace Treii28\GedcomxLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $ancestryId;
    protected $gender;

    public function nameparts() { return $this->hasMany(NamePart::class); }
    public function facts() { return $this->hasMany(Fact::class); }
    public function sources() { return $this->hasMany(Source::class); }
}
