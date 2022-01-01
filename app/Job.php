<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Job extends Model
{
    public function path(): string
    {
        return url("/careers/{$this->id}-". Str::slug($this->bw_job_name));
    }
}
