<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'contact_number',
        'address',
        'email',
    ];
}
