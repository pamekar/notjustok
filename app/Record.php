<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    protected $fillable
        = [
            'upload_id',
            'user_id',
            'isrc',
            'artist',
            'product_title',
            'container_title',
            'label',
            'country',
            'total_plays',
            'revenue',
            'start_at',
            'end_at'
        ];

    public function upload()
    {
        return $this->belongsTo('App\Upload');
    }
}
