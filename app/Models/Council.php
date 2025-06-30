<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Document;
use App\Models\CustomFieldValue;
use App\Models\FinancialYear;

/**
 * Basic Council model storing key finance fields.
 */

class Council extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'population',
        'households',
        'current_liabilities',
        'long_term_liabilities',
        'finance_lease_pfi_liabilities',
        'manual_debt_entry',
        'non_council_tax_income',
        'council_tax_general_grants_income',
        'government_grants_income',
        'all_other_income',
        'council_type',
        'council_location',
        'minimum_revenue_provision',
        'annual_spending',
        'annual_deficit',
        'interest_paid',
        'capital_financing_requirement',
        'usable_reserves',
        'consultancy_spend',
        'waste_report_count',
        'statement_of_accounts',
        'financial_data_source_url',
        'status_message',
        'status_message_type',
        'council_closed',
        'debt_adjustments',
        'total_debt',
        'total_income',
    ];

    protected $casts = [
        'debt_adjustments' => 'array',
        'council_closed' => 'boolean',
    ];

    public function documents(): HasMany
    {
        return $this->hasMany(Document::class);
    }

    public function customFieldValues(): HasMany
    {
        return $this->hasMany(CustomFieldValue::class);
    }

    public function financialYears(): BelongsToMany
    {
        return $this->belongsToMany(FinancialYear::class, 'council_financial_year')
            ->withPivot('is_default');
    }
}
