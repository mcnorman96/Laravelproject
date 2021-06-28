<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];
    
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image: 'uploads/SWJrlvcJY0Fy1rrx4QHfLXbP0atHu3We8AYZDsMH.png';
        return '/storage/' . $imagePath;
    }
       
    public function followers() 
    {
        return $this->belongsToMany(User::class);
    }


    public function user() {
        return $this->belongsTo(User::class);
    }
}
