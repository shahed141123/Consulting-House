<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontendMenu extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function parent()
    {
        return $this->belongsTo(FrontendMenu::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(FrontendMenu::class, 'parent_id');
    }

    public function getParentName()
    {
        return FrontendMenu::where('id', $this->parent_id)->value('name');
    }
}
