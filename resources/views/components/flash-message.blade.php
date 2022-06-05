{{-- @if(session()->has('message'))
    <div 
        x-data="{show: true}" 
        x-init="setTimeout(() => show = false, 1500)" 
        x-show="show" 
        class="flash-message"
        x-show="open"
        x-transition:enter="transition ease-out duration-2000"
        x-transition:enter-start="opacity-0 scale-90"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-2000"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-90"
    >
        <p>
            {{session('message')}}
        </p>
    </div>
@endif --}}