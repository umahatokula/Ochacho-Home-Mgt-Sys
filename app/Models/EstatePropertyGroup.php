<?php

namespace App\Models;

use App\Models\Estate;
use App\Models\PropertyGroup;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EstatePropertyGroup extends Model
{
    use HasFactory;

    protected $table = 'estate_property_group';
    
    /**
     * properties
     *
     * @return void
     */
    public function propertyGroup() {
        return $this->belongsTo(PropertyGroup::class);
    }
    
    /**
     * properties
     *
     * @return void
     */
    public function estate() {
        return $this->belongsTo(Estate::class);
    }
}
