<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "price"
    ];

    public static function getById($id): Model|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Builder|array|null
    {
        return self::query()->find($id);
    }

    public static function getAll(): \Illuminate\Database\Eloquent\Collection|array
    {
        return self::query()->get();
    }
}
