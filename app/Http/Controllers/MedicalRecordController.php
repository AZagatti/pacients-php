<?php

namespace App\Http\Controllers;

use App\Http\Resources\MedicalRecordResource;
use App\Models\MedicalRecord;
use App\Models\Pacient;
use Illuminate\Http\Request;

class MedicalRecordController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index($id)
  {
    $pacient = Pacient::findOrFail($id);

    $medical_record = MedicalRecord::where("pacient_id", "=", $pacient->id)->paginate(10);
    return MedicalRecordResource::collection($medical_record);
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
    $medical_record = new MedicalRecord();

    $medical_record->procedures = $request->procedures;
    $medical_record->pacient_id = $pacient->id;

    if ($medical_record->save()) {
      return new MedicalRecordResource($medical_record);
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
    //
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
    $medical_record = MedicalRecord::findOrFail($id);

    $medical_record->procedures = $request->procedures;


    if ($medical_record->save()) {
      return new MedicalRecordResource($medical_record);
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
    $medical_record = MedicalRecord::findOrFail($id);

    if ($medical_record->delete()) {
      return new MedicalRecordResource($medical_record);
    }
  }
}
