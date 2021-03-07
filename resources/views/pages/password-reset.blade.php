{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Change Password
                    {{-- <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div> --}}
                </h3>
            </div>
            <div class="container p-5">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4">
                        <form method="POST" action="/password-reset">
                            @csrf
                            <div class="form-group">
                                <label for="newPassword">New Password</label>
                                <input  placeholder="new password" class="form-control" type="password" name="newPassword" id="newPassword">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input class="form-control"  type="password" placeholder="confirm password" name="confirmPassword" id="confirmPassword">
                            </div>
                            <span id="message" class="d-block mb-2"></span>
                            <div class="text-center">
                                <input type="submit" id="submit"  value="Reset" class="btn btn-primary">
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
        $('#newPassword, #confirmPassword').on('input', function () {
    if($('#newPassword').val() !== $('#confirmPassword').val()){
      $('#message').html('Password Does Not Matched').css('color', 'red');
      document.getElementById("submit").disabled = true;
    }else if ($('#newPassword').val() == $('#confirmPassword').val()) {
      $('#message').html('Password Matched').css('color', 'green');
      document.getElementById("submit").disabled = false;
    }
  });
    </script>

@endsection
