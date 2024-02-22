@extends('layouts.master')
@section('content')
<div class="main_content">
    <div class="container-fluid">
        <div class="shadow bg-white rounded-md">
            <div class="border-b flex font-semibold items-center justify-between px-7 py-5 text-base">
                <div class="border-b-2 border-gray-400 pb-2">
                    <div class="text-2xl font-semibold mb-3 text-black">Post</div>
                </div>
                <a href="{{ route('admin.posts.create') }}"
                    class="font-medium inline-block text-white bg-blue-400 hover:bg-blue-600 text-lg py-2 px-4 rounded-md">
                    <i class="fas fa-plus-circle mr-2"></i> Thêm mới
                </a>
            </div>
            <div class="overflow-x-auto table-responsive">
                <table class="table-auto">
                    <thead>
                        <tr class="bg-gray-400 text-white">
                            <th class="px-4 py-2">ID</th>
                            <th class="px-4 py-2">post_title</th>
                            <th class="px-4 py-2">post_date</th>
                            <th class="px-4 py-2">ping_status</th>
                            <th class="px-4 py-2">comment_status</th>
                            <th class="px-4 py-2">post_name </th>
                            <th class="px-4 py-2">post_type</th>
                            <th class="px-4 py-2">comment_count</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($items as $item)
                        <tr class="text-gray-700">
                            <td class="border px-4 py-2">{{ $item->ID }}</td>
                            <td class="border px-4 py-2">{{ $item->post_title }}</td>
                            <td class="border px-4 py-2">{{ $item->post_date }}</td>
                            <td class="border px-4 py-2">{{ $item->ping_status }}</td>
                            <td class="border px-4 py-2">{{ $item->comment_status }}</td>
                            <td class="border px-4 py-2">{{ $item->post_name}}</td>
                            <td class="border px-4 py-2">{{ $item->post_type }}</td>
                            <td class="border px-4 py-2">{{ $item->comment_count }}</td>
                            <td class="border px-4 py-2">
                                <div class="flex">
                                    <a href="{{ route('admin.posts.edit', $item->ID) }}"
                                        class="inline-block bg-gray-300 rounded-full p-2 mr-2">
                                        <i class="fas fa-edit text-gray-700"></i>
                                    </a>
                                    <form id="delete-form-{{ $item->ID }}"
                                        action="{{ route('admin.posts.destroy', $item->ID) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            onclick="return confirm('Are you sure you want to delete this post?');"
                                            class="inline-block bg-gray-300 rounded-full p-2 mr-2">
                                            <i class="fas fa-trash-alt text-gray-700"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection