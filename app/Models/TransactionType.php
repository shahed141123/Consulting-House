<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
    public function getProfileTypeName()
    {
        return ProfileType::where('id', $this->profile_type_id)->value('name');
    }
    public function getCategoryTypeName()
    {
        return ClientTypeCategory::where('id', $this->category_type_id)->value('name');
    }
}
