<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    public $table = 'tb_events';
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $dates = [
        'date'
    ];

    protected $guarded = [];
    
    public function user() {
        return $this->BelongsTo("App\Models\User");
    }

    public function users(){
        return $this->belongsToMany("App\Models\User");
    }
}
