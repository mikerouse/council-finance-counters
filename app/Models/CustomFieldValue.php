<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Council;
use App\Models\CustomField;
use App\Models\FinancialYear;

class CustomFieldValue extends Model
{
    protected $fillable = [
        'council_id',
        'custom_field_id',
        'financial_year_id',
        'value',
    ];

    public function council(): BelongsTo
    {
        return $this->belongsTo(Council::class);
    }

    public function field(): BelongsTo
    {
        return $this->belongsTo(CustomField::class, 'custom_field_id');
    }

    public function financialYear(): BelongsTo
    {
        return $this->belongsTo(FinancialYear::class);
    }
}
