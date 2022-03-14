<x-guestLayout>
    <div class="grid grid-cols-5 gap-3">
        @foreach ($stories as $story)
            <x-story :story="$story"/>
        @endforeach
    </div>
</x-guestLayout>