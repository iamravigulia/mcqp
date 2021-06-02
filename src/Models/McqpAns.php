<?php
namespace Edgewizz\Mcqp\Models;

use Illuminate\Database\Eloquent\Model;

class McqpAns extends Model
{
    public function match(){
        return $this->belongsTo('Edgewizz\Mcqp\Models\McqpAns', 'match_id');
    }
    protected $table = 'fmt_mcqp_ans';
}
