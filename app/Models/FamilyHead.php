<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyHead extends Model
{
    use HasFactory;
     
     protected $table = 'family_head';

     protected $fillable = [

        'head_name', 'head_surname', 'head_birthdate', 'head_mobile', 'head_address',
        'head_state', 'head_city', 'head_pincode', 'marital_status', 'wedding_date', 'hobbies', 'head_photo',

    ];

     public function familyMembers()
     {
        return $this->hasMany(FamilyMember::class, 'family_id', 'id');
     }

}
