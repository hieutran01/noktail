<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WpPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class WpPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = WpPost::where('post_type', 'course')
                       ->whereIn('post_status', ['publish', 'draft', 'trash'])
                       ->get();
    
        return view('admin.wpposts.index', compact('items'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.wpposts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            WpPost::create($request->all());
            return redirect()->route('admin.wp-posts.index')->with('success', 'Post created successfully.');
        } catch (\Exception $e) {
            Log::error('Error storing post: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while storing post.');
        } catch (QueryException $qe) {
            Log::error('Database error storing post: ' . $qe->getMessage());
            return back()->withInput()->with('error', 'A database error occurred while storing post.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        try {
            $post = WpPost::findOrFail($id);
            return view('admin.wpposts.show', compact('post'));
        } catch (\Exception $e) {
            Log::error('Error fetching post: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while fetching post.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try {
            $post = WpPost::findOrFail($id);
            return view('admin.wpposts.edit', compact('post'));
        } catch (\Exception $e) {
            Log::error('Error fetching post for editing: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while fetching post for editing.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $post = WpPost::findOrFail($id);
            $post->update($request->all());
            return redirect()->route('admin.wp-posts.index')->with('success', 'Post updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating post: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while updating post.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $post = WpPost::findOrFail($id);
            $post->delete();
            return redirect()->route('admin.wp-posts.index')->with('success', 'Post deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting post: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while deleting post.');
        }
    }
}
