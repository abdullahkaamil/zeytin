<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ZeytinType extends Model
{
    protected $table = "zeytin_tipi";
    
    protected $fillable = [
        'user_id', 'treeType','type', 'treeAge','place','altitude'
    ];
}
