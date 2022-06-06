<x-layout>
    
    <x-content-header header_title="Create a new event">
        <h4>Page coming soon.</h4>
    </x-content-header>
    
    <section id="events" class="content-section">
        <div class="container">

            
            
            {{-- <div class="form-card">

                <form method="POST" action="#">
                    @csrf
                        <div class="mb-4">
                            <label for="event_category_id">Event category</label>
                            <select class="form-select" id="event_category_id" name="event_category_id" x-on:change="alert('sd')">
                                <option disabled selected>Select an event category</option>
                                @foreach($event_categories as $event_category)
                                    <option value="{{$event_category->id}}">{{$event_category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="event_type">Event type</label>
                            <select class="form-select" id="event_type_id" name="event_type_id">
                                <option disabled selected>Select an event type</option>
                                @foreach($event_types as $event_type)
                                    <option parent-id="{{$event_type->event_category_id}}" value="{{$event_type->id}}">{{$event_type->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="caption">Caption</label>
                            <textarea class="form-control" id="caption" name="caption" placeholder="Caption"></textarea>
                        </div>
                    
                        <div class="mb-4">
                            <label for="description">Full description</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Full description"></textarea>
                        </div>


                        <div class="mb-4">
                            <label for="country_id">Country</label>
                            <select name="country_id" class="form-control">
                                <option value="">Select a country</option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <label for="region_id">Region</label>
                            <select name="region_id" class="form-control">
                                <option value="">Select a region</option>
                            </select>
                        </div>


                        <div class="mb-4">
                            <label for="county_id">County</label>
                            <select name="county_id" class="form-control">
                                <option value="">Select a county</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="constituency_id">Constituency</label>
                            <select name="constituency_id" class="form-control">
                                <option value="">Select a constituency</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label for="venue">Venue</label>
                            <input type="text" class="form-control" id="venue" name="venue" placeholder="Venue">
                        </div>
                        
                        <div class="mb-4">
                            <label for="location">Location</label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Location">
                        </div>

                        <div class="mb-4">
                            <label for="address_line_one">Address line one</label>
                            <input type="text" class="form-control" id="address_line_one" name="address_line_one" placeholder="Address line one">
                        </div>

                        <div class="mb-4">
                            <label for="address_line_two">Address line two</label>
                            <input type="text" class="form-control" id="address_line_two" name="address_line_two" placeholder="Address line two">
                        </div>

                        <div class="mb-4">
                            <label for="city_town">Town/City</label>
                            <input type="text" class="form-control" id="city_town" name="city_town" placeholder="Town/City">
                        </div>

                        <div class="mb-4">
                            <label for="postcode">Postcode</label>
                            <input type="text" class="form-control" id="postcode" name="postcode" placeholder="Postcode">
                        </div>


                        <div class="mb-4">
                            <button type="submit" class="btn btn-danger">Create & publish event</button>
                        </div>

                </form> --}}
 

        </div>
    </section>
</x-layout>

