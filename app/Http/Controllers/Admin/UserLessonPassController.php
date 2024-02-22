<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserLessonPass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class UserLessonPassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Lấy danh sách các User Lesson Pass và trả về view hiển thị
        $items = UserLessonPass::all();
        return view('admin.userlessonpasses.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Trả về view để tạo mới User Lesson Pass
        return view('admin.userlessonpasses.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Xử lý lưu trữ dữ liệu mới vào cơ sở dữ liệu
        try {
            UserLessonPass::create($request->all());
            return redirect()->route('admin.user-lesson-passes.index')->with('success', 'User Lesson Pass created successfully.');
        } catch (\Exception $e) {
            Log::error('Error storing user lesson pass: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while storing user lesson pass.');
        } catch (QueryException $qe) {
            Log::error('Database error storing user lesson pass: ' . $qe->getMessage());
            return back()->withInput()->with('error', 'A database error occurred while storing user lesson pass.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Hiển thị thông tin chi tiết của một User Lesson Pass
        try {
            $item = UserLessonPass::findOrFail($id);
            return view('admin.userlessonpasses.show', compact('item'));
        } catch (\Exception $e) {
            Log::error('Error fetching user lesson pass: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while fetching user lesson pass.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Trả về view để chỉnh sửa thông tin của một User Lesson Pass
        try {
            $item = UserLessonPass::findOrFail($id);
            return view('admin.userlessonpasses.edit', compact('item'));
        } catch (\Exception $e) {
            Log::error('Error fetching user lesson pass for editing: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while fetching user lesson pass for editing.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Xử lý cập nhật thông tin của một User Lesson Pass
        try {
            $item = UserLessonPass::findOrFail($id);
            $item->update($request->all());
            return redirect()->route('admin.user-lesson-passes.index')->with('success', 'User Lesson Pass updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating user lesson pass: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while updating user lesson pass.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Xóa một User Lesson Pass khỏi cơ sở dữ liệu
        try {
            $item = UserLessonPass::findOrFail($id);
            $item->delete();
            return redirect()->route('admin.user-lesson-passes.index')->with('success', 'User Lesson Pass deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting user lesson pass: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while deleting user lesson pass.');
        }
    }
}
