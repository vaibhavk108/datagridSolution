<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    use HasFactory;

    protected $table = 'family_member';

    protected $fillable = [
        'family_id','member_name', 'member_birthdate', 'member_marital_status', 'member_wedding_date', 'education', 'member_photo',
    ];


    public function familyHead()
    {
        return $this->belongsTo(FamilyHead::class, 'family_id', 'id');
    }

}
