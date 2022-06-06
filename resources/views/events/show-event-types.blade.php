<x-layout>
    <x-content-header header_title="Event Category: {{$event_category->name}}" />
    <section id="events" class="content-section">
        <div class="container">
            <div class="row">
                @foreach($event_types as $event_type)

                    <div class="col-4">
                        <a href="/events/{{$event_category->slug}}/{{$event_type->slug}}" class="no-underline">
                            <div class="badge-card" style="background: {{$event_type->bg_color}}">
                                <div class="badge-card-content">
                                    <h3>{{$event_type->name}}</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>