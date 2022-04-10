<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lessons extends Model
{
    use HasFactory;

    /*Schema::create('sessions', function ($table) {
        $table->integer('lesson_id')->primary();
        $table->foreignId('sub_id')->nullable()->index();
        $table->string('lessonname', 100)->nullable();
        $table->text('filesrc')->nullable();
    });*/
}
