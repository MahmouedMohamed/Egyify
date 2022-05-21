<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    public function workers()
    {
        return $this->hasMany(User::class);
    }

    public function manager()
    {
        return $this->workers->roles()->where('name', '=', AvailableRoles::ShopManager);
    }
    public function theme()
    {
        return $this->hasOne(Theme::class);
    }
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
