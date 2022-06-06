{{-- @if(session()->has('message'))
    <div class="container">
        <div 
            x-data="{show: true}" 
            x-init="setTimeout(() => show = false, 1500)" 
            x-show="show" 
            class="flash-message"
            x-show="open"
        >
            <p>
                {{session('message')}}
            </p>
        </div>
    </div>
@endif --}}