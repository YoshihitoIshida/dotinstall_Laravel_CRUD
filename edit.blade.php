<x-layout>
    <x-slot:title>
        Edit post | My Laravel App
    </x-slot>
    <h1>Edit post</h1>
    <form method="post" action="{{ route('posts.update', $post) }}">
        @method('PATCH')
        @csrf

        <div>
            <label>
                Title
                <input type="text" name="title" value="{{ old('title', $post->title) }}">
            </label>
            @error('title')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>
                Body
                <textarea name="body">{{ old('body', $post->body) }}</textarea>
            </label>
            @error('body')
                <p class="error">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <button>Update</button>
        </div>
    </form>
    <p class="back-link"><a href="{{ route('posts.show', $post) }}">Back</a></p>
</x-layout>