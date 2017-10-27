<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Links extends Model
{
    public function __construct($link)
    {
    	$this->short_uri = str(crc32($link));
    	$this->original_url = $link;
    }
}
