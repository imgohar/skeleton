{{-- Content --}}
@if (config('layout.content.extended'))
    @yield('content')
@else
    <div class="d-flex flex-column-fluid">
        <div class="{{ Metronic::printClasses('content-container', false) }}">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    
                    @include('includes.alerts')
                </div>
            </div>
            @yield('content')
        </div>
    </div>
@endif
