<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusLine extends Model
{
    // public function stops()
    // {
    //     return $this->belongsToMany(BusStop::class)
    //         ->withPivot('stop_order', 'direction')
    //         ->orderBy('pivot_stop_order');
    // }
    public function stopsUp()
    {
        return $this->belongsToMany(BusStop::class)
            ->withPivot('stop_order', 'direction')
            ->wherePivot('direction', 'up')
            ->orderBy('pivot.stop_order');
    }

    public function stopsDown()
    {
        return $this->belongsToMany(BusStop::class)
            ->withPivot('stop_order', 'direction')
            ->wherePivot('direction', 'down')
            ->orderBy('pivot.stop_order');
    }

}
