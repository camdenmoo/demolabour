<x-layout>
    
    @include('partials._hero')

    <header class="content-header">
        <div class="container">
            <h1 class="text-center">Get involved with events at the Labour Party!</h1>
        </div>
    </header>

    <section id="homepage" class="content-section">
        <div class="container">
            <div class="row">
                @foreach($event_categories as $event_category)

                    <div class="col-4">
                        <a href="/events/{{$event_category->slug}}" class="no-underline">
                            <div class="badge-card" style="background: {{$event_category->bg_color}}">
                                <h3>{{$event_category->name}}</h3>
                            </div>
                        </a>
                    </div>


                @endforeach
            </div>

        </div>
    </section>

</x-layout>

