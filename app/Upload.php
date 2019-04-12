<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    //
    protected $fillable = ['user_id', 'title', 'batch_code','description', 'row_count'];
}
