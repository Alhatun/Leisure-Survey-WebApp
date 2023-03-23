<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class activities extends Model
{
    use HasFactory;

    protected $table = 'activities';
    protected $fillable = [
        'user_id', 'age', 'gender', 'income_range', 'education_level', 'health_status', 'visit_with', 'budget_range', 'enjoyment_level', 'visit_again', 'organization_rating', 'cost_rating', 'cleanliness_rating', 'staff_friendliness_rating', 'service_quality_rating', 'satisfaction_level'
    ];


}
