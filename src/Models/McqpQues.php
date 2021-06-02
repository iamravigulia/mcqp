<?php
namespace Edgewizz\Mcqp\Models;

use Illuminate\Database\Eloquent\Model;

class McqpQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Mcqp\Models\McqpAns', 'question_id');
    }
    protected $table = 'fmt_mcqp_ques';
}