<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Auction extends Model
{
    /** @use HasFactory<\Database\Factories\AuctionFactory> */
    use HasFactory;
    protected $fillable = ['name', 'description', 'starting_price','end_at', 'created_at'];

        /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'end_at' => 'datetime',
            'starting_price' => 'float',
        ];
    }
}