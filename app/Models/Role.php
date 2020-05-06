<?php

namespace App\Models;


class Role extends BaseModel
{
    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
