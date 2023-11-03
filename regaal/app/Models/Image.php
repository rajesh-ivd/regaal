<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table = 'tbl_images';
    protected $primaryKey = 'img_id';
    protected $fillable = [
        'img_id',
        'img_section',
        'img_link',
        'img_title',
        'img_text',
        'category',
        'linkedin_link',
        'img_target_page',
        'img_status',
    ];
}
