<?php

namespace App\Models;

use App\Http\Controllers\BrandController;
use Illuminate\Database\Eloquent\Model;

class Sneaker extends Model
{
    protected $fillable = [
        'name',
        'color',
        'image',
    ];

    public function patch(\Illuminate\Http\Request $request, $id)
    {
    }

    public function brand(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Brand::class, 'brands_id');
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'users_id');
    }
}



