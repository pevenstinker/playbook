<?php

namespace PevenStinker\Playbook;

use Illuminate\Database\Eloquent\Model;

class Playbook extends Model
{
    public function chapters() {
        return $this->hasMany(PevenStink\Playbook\PlaybookChapter);
    }
}
