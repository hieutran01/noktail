@extends('layouts.master')

@section('content')
<div class="main_content">
    <div class="container">
        <div class="max-w-3xl mx-auto">
            <div class="shadow bg-white rounded-md">
                <h3 class="border-b flex font-semibold items-center justify-between px-7 py-5 text-base"> Edit Email
                    Template <a href="#" class="font-medium inline-block text-blue-500 text-sm hover:underline">already
                        have an account</a> </h3>
                <div class="lg:p-8 p-5">
                    <form action="{{ route('admin.email-templates.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-6">
                                <label for="configkey" class="text-sm font-medium">Config Key</label>
                                <input type="text" name="configkey" class="with-border form-control" id="configkey"
                                    value="{{ old('configkey', $item->configkey) }}">
                                @error('configkey')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="value" class="text-sm font-medium">Value</label>
                                <input type="text" name="value" class="with-border form-control" id="value"
                                    value="{{ old('value', $item->value) }}">
                                @error('value')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="type_name" class="text-sm font-medium">Type Name</label>
                                <input type="text" name="type_name" class="with-border form-control" id="type_name"
                                    value="{{ old('type_name', $item->type_name) }}">
                                @error('type_name')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="type_slug" class="text-sm font-medium">Type Slug</label>
                                <input type="text" name="type_slug" class="with-border form-control" id="type_slug"
                                    value="{{ old('type_slug', $item->type_slug) }}">
                                @error('type_slug')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="title" class="text-sm font-medium">Title</label>
                                <input type="text" name="title" class="with-border form-control" id="title"
                                    value="{{ old('title', $item->title) }}">
                                @error('title')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="email_subject" class="text-sm font-medium">Email Subject</label>
                                <input type="text" name="email_subject" class="with-border form-control"
                                    id="email_subject" value="{{ old('email_subject', $item->email_subject) }}">
                                @error('email_subject')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div>
                            <label for="description" class="text-sm font-medium">Description</label>
                            <textarea name="description" class="with-border form-control" id="description"
                                rows="3">{{ old('description', $item->description) }}</textarea>
                            @error('description')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="email_body" class="text-sm font-medium">Email Body</label>
                            <textarea name="email_body" class="with-border form-control" id="email_body"
                                rows="5">{{ old('email_body', $item->email_body) }}</textarea>
                            @error('email_body')
                            <p style="color:red">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
                            <a class="bg-gray-200 flex font-medium items-center justify-center py-3 rounded-md"
                                href="{{ route('admin.email-templates') }}">
                                <i class="icon-feather-chevron-left mr-1"></i>
                                <span class="md:block hidden">Back to Cart</span><span
                                    class="md:hidden block">Back</span>
                            </a>
                            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection