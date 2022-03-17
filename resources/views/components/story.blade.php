@props(['story'])
<div class="border bg-red-400 p-2 text-white hover:bg-red-500">
    <div class="font-bold">{{ $story->title }}</div>
    <div>{{ $story->subtitle }}</div>
    @foreach ($story->categories as $category)
        <div class="bg-{{ $category->color }}-400 p-4 m-2">{{ $category->name }}</div>
        <div class="p-4 m-2">{{ $category->name }}</div>
    @endforeach
</div>