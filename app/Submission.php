<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'title', 'user_id', 'by', 'for', 'project_overview', 'project_details', 'categories', 'project_url', 'project_pdf',
        'project_video', 'image_1', 'image_2', 'image_3', 'image_4', 'image_5', 'image_6', 'image_7', 'image_8', 'image_9',
        'image_10', 'thumbnail', 'team', 'status', 'payment_status', 'payment_proof'
    ];

    public function author(){
        return $this->belongsTo('App\User','user_id','id');
    }
}
