<x-layout>
    <x-content-header header_title="Events" />
    <section id="events" class="content-section">

        @foreach($events as $event)
            <x-event-card :events="$events">
                <div class="row">
                    <div class="col-4 map-box">
                        <iframe loading="lazy" allowfullscreen
                            src="https://www.google.com/maps/embed/v1/place?q=Halford%20Lane%2FPenny%20Park%20Lane%2C%20CV6%202GT&key=AIzaSyD0B0b8W6N51vAbwtEVv1TkBFvaqRNQDAs"></iframe>
                    </div>
                    <div class="col-8">
                        <div class="row">
                            <div class="col-6 mb-3">
                                <div class="event-indexes event-category">{{$event->event_category->name}}</div>
                                <div class="event-indexes event-type">{{$event->event_type->name}}</div>
                            </div>
                            <div class="col-6">
                                <div class="distance float-end">Show distance here</div>
                            </div>
                            <div class="col-12 mb-2">
                                <div class="countdown">
                                    @php
                                    $to = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', now());
                                    $from = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $event->start_date);
                                    $diff_in_days = $to->diffInDays($from);
                                    echo "in ".$diff_in_days." days";
                                    @endphp
                                </div>
                            </div>
                            <div class="col-12 description">
                                <h3 class="event-title">{{$event->event_type->name}} in {{$event->city_town}}</h3>
                                {!!$event->description!!}
                            </div>
                            <div class="col-7">
                                <ul>
                                    <li><i class="fa-solid fa-calendar-days"></i> {{\Carbon\Carbon::parse($event->start_date)->format('l d F Y')}}, {{$event->start_time}} - {{$event->end_time}}</li>
                                    <li><i class="fa-solid fa-map"></i> {{$event->location}}</li>
                                </ul>
                            </div>
                            <div class="col-5">
                                <ul>
                                    <li class="event-link">
                                        <a href="#">
                                            <i class="fa-solid fa-calendar-plus"></i> Add to calendar
                                        </a>
                                    </li>
                                    <li class="event-link">
                                        <a href="#">
                                            <i class="fa-solid fa-share-nodes"></i> Share
                                        </a>
                                    </li>
                                    <li class="event-link">
                                        <a href="#">
                                            <i class="fa-solid fa-location-arrow"></i> Directions
                                        </a>
                                    </li>
                                </ul>
                                    
                            </div>
                            <hr>
                            <div class="col-12 action-buttons">
                                <button class="btn btn-danger">Contact Host <i class="fa-solid fa-user"></i></button>
                            <button class="btn btn-outline-danger">RSVP <i class="fa-solid fa-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </x-event-card>
        @endforeach
    </section>
</x-layout>