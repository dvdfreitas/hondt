@props(['story'])
<div class="border bg-red-400 p-2 text-white hover:bg-red-500">
    <div class="font-bold">{{ $story->title }}</div>
    <div>{{ $story->subtitle }}</div>
</div>