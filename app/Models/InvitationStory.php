<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationStory extends Model
{
    protected $guarded = [];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
