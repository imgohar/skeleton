{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Edit Role
                    {{-- <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div> --}}
                </h3>
            </div>
            <div class="container p-5">
                <div class="text-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        
{!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @php
                $i =0;
            @endphp
            <div class="row">
               <div class="col-xl-4">
                   <p>Role</p>
                   <p>Team</p>
                </div>
                <div class="col-xl-8">
                    @foreach($permission as $value)
                    @php
                        $i++;
                    @endphp
                    <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                    {{ $value->name }}</label>
                    @if ($i == 4 || $i == 8 || $i == 12 || $i == 16)
                        <br>
                    @endif
                
                @endforeach
                </div> 
            </div>
            
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


