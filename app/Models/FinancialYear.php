<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Council;
use App\Models\Document;
use App\Models\CustomFieldValue;

class FinancialYear extends Model
{
    protected $fillable = [
        'year',
        'is_default',
    ];

    public function councils(): BelongsToMany
    {
        return $this->belongsToMany(Council::class, 'council_financial_year')
            ->withPivot('is_default');
    }

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function fieldValues(): HasMany
    {
        return $this->hasMany(CustomFieldValue::class);
    }
}
