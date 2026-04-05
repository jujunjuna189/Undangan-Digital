<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvitationGallery extends Model
{
    protected $fillable = ['invitation_id', 'image_path'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
