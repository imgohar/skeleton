{{-- Extends layout --}}
@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Show Role
                    {{-- <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div> --}}
                </h3>
                
            </div>
            <div class="container p-5">
                <div class="text-right">
                    <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                </div>
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $role->name }}
                </div>
                <div>
                    <div>
                        <div class="form-group">
                            <strong>Permissions:</strong>
                            @if(!empty($rolePermissions))
                                @foreach($rolePermissions as $v)
                                    <label class="">{{ $v->name }},</label>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection


