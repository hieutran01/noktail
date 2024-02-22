<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserLesson;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class UserLessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = UserLesson::all();
        return view('admin.userlessons.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.userlessons.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            UserLesson::create($request->all());
            return redirect()->route('admin.user-lessons.index')->with('success', 'User lesson created successfully.');
        } catch (\Exception $e) {
            Log::error('Error storing user lesson: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while storing user lesson.');
        } catch (QueryException $qe) {
            Log::error('Database error storing user lesson: ' . $qe->getMessage());
            return back()->withInput()->with('error', 'A database error occurred while storing user lesson.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $userLesson = UserLesson::findOrFail($id);
            return view('admin.userlessons.show', compact('userLesson'));
        } catch (\Exception $e) {
            Log::error('Error fetching user lesson: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while fetching user lesson.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $userLesson = UserLesson::findOrFail($id);
            return view('admin.userlessons.edit', compact('userLesson'));
        } catch (\Exception $e) {
            Log::error('Error fetching user lesson for editing: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while fetching user lesson for editing.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $userLesson = UserLesson::findOrFail($id);
            $userLesson->update($request->all());
            return redirect()->route('admin.user-lessons.index')->with('success', 'User lesson updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating user lesson: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while updating user lesson.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $userLesson = UserLesson::findOrFail($id);
            $userLesson->delete();
            return redirect()->route('admin.user-lessons.index')->with('success', 'User lesson deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting user lesson: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while deleting user lesson.');
        }
    }
}
