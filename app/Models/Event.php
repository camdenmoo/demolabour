<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters)
    {
        // Filter by tags
        if($filters['tag'] ?? false){
            $query->where('tags', 'like', '%'.request('tag').'%');
        }

        // Filter by search
        if($filters['search'] ?? false){
            $query->where('title', 'like', '%'.request('search').'%')
            ->orWhere('description', 'like', '%'.request('search').'%')
            ->orWhere('tags ', 'like', '%'.request('search').'%');
        }
    }

    // Relationals
    public function event_category(){
        return $this->belongsTo(EventCategory::class, 'event_category_id');
    }

    public function event_type(){
        return $this->belongsTo(EventType::class, 'event_type_id');
    }
}
