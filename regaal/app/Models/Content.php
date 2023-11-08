<?php

namespace App\Models;
use App\Models\Content;
use Illuminate\Database\Eloquent\Model;



class Content extends Model
{
    protected $table = 'tbl_element';
    protected $primaryKey = 'element_id';
    protected $fillable = [
        'element_section',
        'element_title',
        'element_content',
        'element_target',
        'element_status'

    ];




}
