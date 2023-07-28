<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory, SoftDeletes;
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * This PHP function returns the name of a category based on its ID.
     *
     * @return The function `getCategoryName()` is returning the name of the category associated with the
     * current object instance. It does this by querying the `Category` model for the category with the
     * same `id` as the `category_id` attribute of the current object instance, and returning the `name`
     * attribute of that category.
     */
    public function getCategoryName()
    {
        return Category::where('id', $this->category_id)->value('name');
    }
}
