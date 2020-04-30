<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    protected $fillable = ['type_id', 'name', 'phone', 'email', 'company', 'body'];
}
