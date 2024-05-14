<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_info extends Model
{
    use HasFactory;

    protected $fillable = ['lname','fname','mname','section','level',
    'id_number','contact_person','contact_number','position','status','archive'];
}
