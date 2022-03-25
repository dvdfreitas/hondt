<x-guestLayout>
    <x-ui.title>Listar eventos</x-ui.title>
    @foreach ($events as $event)
        <div>{{ $event }}</div>
        <img src="{{ Storage::get('photos/' . $event->image ) }}"/>
    @endforeach
</x-guestLayout>