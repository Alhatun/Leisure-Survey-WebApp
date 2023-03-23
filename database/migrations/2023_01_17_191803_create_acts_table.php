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
        Schema::create('acts', function (Blueprint $table) {

            $table->unsignedBigInteger('id')->autoIncrement();
            $table->enum('emotions', ['Happiness', 'Engagement', 'Disconnection', 'Aversion', 'Excitement', 'Annoyance']);
            $table->string('age')->nullable();
            // $table->enum('age', ['14 years and under', '15-24 years', '25-64 years', '65 years and over'])->nullable();
            $table->enum('gender', ['Male', 'Female', 'Other']);
            $table->enum('income_range', ['Low', 'Moderate', 'High']);
            $table->enum('education_level', ['Primary', 'Secondary', 'Tertiary', 'Other']);
           
            $table->enum('visit_with', ['Alone', 'Friends', 'Family', 'Other']);
            $table->enum('budget_range', ['$0-$100', '$100-$500', '$500-$1000']);
            $table->enum('visit_again', ['Yes', 'No']);
            $table->enum('physical_disability', ['Yes', 'No']);
            $table->enum('organization_rating', ['Poor', 'Fair', 'Good']);
            $table->enum('cost_rating', ['Affordable', 'Moderate', 'Expensive']);
            $table->enum('cleanliness_rating', ['Poor', 'Fair', 'Good']);
            $table->enum('staff_friendliness_rating', ['Poor', 'Fair', 'Good']);
            $table->enum('service_quality_rating', ['Poor', 'Fair', 'Good']);
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
        Schema::dropIfExists('acts');
    }
};
