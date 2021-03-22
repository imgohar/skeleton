{{-- Footer --}}

<div class="footer bg-dark text-white py-4 d-flex flex-lg-column {{ Metronic::printClasses('footer', false) }}" id="kt_footer">
    {{-- Container --}}
    <div class="{{ Metronic::printClasses('footer-container', false) }} d-flex flex-column flex-md-row align-items-center justify-content-between">
        {{-- Copyright --}}
        <div class="text-white order-2 order-md-1">
            <span class="font-weight-bold mr-2">{{ date("Y") }} &copy;</span>
            <a href="https://keenthemes.com/metronic" target="_blank" class="text-white text-hover-primary">DarkCloud.io</a>
        </div>

        {{-- Nav --}}
        <div class="nav nav-dark order-1 order-md-2">
            <a href="https://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">About</a>
            <a href="https://keenthemes.com/metronic" target="_blank" class="nav-link px-3">Team</a>
            <a href="https://keenthemes.com/metronic" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
        </div>
    </div>
</div>
