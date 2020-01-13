<?php

namespace ConfrariaWeb\File\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{

    protected $fillable = ['url'];

    public function fileable()
    {
        return $this->morphTo();
    }
}
