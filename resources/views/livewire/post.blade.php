<?php

use App\Models\Post;
use function Livewire\Volt\{state, usesFileUploads, computed};
usesFileUploads();
state([
    'title' => '',
    'body' => '',
    'image' => null,
]);

$posts = computed(fn() => Post::all());

$storepost = function () {
    $this->validate([
        'image' => 'required|image|max:1024',
        'title' => 'required|max:1024',
        'body' => 'required|max:1024',
    ]);
    Post::create([
        'title' => $this->title,
        'body' => $this->body,
        'image' => $this->image->store(public_path('images'), $this->image->getClientOriginalExtension()),
    ]);
    $this->title = '';
    $this->body = '';
    $this->image = null;
};

$deletepost = function (Post $post) {
    Storage::delete($post->image);
    $post->delete();
};

?>

<div>
    <div class="container mt-5 p-5">
        <form wire:submit="storepost" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3">
                <label for="title">Title</label>
                <input type="text" id="title" class="form-control" wire:model="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="image">image</label>
                <input wire:model="image" type="file" id="image" class="form-control">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="body">body</label>
                <textarea id="body" class="form-control" wire:model="body"></textarea>
                @error('body')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <button class="btn btn-sm btn-primary" type="submit">Save</button>
            </div>
        </form>
    </div>
    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($this->posts as $post)
                    <tr>
                        <td><img src="{{ storage_path($post->image) }}" alt="{{ $post->title }}"></td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        <td><button class="btn btn-danger btn-sm"
                                wire:click="deletepost({{ $post }})">Delete</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
