<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    use HasFactory;

    /**
     * Relationship to the user who created the budget
     *
     * @return void
     */
    public function creator()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relationship to categories the budget has
     *
     * @return void
     */
    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    /**
     * Relationship to expenses the budget has
     *
     * @return void
     */
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}
