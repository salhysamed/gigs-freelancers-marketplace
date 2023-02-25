<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;
    
    protected $fillable = ['title','company','location','phone','tags','email','webiste','description'];
    // or add Model::unguard(); to AppServiceprovider inside boot() function
    
    public function scopeFilter($query, array $filters){
        if($filters['tag'] ?? false){
            $query->where('tags', 'LIKE', '%'.request()->tag.'%');
        }
        if($filters['search'] ?? false){
            $query->where('title', 'LIKE', '%'.request()->search.'%')
                   ->orWhere('company', 'LIKE', '%'.request()->search.'%')
                   ->orWhere('description', 'LIKE', '%'.request()->search.'%')
                   ->orWhere('location', 'LIKE', '%'.request()->search.'%')
                   ->orWhere('tags', 'LIKE', '%'.request()->search.'%');
        }

    }
}
