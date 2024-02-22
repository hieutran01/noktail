@extends('layouts.master')
@section('content')
<div class="main_content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="shadow bg-white rounded-md">
                    <div class="border-b flex font-semibold items-center justify-between px-7 py-5 text-base">
                        <div class="border-b-2 border-gray-400 pb-2">
                            <div class="text-2xl font-semibold mb-3 text-black">User Lesson</div>
                        </div>
                        <a href="{{ route('admin.user-lessons.create') }}"
                            class="font-medium inline-block text-white bg-blue-400 hover:bg-blue-600 text-lg py-2 px-4 rounded-md">
                            <i class="fas fa-plus-circle mr-2"></i> Thêm mới
                        </a>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="table-auto">
                            <thead>
                                <tr class="bg-gray-400 text-white">
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">user_id</th>
                                    <th class="px-4 py-2">lessonpart_id</th>
                                    <th class="px-4 py-2">course_id</th>
                                    <th class="px-4 py-2">error</th>
                                    <th class="px-4 py-2">wpm</th>
                                    <th class="px-4 py-2">accuracy</th>
                                    <th class="px-4 py-2">totalduration</th>
                                    <th class="px-4 py-2">cdatetimestamp</th>
                                    <th class="px-4 py-2">cdate</th>
                                    <th class="px-4 py-2">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($items as $item)
                                <tr class="text-gray-700">
                                    <td class="border px-4 py-2">{{ $item->id }}</td>
                                    <td class="border px-4 py-2">{{ $item->user_id }}</td>
                                    <td class="border px-4 py-2">{{ $item->lessonpart_id }}</td>
                                    <td class="border px-4 py-2">{{ $item->course_id }}</td>
                                    <td class="border px-4 py-2">{{ $item->error }}</td>
                                    <td class="border px-4 py-2">{{ $item->wpm }}</td>
                                    <td class="border px-4 py-2">{{ $item->accuracy }}</td>
                                    <td class="border px-4 py-2">{{ $item->totalduration }}</td>
                                    <td class="border px-4 py-2">{{ $item->cdatetimestamp }}</td>
                                    <td class="border px-4 py-2">{{ $item->cdate }}</td>
                                    <td class="border px-4 py-2">
                                        <div class="flex">
                                            <a href="{{ route('admin.user-lessons.edit', $item->id) }}"
                                                class="inline-block bg-gray-300 rounded-full p-2 mr-2">
                                                <i class="fas fa-edit text-gray-700"></i>
                                            </a>

                                            <form id="delete-form-{{ $item->id }}"
                                               action="{{ route('admin.user-lessons.destroy', $item->id) }}"
                                                method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this email template?');"
                                                    class="inline-block bg-gray-300 rounded-full p-2 mr-2"><i
                                                        class="fas fa-trash-alt text-gray-700"></i></button>
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
    </div>
</div>
@endsection