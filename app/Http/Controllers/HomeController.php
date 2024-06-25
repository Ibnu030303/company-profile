<?php

namespace App\Http\Controllers;

use App\Models\accordion_questions;
use App\Models\Article;
use App\Models\Course;
use App\Models\Feature;
use App\Models\Price;
use App\Models\Profile;
use App\Models\Program;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $articles = Article::active()->get();
        $courses = Course::all();
        $profiles = Profile::all();
        $features = Feature::all();
        $services = Service::all();
        $questions = accordion_questions::active()->get();
        $prices = Price::all();
        $defaultCourseId = 1;
        $course = Course::find($defaultCourseId);
        $programs = $course ? $course->programs : collect();

        return view('welcome', compact('courses', 'articles', 'defaultCourseId', 'programs', 'profiles', 'services', 'features', 'questions', 'prices'));
    }

    public function fetchPrograms($courseId)
    {
        $programs = Program::with('fees')->where('course_id', $courseId)->get();
        return response()->json($programs);
    }

    public function showAllCourses()
    
    {
        $profiles = Profile::all();
        $courses = Course::all();
        return view('course.show', compact('courses', 'profiles'));
    }
    
    public function programShow(Program $program)
    {
        $program = Program::with('fees')->where('slug', $program->slug)->firstOrFail();
        return view('programs.show', compact('program'));
    }

    public function showArticle(Article $article)
    {
        return view('articles.show', compact('article'));
    }

}
