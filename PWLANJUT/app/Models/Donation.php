<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    protected $fillable = ['campaign_id', 'donor_name', 'amount', 'message'];

    // Inverse Relasi One-to-Many ke Campaign
    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
