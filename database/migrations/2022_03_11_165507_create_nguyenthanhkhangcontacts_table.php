<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\SoftDeletes;

class CreateNguyenthanhkhangcontactsTable extends Migration
{
    use SoftDeletes;
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nguyenthanhkhangcontacts', function (Blueprint $table) {
            $table->id();
            $table->string('email',100);
            $table->string('title',100);
            $table->text('content');
            $table->tinyInteger('status')->unsigend()->default(1);
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nguyenthanhkhangcontacts');
    }
}
