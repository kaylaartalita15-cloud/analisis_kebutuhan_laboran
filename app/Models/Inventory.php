<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $fillable = [
        'category_id',
        'code',
        'name',
        'icon',
        'total_stock',
        'available_stock',
        'min_stock_alert',
        'unit',
        'location',
        'description',
    ];

    protected $casts = [
        'total_stock' => 'integer',
        'available_stock' => 'integer',
        'min_stock_alert' => 'integer',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function borrowings()
    {
        return $this->hasMany(Borrowing::class);
    }

    public function isLowStock(): bool
    {
        return $this->available_stock <= $this->min_stock_alert;
    }
}
