<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{URL::asset('js/toastr.js')}}"></script>
<link rel="stylesheet" type="text/css" 
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
    <script>
        toastr.options =
          {
              "closeButton" : true,
              "progressBar" : true
          }
                  toastr.error("{{$error }}");
        </script>
    @endforeach
@endif


@if(Session::has('error'))
<script>
    toastr.options =
      {
          "closeButton" : true,
          "progressBar" : true
      }
              toastr.error("{{ session('error') }}");
    </script>



@endif

@if(Session::has('success'))

<script>
toastr.options =
  {
  	"closeButton" : true,
  	"progressBar" : true
  }
  		toastr.success("{{ session('success') }}");
</script>
@endif