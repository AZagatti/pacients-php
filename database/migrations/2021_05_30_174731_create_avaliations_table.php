<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvaliationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avaliations', function (Blueprint $table) {
            $table->id();
            $table->string('main_complaint');
            $table->text('history_disease');
            $table->boolean('is_bleeding');
            $table->boolean('is_allergic');
            $table->boolean('is_infectious_rheumatism');
            $table->boolean('is_cardiovascular_disorder');
            $table->boolean('is_gastritis');
            $table->boolean('is_diabetic');
            $table->boolean('is_fainting');
            $table->boolean('is_medical_treatment');
            $table->boolean('is_medicines');
            $table->boolean('is_operated');
            $table->boolean('is_addictions');
            $table->boolean('is_anxiety_or_depression');
            $table->boolean('is_tuberculosis');
            $table->boolean('is_syphilis');
            $table->boolean('is_hepatitis');
            $table->boolean('is_aids');
            $table->boolean('is_measles');
            $table->boolean('is_mumps');
            $table->boolean('is_varicella');
            $table->boolean('is_others');
            $table->string('others')->nullable();
            $table->boolean('is_smoker');
            $table->string('smoking_frequency')->nullable();
            $table->string('childish_history_gestation')->nullable();
            $table->string('childish_childbirth')->nullable();
            $table->boolean('childish_childbirth_problems')->nullable();
            $table->string('childish_breast_feeding')->nullable();
            $table->integer('childish_breast_feeding_age')->nullable();
            $table->boolean('childish_local_anesthesia')->nullable();
            $table->boolean('childish_serious_disease')->nullable();
            $table->string('childish_vaccinated')->nullable();
            $table->string('childish_first_two_yers')->nullable();
            $table->string('childish_learning_difficulty')->nullable();
            $table->string('childish_soulful')->nullable();
            $table->string('childish_sleep')->nullable();
            $table->string('childish_psychomotor')->nullable();
            $table->string('childish_feeding')->nullable();
            $table->string('childish_sociability')->nullable();
            $table->string('childish_conduct_pathology')->nullable();
            $table->string('childish_comments')->nullable();
            $table->string('lips');
            $table->string('alveolar_mucosa');
            $table->string('mucosa_ugal');
            $table->string('gums');
            $table->string('tongue');
            $table->string('salivary_glands');
            $table->string('mouth_floor');
            $table->string('lymph_nodes');
            $table->string('hard_palate');
            $table->string('atm');
            $table->string('throat');
            $table->string('chewing_muscles');
            $table->string('soft_palate');
            $table->string('occlusion');
            $table->text('changes_found');
            $table->string('min_blood_pressure');
            $table->string('max_blood_pressure');
            $table->text('presumptive_diagnosis');
            $table->text('complementary_exams');
            $table->text('definitive_diagnosis');
            $table->text('treatment');
            $table->text('treatment_plan');
            $table->boolean('is_urgency');
            $table->boolean('medication');
            $table->string('medication_description')->nullable();
            $table->bigInteger('pacient_id')->unsigned();
            $table->foreign('pacient_id')->references('id')->on('pacients')->onDelete('cascade');
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
        Schema::dropIfExists('avaliations');
    }
}
