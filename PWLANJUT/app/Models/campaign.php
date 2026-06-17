<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $fillable = [
        'title',
        'description',
        'target_donation',
        'collected_donation',
        'deadline',
    ];
    
    // Relasi One-to-One ke CampaignAccount
    public function campaignAccount()
    {
        return $this->hasOne(CampaignAccount::class);
    }

    // Alias method so controllers can use ->account()
    public function account()
    {
        return $this->campaignAccount();
    }

    // Relasi One-to-Many ke Donation
    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    // Relasi Many-to-Many ke Category
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}


