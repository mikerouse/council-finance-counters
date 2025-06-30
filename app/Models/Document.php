<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Council;
use App\Models\FinancialYear;

class Document extends Model
{
    protected $fillable = [
        'filename',
        'doc_type',
        'council_id',
        'financial_year_id',
    ];

    public function council(): BelongsTo
    {
        return $this->belongsTo(Council::class);
    }

    public function financialYear(): BelongsTo
    {
        return $this->belongsTo(FinancialYear::class);
    }
}
