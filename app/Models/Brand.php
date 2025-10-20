<?php

namespace App\Models;

use App\Http\Controllers\SneakerController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Brand extends Model
{
    public function brand(): hasMany{
        return $this->hasMany(SneakerController::class, 'brand_id');
    }
}
