<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function sector() {
        return $this->belongsTo(IndustrySector::class);
    }
    public function getSectorName()
    {
        return IndustrySector::where('id', $this->sector_id)->value('name');
    }
    public function getParentName()
    {
        return Industry::where('id', $this->parent_id)->value('name');
    }
}
