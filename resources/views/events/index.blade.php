<x-guestLayout>
    <x-ui.title>Listar eventos</x-ui.title>
    @foreach ($events as $event)
        <div>{{ $event->title }}</div>
        <img src="{{ asset('photos/' . $event->image ) }}"/>
        <img src="{{ url('storage/photos/'.$event->image) }}" />
        <img src="{{ url('storage/app/photos/'.$event->image) }}"  />
        <img src="{{ asset('storage/images/'.$event->image) }}" alt="" title="" /> 
        <div>{{ asset('storage/images/'.$event->image) }}</div>
    @endforeach
</x-guestLayout>