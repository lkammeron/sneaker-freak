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

    public function sneaker(): void
    {
        $this->belongsTo(BrandController::class, 'sneaker_id');
    }

    public function patch(\Illuminate\Http\Request $request, $id)
    {
    }

    public function brand(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }
}



