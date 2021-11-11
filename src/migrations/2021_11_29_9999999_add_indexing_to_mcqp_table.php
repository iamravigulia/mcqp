<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class addIndexingToMcqpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable('fmt_mcqp_ans')) {
            Schema::table('fmt_mcqp_ans', function (Blueprint $table) {
                $table->index('question_id');
                $table->index('active');
                $table->index('arrange');
                $table->index('media_id');
            });
        }
        if (Schema::hasTable('fmt_mcqp_ques')) {
            Schema::table('fmt_mcqp_ques', function (Blueprint $table) {
                $table->index('active');
                $table->index('media_id');
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('fmt_mcqanpt_ques');
    }
}
