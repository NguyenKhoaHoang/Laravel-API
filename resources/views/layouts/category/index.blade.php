<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Danh mục bài viết') }}
        </h2>
    </x-slot>

    @if (Session::has('success'))
        <div class="alert alert-success">
            <p>{{ Session::get('success') }}</p>
        </div>
        
    @endif

    @if (Session::has('failure'))
        <div class="alert alert-danger">
            <p>{{ Session::get('failure') }}</p>
        </div>
    @endif

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Tiêu đề danh mục</th>
                                <th scope="col">Quản lý</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($category as $categoryItem)
                                <tr>
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $categoryItem->title }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('category.destroy', $categoryItem->id) }}">
                                            @method('DELETE')
                                            @csrf
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm mt-2 mb-2 bg-red-500">
                                        </form>

                                        <a class="btn btn-success btn-sm mt-2 mb-2 bg-green-500" href="{{ route('category.show', $categoryItem->id) }}">Edit</a>
                                            

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
