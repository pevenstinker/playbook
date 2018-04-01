<?php

namespace PevenStinker\Playbook;

use Illuminate\Database\Eloquent\Model;

class PlaybookChapter extends Model
{
    public function entries() {
        return $this->hasMany(PevenStink\Playbook\PlaybookEntry);
    }
}
