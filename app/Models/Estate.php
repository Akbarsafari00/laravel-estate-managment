<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estate extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'editable'
    ];

    public function types()
    {
        return $this->belongsToMany(EstateType::class, 'estates_to_estate_types');
    }


    public function document_types()
    {
        return $this->belongsToMany(EstateDocumentType::class, 'estates_to_estate_document_types');
    }


    public function subscriptions()
    {
        return $this->belongsToMany(EstateSubscription::class, 'estates_to_estate_subscription');
    }


    public function features()
    {
        return $this->belongsToMany(EstateFeatures::class, 'estates_to_estate_features');
    }
}
