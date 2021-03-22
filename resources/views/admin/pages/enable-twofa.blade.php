{{-- Extends layout --}}
@extends('admin.layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Enable 2 fa
                    {{-- <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div> --}}
                </h3>
            </div>
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <form method="POST" action="/enable-2fa">
                            @csrf
                            
                            <div class="form-group row text-center">
                               <div class="col-lg-12 col-md-12 col-sm-12">
                                 <input name="enable" data-switch="true" type="checkbox" <?php echo ($is_2fa==0) ? '' : 'checked="checked"' ?> />
                                </div>
                               </div>
                            <div class="text-center">
                                <input type="submit" id="submit"  value="Update" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


{{-- Scripts Section --}}
@section('scripts')
    {{-- vendors --}}
    {{-- <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script> --}}

    {{-- page scripts --}}
    {{-- <script src="{{ asset('js/pages/crud/datatables/basic/basic.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script> --}}

    <script>
        // Class definition

var KTBootstrapSwitch = function() {

// Private functions
var demos = function() {
 // minimum setup
 $('[data-switch=true]').bootstrapSwitch();
};

return {
 // public functions
 init: function() {
 demos();
 },
};
}();

jQuery(document).ready(function() {
KTBootstrapSwitch.init();
});
    </script>
  
@endsection
