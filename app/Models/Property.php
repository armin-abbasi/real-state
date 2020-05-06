<?php

namespace App\Models;


class Property extends BaseModel
{
    protected $with = 'region';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
}
