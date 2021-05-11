{{-- Footer --}}

<div class="footer bg-dark text-white py-4 d-flex flex-lg-column {{ Metronic::printClasses('footer', false) }}" id="kt_footer">
    {{-- Container --}}
    <div class="{{ Metronic::printClasses('footer-container', false) }} d-flex flex-column flex-md-row align-items-center justify-content-between">
        {{-- Copyright --}}
        <div class="text-white order-2 order-md-1">
            <span class="font-weight-bold mr-2">{{ date("Y") }} &copy;</span>
            <a href="https://keenthemes.com/metronic" target="_blank" class="text-white text-hover-primary">{{env("APP_NAME")}}</a>
        </div>

        
    </div>
</div>
