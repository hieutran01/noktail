<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmailTemplateRequest;
use App\Http\Requests\UpdateEmailTemplateRequest;
use App\Models\EmailTemplate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
class EmailTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = EmailTemplate::all();
        return view('admin.emailtemplates.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.emailtemplates.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmailTemplateRequest $request)
    {
        try {
            EmailTemplate::create($request->all());
            return redirect()->route('admin.email-templates')->with('success', 'Email template created successfully.');
        } catch (\Exception $e) {
            Log::error('Error storing email template: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while storing email template.');
        } catch (QueryException $qe) {
            Log::error('Database error storing email template: ' . $qe->getMessage());
            return back()->withInput()->with('error', 'A database error occurred while storing email template.');
        }
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $item = EmailTemplate::findOrFail($id);
            return view('admin.emailtemplates.show', compact('item'));
        } catch (\Exception $e) {
            Log::error('Error fetching email template: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while fetching email template.');
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $item = EmailTemplate::findOrFail($id);
            return view('admin.emailtemplates.edit', compact('item'));
        } catch (\Exception $e) {
            Log::error('Error fetching email template for editing: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while fetching email template for editing.');
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailTemplateRequest $request, string $id)
    {
        try {
            $item = EmailTemplate::findOrFail($id);
            $item->update($request->all());
            return redirect()->route('admin.email-templates')->with('success', 'Email template updated successfully.');
        } catch (\Exception $e) {
            Log::error('Error updating email template: ' . $e->getMessage());
            return back()->withInput()->with('error', 'An error occurred while updating email template.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $item = EmailTemplate::findOrFail($id);
            $item->delete();
            return redirect()->route('admin.email-templates')->with('success', 'Email template deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting email template: ' . $e->getMessage());
            return back()->with('error', 'An error occurred while deleting email template.');
        }
    }
}
