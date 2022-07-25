<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Blog API Laravel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('category.index') }}" class="btn btn-primary w-full mb-5">Xem danh mục bài viết</a>
                    <a href="{{ route('category.create') }}" class="btn btn-primary w-full mb-5">Thêm danh mục bài viết</a>
                    <a href="{{ route('post.create') }}" class="btn btn-success w-full mb-5">Thêm bài viết</a>
                    
                </div>

                
            </div>
        </div>
    </div>
</x-app-layout>
