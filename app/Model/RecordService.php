<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class RecordService extends Model
{
    /**
     * @var string
     */
    protected $table = 'record_services';

    /**
     * @var array
     */
    protected $fillable = ['date', 'model', 'run', 'name', 'email', 'phone', 'text'];
}
