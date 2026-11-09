<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $fillable = [
        'borrowing_code',
        'inventory_id',
        'borrower_name',
        'borrower_class',
        'borrower_role',
        'borrow_date',
        'return_date',
        'duration_hours',
        'quantity',
        'purpose',
        'is_outside_class_hours',
        'status',
        'approved_by',
        'approved_at',
        'returned_at',
        'notes',
    ];

    protected $casts = [
        'borrow_date' => 'date',
        'return_date' => 'date',
        'approved_at' => 'datetime',
        'returned_at' => 'datetime',
        'is_outside_class_hours' => 'boolean',
        'duration_hours' => 'integer',
        'quantity' => 'integer',
    ];

    public function inventory()
    {
        return $this->belongsTo(Inventory::class);
    }
}
