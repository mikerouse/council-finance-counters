<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\CustomFieldValue;

class CustomField extends Model
{
    protected $fillable = [
        'name',
        'label',
        'type',
        'required',
    ];

    public function values(): HasMany
    {
        return $this->hasMany(CustomFieldValue::class);
    }
}
