<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programme;
use App\Models\Application;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard() {
        return view('admin.dashboard');
    }

    public function add() {
        return view('admin.addProgramme');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title'=>'required|string|max:255',
            'info'=>'required|string',
            'duration'=>'required|string',
            'image'=>'required|image|max:2048',
            'creator'=>'required|string'
        ]);

        $path = '';
        if ($request->hasfile('image')) {
            $image = $request->file('image');
            $imageName = time()."image".$image->getClientOriginalExtension();
            $destinationPath = public_path('image');
            $image->move($destinationPath, $imageName);
            $path = $path.$imageName;
        }

        $programme = new Programme;
        $programme->title = $request->title;
        $programme->info = $request->info;
        $programme->duration = $request->duration;
        $programme->image = $path;
        $programme->creator = $request->creator;
        $programme->save();

        return redirect('/admin/view')->with('success', 'Programme uploaded successfully');
    }

    public function view() {
        $programmes = programme::all();
        return view('admin.viewProgramme', [
            'programmes' => $programmes
        ]);
    }

    public function details($id) {
        $programme = programme::find($id);
        return view('admin.Detailsprogramme', [
            'programme' => $programme
        ]);
    }

    public function delete($id) {
        programme::find($id)->delete();
        return redirect()->back()->with('success', 'News was successfully deleted');
    }

    public function applicants() {
        $applicants = Application::all();

        return view('admin.applicants', [
            'applicants' => $applicants
        ]);
    }

    public function clearApplicants() {
        $deleteCount = Application::query()->delete();
        return redirect()->back()->with('success', 'Applicationlist cleared - {$deleteCount}');
    }
}
