<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'fixes';

    protected $fillable = [
        'CarMake',
        'CarModel',
        'NumberPlate',
        'OwnerName',
        'ServiceDescription',
        'Price'

    ];
}
