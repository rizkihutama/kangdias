<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    use HasFactory;

    protected $table = 'volunteers';

    protected $guarded = ['id'];

    protected $primaryKey = 'id';

    protected $fillable = [
        'full_name',
        'ig_account',
        'email',
        'phone',
        'motivation'
    ];
}
