@extends('layouts.master')

@section('content')
<div class="main_content">
    <div class="container">
        <div class="max-w-3xl mx-auto">
            <div class="shadow bg-white rounded-md">
                <h3 class="border-b flex font-semibold items-center justify-between px-7 py-5 text-base"> Create Post
                    <a href="#" class="font-medium inline-block text-blue-500 text-sm hover:underline">already
                        have an account</a> </h3>
                <div class="lg:p-8 p-5">
                    <form action="{{ route('admin.posts.store') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-6">
                                <label for="post_author" class="text-sm font-medium">Post Author</label>
                                <input type="text" class="with-border form-control" name="post_author" value="{{ old('post_author') }}">
                                @error('post_author')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-6">
                                <label for="post_date" class="text-sm font-medium">Post Date</label>
                                <input type="text" name="post_date" class="with-border form-control" id="post_date" value="{{ old('post_date') }}">
                                @error('post_date')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="post_content" class="text-sm font-medium">Post Content</label>
                                <textarea name="post_content" class="with-border form-control" id="post_content" rows="5">{{ old('post_content') }}</textarea>
                                @error('post_content')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="post_title" class="text-sm font-medium">Post Title</label>
                                <input type="text" name="post_title" class="with-border form-control" id="post_title" value="{{ old('post_title') }}">
                                @error('post_title')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="post_excerpt" class="text-sm font-medium">Post Excerpt</label>
                                <textarea name="post_excerpt" class="with-border form-control" id="post_excerpt" rows="3">{{ old('post_excerpt') }}</textarea>
                                @error('post_excerpt')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-12">
                                <label for="post_status" class="text-sm font-medium">Post Status</label>
                                <input type="text" name="post_status" class="with-border form-control" id="post_status" value="{{ old('post_status') }}">
                                @error('post_status')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="comment_status" class="text-sm font-medium">Comment Status</label>
                                <input type="text" name="comment_status" class="with-border form-control" id="comment_status" value="{{ old('comment_status') }}">
                                @error('comment_status')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="ping_status" class="text-sm font-medium">Ping Status</label>
                                <input type="text" name="ping_status" class="with-border form-control" id="ping_status" value="{{ old('ping_status') }}">
                                @error('ping_status')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="post_password" class="text-sm font-medium">Post Password</label>
                                <input type="text" name="post_password" class="with-border form-control" id="post_password" value="{{ old('post_password') }}">
                                @error('post_password')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="post_name" class="text-sm font-medium">Post Name</label>
                                <input type="text" name="post_name" class="with-border form-control" id="post_name" value="{{ old('post_name') }}">
                                @error('post_name')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="to_ping" class="text-sm font-medium">To Ping</label>
                                <input type="text" name="to_ping" class="with-border form-control" id="to_ping" value="{{ old('to_ping') }}">
                                @error('to_ping')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="pinged" class="text-sm font-medium">Pinged</label>
                                <input type="text" name="pinged" class="with-border form-control" id="pinged" value="{{ old('pinged') }}">
                                @error('pinged')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="post_modified" class="text-sm font-medium">Post Modified</label>
                                <input type="text" name="post_modified" class="with-border form-control" id="post_modified" value="{{ old('post_modified') }}">
                                @error('post_modified')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="post_modified_gmt" class="text-sm font-medium">Post Modified GMT</label>
                                <input type="text" name="post_modified_gmt" class="with-border form-control" id="post_modified_gmt" value="{{ old('post_modified_gmt') }}">
                                @error('post_modified_gmt')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="post_content_filtered" class="text-sm font-medium">Post Content Filtered</label>
                                <input type="text" name="post_content_filtered" class="with-border form-control" id="post_content_filtered" value="{{ old('post_content_filtered') }}">
                                @error('post_content_filtered')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="post_parent" class="text-sm font-medium">Post Parent</label>
                                <input type="text" name="post_parent" class="with-border form-control" id="post_parent" value="{{ old('post_parent') }}">
                                @error('post_parent')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="guid" class="text-sm font-medium">Guid</label>
                                <input type="text" name="guid" class="with-border form-control" id="guid" value="{{ old('guid') }}">
                                @error('guid')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="menu_order" class="text-sm font-medium">Menu Order</label>
                                <input type="text" name="menu_order" class="with-border form-control" id="menu_order" value="{{ old('menu_order') }}">
                                @error('menu_order')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="post_type" class="text-sm font-medium">Post Type</label>
                                <input type="text" name="post_type" class="with-border form-control" id="post_type" value="{{ old('post_type') }}">
                                @error('post_type')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-6">
                                <label for="post_mime_type" class="text-sm font-medium">Post Mime Type</label>
                                <input type="text" name="post_mime_type" class="with-border form-control" id="post_mime_type" value="{{ old('post_mime_type') }}">
                                @error('post_mime_type')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <label for="comment_count" class="text-sm font-medium">Comment Count</label>
                                <input type="text" name="comment_count" class="with-border form-control" id="comment_count" value="{{ old('comment_count') }}">
                                @error('comment_count')
                                <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="grid grid-cols-2 md:gap-6 gap-3 md:mt-10 mt-5">
                            <a class="bg-gray-200 flex font-medium items-center justify-center py-3 rounded-md"
                                href="{{ route('admin.posts') }}">
                                <i class="icon-feather-chevron-left mr-1"></i>
                                <span class="md:block hidden">Back to Posts</span><span
                                    class="md:hidden block">Back</span>
                            </a>
                            <button type="submit" class="btn btn-primary bg-blue-500 hover:bg-blue-700">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
