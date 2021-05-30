<?php

namespace App\Http\Controllers;

use App\Http\Resources\AvaliationResource;
use App\Models\Avaliation;
use App\Models\Pacient;
use Illuminate\Http\Request;

class AvaliationController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request, $id)
  {
    $pacient = Pacient::findOrFail($id);

    $avaliation = Avaliation::where("pacient_id", "=", $pacient->id)->first();

    if ($avaliation) {
      return response('', 400);
    }
    $avaliation = new Avaliation();
    $avaliation->main_complaint = $request->main_complaint;
    $avaliation->history_disease = $request->history_disease;
    $avaliation->is_bleeding = $request->is_bleeding;
    $avaliation->is_allergic = $request->is_allergic;
    $avaliation->is_infectious_rheumatism = $request->is_infectious_rheumatism;
    $avaliation->is_cardiovascular_disorder = $request->is_cardiovascular_disorder;
    $avaliation->is_gastritis = $request->is_gastritis;
    $avaliation->is_diabetic = $request->is_diabetic;
    $avaliation->is_fainting = $request->is_fainting;
    $avaliation->is_medical_treatment = $request->is_medical_treatment;
    $avaliation->is_medicines = $request->is_medicines;
    $avaliation->is_operated = $request->is_operated;
    $avaliation->is_addictions = $request->is_addictions;
    $avaliation->is_anxiety_or_depression = $request->is_anxiety_or_depression;
    $avaliation->is_tuberculosis = $request->is_tuberculosis;
    $avaliation->is_syphilis = $request->is_syphilis;
    $avaliation->is_hepatitis = $request->is_hepatitis;
    $avaliation->is_aids = $request->is_aids;
    $avaliation->is_measles = $request->is_measles;
    $avaliation->is_mumps = $request->is_mumps;
    $avaliation->is_varicella = $request->is_varicella;
    $avaliation->is_others = $request->is_others;
    $avaliation->others = $request->others;
    $avaliation->is_smoker = $request->is_smoker;
    $avaliation->smoking_frequency = $request->smoking_frequency;
    $avaliation->childish_history_gestation = $request->childish_history_gestation;
    $avaliation->childish_childbirth = $request->childish_childbirth;
    $avaliation->childish_childbirth_problems = $request->childish_childbirth_problems;
    $avaliation->childish_breast_feeding = $request->childish_breast_feeding;
    $avaliation->childish_breast_feeding_age = $request->childish_breast_feeding_age;
    $avaliation->childish_local_anesthesia = $request->childish_local_anesthesia;
    $avaliation->childish_serious_disease = $request->childish_serious_disease;
    $avaliation->childish_vaccinated = $request->childish_vaccinated;
    $avaliation->childish_first_two_yers = $request->childish_first_two_yers;
    $avaliation->childish_learning_difficulty = $request->childish_learning_difficulty;
    $avaliation->childish_soulful = $request->childish_soulful;
    $avaliation->childish_sleep = $request->childish_sleep;
    $avaliation->childish_psychomotor = $request->childish_psychomotor;
    $avaliation->childish_feeding = $request->childish_feeding;
    $avaliation->childish_sociability = $request->childish_sociability;
    $avaliation->childish_conduct_pathology = $request->childish_conduct_pathology;
    $avaliation->childish_comments = $request->childish_comments;
    $avaliation->lips = $request->lips;
    $avaliation->alveolar_mucosa = $request->alveolar_mucosa;
    $avaliation->mucosa_ugal = $request->mucosa_ugal;
    $avaliation->gums = $request->gums;
    $avaliation->tongue = $request->tongue;
    $avaliation->salivary_glands = $request->salivary_glands;
    $avaliation->mouth_floor = $request->mouth_floor;
    $avaliation->lymph_nodes = $request->lymph_nodes;
    $avaliation->hard_palate = $request->hard_palate;
    $avaliation->atm = $request->atm;
    $avaliation->throat = $request->throat;
    $avaliation->chewing_muscles = $request->chewing_muscles;
    $avaliation->soft_palate = $request->soft_palate;
    $avaliation->occlusion = $request->occlusion;
    $avaliation->changes_found = $request->changes_found;
    $avaliation->min_blood_pressure = $request->min_blood_pressure;
    $avaliation->max_blood_pressure = $request->max_blood_pressure;
    $avaliation->presumptive_diagnosis = $request->presumptive_diagnosis;
    $avaliation->complementary_exams = $request->complementary_exams;
    $avaliation->definitive_diagnosis = $request->definitive_diagnosis;
    $avaliation->treatment = $request->treatment;
    $avaliation->treatment_plan = $request->treatment_plan;
    $avaliation->is_urgency = $request->is_urgency;
    $avaliation->medication = $request->medication;
    $avaliation->medication_description = $request->medication_description;
    $avaliation->pacient_id = $pacient->id;

    if ($avaliation->save()) {
      return new AvaliationResource($avaliation);
    }
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    $pacient = Pacient::findOrFail($id);

    $avaliation = Avaliation::where("pacient_id", "=", $pacient->id)->firstOrFail();

    return new AvaliationResource($avaliation);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    $avaliation = Avaliation::findOrFail($id);

    $avaliation->main_complaint = $request->main_complaint ? $request->main_complaint : $avaliation->main_complaint;
    $avaliation->history_disease = $request->history_disease ? $request->history_disease : $avaliation->history_disease;
    $avaliation->is_bleeding = $request->is_bleeding ? $request->is_bleeding : $avaliation->is_bleeding;
    $avaliation->is_allergic = $request->is_allergic ? $request->is_allergic : $avaliation->is_allergic;
    $avaliation->is_infectious_rheumatism = $request->is_infectious_rheumatism ? $request->is_infectious_rheumatism : $avaliation->is_infectious_rheumatism;
    $avaliation->is_cardiovascular_disorder = $request->is_cardiovascular_disorder ? $request->is_cardiovascular_disorder : $avaliation->is_cardiovascular_disorder;
    $avaliation->is_gastritis = $request->is_gastritis ? $request->is_gastritis : $avaliation->is_gastritis;
    $avaliation->is_diabetic = $request->is_diabetic ? $request->is_diabetic : $avaliation->is_diabetic;
    $avaliation->is_fainting = $request->is_fainting ? $request->is_fainting : $avaliation->is_fainting;
    $avaliation->is_medical_treatment = $request->is_medical_treatment ? $request->is_medical_treatment : $avaliation->is_medical_treatment;
    $avaliation->is_medicines = $request->is_medicines ? $request->is_medicines : $avaliation->is_medicines;
    $avaliation->is_operated = $request->is_operated ? $request->is_operated : $avaliation->is_operated;
    $avaliation->is_addictions = $request->is_addictions ? $request->is_addictions : $avaliation->is_addictions;
    $avaliation->is_anxiety_or_depression = $request->is_anxiety_or_depression ? $request->is_anxiety_or_depression : $avaliation->is_anxiety_or_depression;
    $avaliation->is_tuberculosis = $request->is_tuberculosis ? $request->is_tuberculosis : $avaliation->is_tuberculosis;
    $avaliation->is_syphilis = $request->is_syphilis ? $request->is_syphilis : $avaliation->is_syphilis;
    $avaliation->is_hepatitis = $request->is_hepatitis ? $request->is_hepatitis : $avaliation->is_hepatitis;
    $avaliation->is_aids = $request->is_aids ? $request->is_aids : $avaliation->is_aids;
    $avaliation->is_measles = $request->is_measles ? $request->is_measles : $avaliation->is_measles;
    $avaliation->is_mumps = $request->is_mumps ? $request->is_mumps : $avaliation->is_mumps;
    $avaliation->is_varicella = $request->is_varicella ? $request->is_varicella : $avaliation->is_varicella;
    $avaliation->is_others = $request->is_others ? $request->is_others : $avaliation->is_others;
    $avaliation->others = $request->others ? $request->others : $avaliation->others;
    $avaliation->is_smoker = $request->is_smoker ? $request->is_smoker : $avaliation->is_smoker;
    $avaliation->smoking_frequency = $request->smoking_frequency ? $request->smoking_frequency : $avaliation->smoking_frequency;
    $avaliation->childish_history_gestation = $request->childish_history_gestation ? $request->childish_history_gestation : $avaliation->childish_history_gestation;
    $avaliation->childish_childbirth = $request->childish_childbirth ? $request->childish_childbirth : $avaliation->childish_childbirth;
    $avaliation->childish_childbirth_problems = $request->childish_childbirth_problems ? $request->childish_childbirth_problems : $avaliation->childish_childbirth_problems;
    $avaliation->childish_breast_feeding = $request->childish_breast_feeding ? $request->childish_breast_feeding : $avaliation->childish_breast_feeding;
    $avaliation->childish_breast_feeding_age = $request->childish_breast_feeding_age ? $request->childish_breast_feeding_age : $avaliation->childish_breast_feeding_age;
    $avaliation->childish_local_anesthesia = $request->childish_local_anesthesia ? $request->childish_local_anesthesia : $avaliation->childish_local_anesthesia;
    $avaliation->childish_serious_disease = $request->childish_serious_disease ? $request->childish_serious_disease : $avaliation->childish_serious_disease;
    $avaliation->childish_vaccinated = $request->childish_vaccinated ? $request->childish_vaccinated : $avaliation->childish_vaccinated;
    $avaliation->childish_first_two_yers = $request->childish_first_two_yers ? $request->childish_first_two_yers : $avaliation->childish_first_two_yers;
    $avaliation->childish_learning_difficulty = $request->childish_learning_difficulty ? $request->childish_learning_difficulty : $avaliation->childish_learning_difficulty;
    $avaliation->childish_soulful = $request->childish_soulful ? $request->childish_soulful : $avaliation->childish_soulful;
    $avaliation->childish_sleep = $request->childish_sleep ? $request->childish_sleep : $avaliation->childish_sleep;
    $avaliation->childish_psychomotor = $request->childish_psychomotor ? $request->childish_psychomotor : $avaliation->childish_psychomotor;
    $avaliation->childish_feeding = $request->childish_feeding ? $request->childish_feeding : $avaliation->childish_feeding;
    $avaliation->childish_sociability = $request->childish_sociability ? $request->childish_sociability : $avaliation->childish_sociability;
    $avaliation->childish_conduct_pathology = $request->childish_conduct_pathology ? $request->childish_conduct_pathology : $avaliation->childish_conduct_pathology;
    $avaliation->childish_comments = $request->childish_comments ? $request->childish_comments : $avaliation->childish_comments;
    $avaliation->lips = $request->lips ? $request->lips : $avaliation->lips;
    $avaliation->alveolar_mucosa = $request->alveolar_mucosa ? $request->alveolar_mucosa : $avaliation->alveolar_mucosa;
    $avaliation->mucosa_ugal = $request->mucosa_ugal ? $request->mucosa_ugal : $avaliation->mucosa_ugal;
    $avaliation->gums = $request->gums ? $request->gums : $avaliation->gums;
    $avaliation->tongue = $request->tongue ? $request->tongue : $avaliation->tongue;
    $avaliation->salivary_glands = $request->salivary_glands ? $request->salivary_glands : $avaliation->salivary_glands;
    $avaliation->mouth_floor = $request->mouth_floor ? $request->mouth_floor : $avaliation->mouth_floor;
    $avaliation->lymph_nodes = $request->lymph_nodes ? $request->lymph_nodes : $avaliation->lymph_nodes;
    $avaliation->hard_palate = $request->hard_palate ? $request->hard_palate : $avaliation->hard_palate;
    $avaliation->atm = $request->atm ? $request->atm : $avaliation->atm;
    $avaliation->throat = $request->throat ? $request->throat : $avaliation->throat;
    $avaliation->chewing_muscles = $request->chewing_muscles ? $request->chewing_muscles : $avaliation->chewing_muscles;
    $avaliation->soft_palate = $request->soft_palate ? $request->soft_palate : $avaliation->soft_palate;
    $avaliation->occlusion = $request->occlusion ? $request->occlusion : $avaliation->occlusion;
    $avaliation->changes_found = $request->changes_found ? $request->changes_found : $avaliation->changes_found;
    $avaliation->min_blood_pressure = $request->min_blood_pressure ? $request->min_blood_pressure : $avaliation->min_blood_pressure;
    $avaliation->max_blood_pressure = $request->max_blood_pressure ? $request->max_blood_pressure : $avaliation->max_blood_pressure;
    $avaliation->presumptive_diagnosis = $request->presumptive_diagnosis ? $request->presumptive_diagnosis : $avaliation->presumptive_diagnosis;
    $avaliation->complementary_exams = $request->complementary_exams ? $request->complementary_exams : $avaliation->complementary_exams;
    $avaliation->definitive_diagnosis = $request->definitive_diagnosis ? $request->definitive_diagnosis : $avaliation->definitive_diagnosis;
    $avaliation->treatment = $request->treatment ? $request->treatment : $avaliation->treatment;
    $avaliation->treatment_plan = $request->treatment_plan ? $request->treatment_plan : $avaliation->treatment_plan;
    $avaliation->is_urgency = $request->is_urgency ? $request->is_urgency : $avaliation->is_urgency;
    $avaliation->medication = $request->medication ? $request->medication : $avaliation->medication;
    $avaliation->medication_description = $request->medication_description ? $request->medication_description : $avaliation->medication_description;

    if ($avaliation->save()) {
      return new AvaliationResource($avaliation);
    }
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //
  }
}
