<?php

namespace App\Models;

use App\Models\Inventory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InventoryType extends Model
{

    protected $fillable = [
        'name',
    ];

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }
}
