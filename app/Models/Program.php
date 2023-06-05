<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, fn($query, $search) =>
        $query->where('program_name', 'like', '%' . $search . '%')
            ->orWhere('faculty', 'like', '%' . $search . '%')
            ->orWhere('university', 'like', '%' . $search . '%')
            ->orWhere('city', 'like', '%' . $search . '%')
            ->orWhere('country', 'like', '%' . $search . '%')
            ->orWhere('degree', 'like', '%' . $search . '%')
            ->orWhere('detail', 'like', '%' . $search . '%')
        );
    }
}
