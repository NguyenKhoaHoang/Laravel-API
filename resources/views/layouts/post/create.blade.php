<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Thêm bài viết') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <form autocomplete="off" action="{{ route('category.store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Tiêu đề</label>
                            <input placeholder="Tiêu đề" type="text" class="form-control" name="title">

                            <label for="image">Hình ảnh</label>
                            <input type="file" class="form-control" name="image">

                            <label for="short_desc">Mô tả ngắn</label>
                            <textarea id="ckeditor_shortdesc" style="resize: none" placeholder="Mô tả ngắn..." class="form-control" name="short_desc" rows="5"></textarea>

                            <label for="desc">Nội dung</label>
                            <textarea id="ckeditor_desc" style="resize: none" placeholder="Nội dung" name="desc" class="form-control" rows="10"></textarea>

                            <label for="desc">Danh mục bài viết</label>
                            <select class="form-control" name="post_category_id">
                                @foreach ($category as $key => $cate)
                                    <option value="{{ $cate->id }}">{{ $cate->title }}</option>
                                @endforeach
                                
                            </select>

                            <button name="themdanhmuc" class="btn btn-primary mt-2">Thêm bài viết</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
