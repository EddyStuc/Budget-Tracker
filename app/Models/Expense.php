<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    /**
     * Relationship to the budget an expense is in
     *
     * @return void
     */
    public function budget()
    {
        return $this->belongsTo(Budget::class);
    }

    /**
     * Relationship to the category the expense belongs to
     *
     * @return void
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Relationship to the user
     *
     * @return void
     */
    public function creator()
    {
        return $this->belongsTo(User::class);
    }
}
