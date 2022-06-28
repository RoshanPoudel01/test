<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{  protected $fillable = [
    'menu_category',
];

public function subcategory(){
    return $this->hasOne(MenuCategory::class);
}
    use HasFactory;
}
