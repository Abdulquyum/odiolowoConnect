<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\programme;
use App\Models\Application;

class PageController extends Controller
{
    public function programmes() {
        $programmes = programme::all();
        return view('pages.programmes', [
            'programmes' => $programmes
        ]);
    }

    public function programme($id) {
        $programme = programme::find($id);

        return view('pages.programmeDetails', [
            'programme' => $programme
        ]);
    }

    public function about() {
        return view('pages.about');
    }

    public function apply($id) {
        $programme = programme::find($id);
        return view('pages.applyForm', [
            'programme' => $programme
        ]);
    }

    public function register(Request $request) {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'fullname' => 'required|string',
            'email' => 'required|string',
            'address' => 'required|string',
            'number' => 'required|string',
            'gender' => 'required|string'
        ]);

        $applicant = new Application;
        $applicant->title = $request->title;
        $applicant->fullname = $request->fullname;
        $applicant->email = $request->email;
        $applicant->address = $request->address;
        $applicant->number = $request->number;
        $applicant->gender = $request->gender;
        $applicant->save();

        return redirect('/programmes')->with('success', 'Application Successful');
    }
}
