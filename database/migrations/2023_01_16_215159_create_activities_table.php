activites table 

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            
            $table->unsignedBigInteger('id')->autoIncrement();

            $table->integer('age');
            $table->enum('gender', ['male', 'female', 'other']);
            $table->enum('income_range', ['low', 'moderate', 'high']);
            $table->enum('education_level', ['primary', 'secondary', 'tertiary', 'other']);
            $table->enum('physical_disability', ['Yes', 'No']);
            $table->enum('visit_with', ['alone', 'friends', 'family', 'other']);
            $table->enum('budget_range', ['low', 'moderate', 'high']);
            $table->integer('enjoyment_level');
            $table->enum('visit_again', ['yes', 'no']);
            $table->enum('organization_rating', ['poor', 'fair', 'good', 'excellent']);
            $table->enum('cost_rating', ['poor', 'fair', 'good', 'excellent']);
            $table->enum('cleanliness_rating', ['poor', 'fair', 'good', 'excellent']);
            $table->enum('staff_friendliness_rating', ['poor', 'fair', 'good', 'excellent']);
            $table->enum('service_quality_rating', ['poor', 'fair', 'good', 'excellent']);
            $table->integer('satisfaction_level');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('activities');
    }
};

