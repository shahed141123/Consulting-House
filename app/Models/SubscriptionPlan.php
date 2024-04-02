<?php

namespace App\Models;

use App\Models\ProfileType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubscriptionPlan extends Model
{
    use HasFactory;

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'profile_type_id', 'category', 'name', 'stripe_plan', 'slug', 'descriptions', 'price', 'currency',
        'interval', 'max_users', 'max_projects', 'max_storage', 'status'
    ];
    protected $casts = [
        'descriptions' => 'json', // Change the column to be casted as JSON
    ];
    public function getProfileTypeName()
    {
        return ProfileType::where('id', $this->profile_type_id)->value('name');
    }
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
