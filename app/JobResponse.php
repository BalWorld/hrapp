<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobResponse extends Model
{
    protected $table = 'jobresponses';
    protected $fillable = ['name','email','phone','file','job','status','sphone','location','ctc','expected_ctc','notice_period','current_organisation'];
}
