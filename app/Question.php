<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

/**
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class Question extends Model
{

    protected $fillable = [
        'question',
        'true',
        'false1',
        'false2',
        'false3',
    ];

    public function createDummyData(Request $request)
    {

    }
}
