<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityNotification extends Model
{
    protected $fillable = [
        'type',
        'title',
        'subtitle',
        'status_badge',
        'badge_variant',
        'time_ago',
    ];
}
