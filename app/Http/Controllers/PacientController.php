<?php

namespace App\Http\Controllers;

use App\Http\Resources\PacientResource;
use App\Models\Pacient;
use Illuminate\Http\Request;

class PacientController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    $pacients = Pacient::paginate(10);
    return PacientResource::collection($pacients);
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
  public function store(Request $request)
  {
    $pacient = new Pacient();
    $pacient->name = $request->name;
    $pacient->birthday = $request->birthday;
    $pacient->gender = $request->gender;
    $pacient->weight = $request->weight;
    $pacient->height = $request->height;
    $pacient->ethnicity = $request->ethnicity;
    $pacient->schooling = $request->schooling;
    $pacient->occupation = $request->occupation;
    $pacient->rg = $request->rg;
    $pacient->cpf = $request->cpf;
    $pacient->marital_status = $request->marital_status;
    $pacient->nationality = $request->nationality;
    $pacient->nationality_state = $request->nationality_state;
    $pacient->father = $request->father;
    $pacient->father_nationality = $request->father_nationality;
    $pacient->mother = $request->mother;
    $pacient->mother_nationality = $request->mother_nationality;
    $pacient->contact = $request->contact;
    $pacient->street = $request->street;
    $pacient->number = $request->number;
    $pacient->add_on = $request->add_on;
    $pacient->district = $request->district;
    $pacient->city = $request->city;
    $pacient->cep = $request->cep;
    $pacient->state = $request->state;

    if ($pacient->save()) {
      return new PacientResource($pacient);
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

    return new PacientResource($pacient);
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
    $pacient = Pacient::findOrFail($id);

    $pacient->name = $request->name ? $request->name : $pacient->name;
    $pacient->birthday = $request->birthday ? $request->birthday : $pacient->birthday;
    $pacient->gender = $request->gender ? $request->gender : $pacient->gender;
    $pacient->weight = $request->weight ? $request->weight : $pacient->weight;
    $pacient->height = $request->height ? $request->height : $pacient->height;
    $pacient->ethnicity = $request->ethnicity ? $request->ethnicity : $pacient->ethnicity;
    $pacient->schooling = $request->schooling ? $request->schooling : $pacient->schooling;
    $pacient->occupation = $request->occupation ? $request->occupation : $pacient->occupation;
    $pacient->rg = $request->rg ? $request->rg : $pacient->rg;
    $pacient->cpf = $request->cpf ? $request->cpf : $pacient->cpf;
    $pacient->marital_status = $request->marital_status ? $request->marital_status : $pacient->marital_status;
    $pacient->nationality = $request->nationality ? $request->nationality : $pacient->nationality;
    $pacient->nationality_state = $request->nationality_state ? $request->nationality_state : $pacient->nationality_state;
    $pacient->father = $request->father ? $request->father : $pacient->father;
    $pacient->father_nationality = $request->father_nationality ? $request->father_nationality : $pacient->father_nationality;
    $pacient->mother = $request->mother ? $request->mother : $pacient->mother;
    $pacient->mother_nationality = $request->mother_nationality ? $request->mother_nationality : $pacient->mother_nationality;
    $pacient->contact = $request->contact ? $request->contact : $pacient->contact;
    $pacient->street = $request->street ? $request->street : $pacient->street;
    $pacient->number = $request->number ? $request->number : $pacient->number;
    $pacient->add_on = $request->add_on ? $request->add_on : $pacient->add_on;
    $pacient->district = $request->district ? $request->district : $pacient->district;
    $pacient->city = $request->city ? $request->city : $pacient->city;
    $pacient->cep = $request->cep ? $request->cep : $pacient->cep;
    $pacient->state = $request->state ? $request->state : $pacient->state;

    if ($pacient->save()) {
      return new PacientResource($pacient);
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
    $pacient = Pacient::findOrFail($id);

    if ($pacient->delete()) {
      return new PacientResource($pacient);
    }
  }
}
