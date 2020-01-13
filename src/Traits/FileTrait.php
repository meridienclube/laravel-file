<?php

namespace ConfrariaWeb\File\Traits;

trait FileTrait
{

    public function files()
    {
        return $this->morphMany('ConfrariaWeb\File\Models\File', 'fileable');
    }
}
