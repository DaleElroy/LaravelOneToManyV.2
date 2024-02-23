<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index(){
        $subjects = Subject::all();
        return response()->json(['subjects'=>$subjects]);

    }


    public function store(Request $request){
        return Subject::create($request->all());
    }
    public function update(Request $request, $id){
        $subject = Subject::find($id);
        $subject ->update($request ->all());
        return response()->json(['Subject'=>$subject]);
    }
    public function destroy($id){
        $subject = Subject::find($id);
        $subject->delete();
        return response()->json(['message'=>"successfully Deleted the " ($id)]);

    }
}
