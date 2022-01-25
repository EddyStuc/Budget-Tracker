<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Relationship to expenses that the category contains
     *
     * @return void
     */
    public function expenses()
    {
        return $this->hasMany(Expense::class);
    }
}


// Groceries
// Rent
// Clothing
// Transport
// Household Bills
// Insurance
// Medical
// Pets
// Saving/Investing
// Entertainment
// Eating out/takeaway
// Other
