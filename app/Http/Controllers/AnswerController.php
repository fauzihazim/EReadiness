<?php

namespace App\Http\Controllers;
use App\Models\Answer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnswerController extends Controller
{
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    public function saveAnswer(Request $request) 
    {
        $newAnswer = new Answer;
        // Computer Self Efficacy
        $newAnswer->skorCSE1 = $request->CSE1;
        $newAnswer->skorCSE2 = $request->CSE2;
        $newAnswer->skorCSE3 = $request->CSE3;
        $newAnswer->skorCSE4 = $request->CSE4;
        $newAnswer->skorCSE5 = $request->CSE5;
        $newAnswer->avgCSE = ($request->CSE1+$request->CSE2+$request->CSE3+$request->CSE4+$request->CSE5)/5;
        // Self directed learning
        $newAnswer->skorSDL1 = $request->SDL1;
        $newAnswer->skorSDL2 = $request->SDL2;
        $newAnswer->skorSDL3 = $request->SDL3;
        $newAnswer->skorSDL4 = $request->SDL4;
        $newAnswer->skorSDL5 = $request->SDL5;
        $newAnswer->avgSDL = ($request->SDL1+$request->SDL2+$request->SDL3+$request->SDL4+$request->SDL5)/5;
        // Motivation for learning
        $newAnswer->skorMFL1 = $request->MFL1;
        $newAnswer->skorMFL2 = $request->MFL2;
        $newAnswer->skorMFL3 = $request->MFL3;
        $newAnswer->skorMFL4 = $request->MFL4;
        $newAnswer->avgMFL = ($request->MFL1+$request->MFL2+$request->MFL3+$request->MFL4)/4;
        // Online Communication for Self-Efficacy
        $newAnswer->skorOCSE1 = $request->OCSE1;
        $newAnswer->skorOCSE2 = $request->OCSE2;
        $newAnswer->skorOCSE3 = $request->OCSE3;
        $newAnswer->avgOCSE = ($request->OCSE1+$request->OCSE2+$request->OCSE3)/3;
        // Learner control
        $newAnswer->skorLC1 = $request->LC1;
        $newAnswer->skorLC2 = $request->LC2;
        $newAnswer->skorLC3 = $request->LC3;
        $newAnswer->skorLC4 = $request->LC4;
        $newAnswer->avgLC = ($request->LC1+$request->LC2+$request->LC3+$request->LC4)/4;
        // NIM
        $newAnswer->nim = $request->nim;
        $newAnswer->save();

        // return view('result');
        return view('result', ['results' => Answer::where('nim', $request->nim)->get()]); // Return list where id
    }

    public function showResult($nim) {
        return view('result', ['results' => Answer::where('nim', $nim)->get()]); // Return list where id
        // return view('result');
    }
}