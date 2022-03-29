<?php

namespace Treii28\GedcomxLaravel\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $original;
    public function facts() { return $this->belongsTo(Fact::class); }
}
