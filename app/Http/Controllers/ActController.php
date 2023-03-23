<?php

namespace App\Http\Controllers;
use App\models\Act;
use Illuminate\Http\Request;

class ActController extends Controller
{
    public function index() {
    return view('survey');
    }
    
    public function submitSurvey(Request $request) {
        $validatedData = $request->validate([
            // validation rules for other fields
            'emotions'=>'required|in:Happiness,Engagement,Disconnection,Aversion,Excitement,Annoyance',
            // 'age' => 'required|in:14 years and under,15-24 years,25-64 years,65 years and over',
            'age' => 'required|string',
            'gender' => 'required|in:Male,Female,Other',
            'income_range' => 'required|in:Low,Moderate,High',
            'education_level' => 'required|in:Primary,Secondary,Tertiary,Other',
            'physical_disability' => 'required|in:Yes,No',
            'visit_with' => 'required|in:Alone,Friends,Family,Other',
            'budget_range' => 'required|in:$0-$100,$100-$500, $500-$1000 ',
            // 'enjoyment_level' => 'required|numeric|between:1,5',
            'visit_again' => 'required|in:Yes,No',
            'organization_rating' => 'required|in:Poor,Fair,Good',
            'cost_rating' => 'required|in:Affordable,Moderate,Expensive',
            'cleanliness_rating' => 'required|in:Poor,Fair,Good',
            'staff_friendliness_rating' => 'required|in:Poor,Fair,Good',
            'service_quality_rating' => 'required|in:Poor,Fair,Good', 
        ]);

        // set the model's attributes
        $act = new Act;
        $act->emotions = $validatedData['emotions'];
        $act->age = $validatedData['age'];
        $act->gender = $validatedData['gender'];
        $act->income_range = $validatedData['income_range'];
        $act->education_level = $validatedData['education_level'];
        $act->physical_disability = $validatedData['physical_disability'];
        $act->visit_with = $validatedData['visit_with'];
        $act->budget_range = $validatedData['budget_range'];
        
        $act->visit_again = $validatedData['visit_again'];
        $act->organization_rating = $validatedData['organization_rating'];
        $act->cost_rating = $validatedData['cost_rating'];
        $act->cleanliness_rating = $validatedData['cleanliness_rating'];
        $act->staff_friendliness_rating = $validatedData['staff_friendliness_rating'];
        
        $act->service_quality_rating = $validatedData['service_quality_rating'];
        $act->save();

    }



}

