{{-- Extends layout --}}

@extends('layout.default')

{{-- Content --}}
@section('content')

    <div class="card card-custom">
        
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">All Users
                    {{-- <div class="text-muted pt-2 font-size-sm">Datatable initialized from HTML table</div> --}}
                </h3>
            </div>
        </div>
        <div class="card-body">
            <!--begin: Search Form-->
            <!--begin::Search Form-->
            <div class="mb-7">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-xl-8">
                        <div class="row align-items-center">
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="input-icon">
                                    <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query"/>
                                    <span>
                                                                    <i class="flaticon2-search-1 text-muted"></i>
                                                                </span>
                                </div>
                            </div>
                            <div class="col-md-4 my-2 my-md-0">
                                <div class="d-flex align-items-center">
                                    <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                    <select class="form-control" id="kt_datatable_search_status">
                                        <option value="">All</option>
                                        <option value="1">Customers</option>
                                        <option value="2">Resellers</option>
                                        
                                    </select>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    {{-- <div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">
                        <a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>
                    </div> --}}
                </div>
            </div>
            <!--end::Search Form-->
            <!--end: Search Form-->
            <!--begin: Datatable-->
            <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                <thead>
                <tr>
                    <th title="Field #1">First Name</th>
                    <th title="Field #2">Last Name</th>
                    <th title="Field #3">Email</th>
                    <th title="Field #4">Phone</th>
                    <th title="Field #5">Country</th>
                    <th title="Field #6">Options</th>
                    <th title="Field #7">Status</th>
                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        @if ($user->role == 'customer')
                            <?php $u = 1; ?>
                        @else  
                            <?php $u = 2; ?>
                        @endif
                        
                        <td>{{$user->fname}}</td>
                        <td>{{$user->lname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone}}</td>
                        <td>{{$user->country}}</td>
                        
                        <td class="card-toolbar">
                            <span class="dropdown dropdown-inline">
                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                    {{-- Navigation--}}
                                    <ul class="navi navi-hover">
                                        <li class="navi-item">
                                            <a href="/admin/user/view/{{$user->id}}" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon-eye"></i></span>
                                                <span class="navi-text">View</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="/admin/user/edit/{{$user->id}}" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon-edit"></i></span>
                                                <span class="navi-text">Edit</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a onclick="return confirm('Are you sure?')" href="/admin/user/delete/{{$user->id}}" class="navi-link">
                                                <span class="navi-icon"><i class="flaticon-delete"></i></span>
                                                <span class="navi-text">Delete</span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </span>
                        </td>
                        <td align="right">{{$u}}</td>
                    </tr>
                    @endforeach
                
                </tbody>
            </table>
            
            <!--end: Datatable-->
        </div>
    </div>

@endsection

{{-- Styles Section --}}
@section('styles')

@endsection

{{-- Scripts Section --}}
@section('scripts')

    <script src="{{ asset('js/pages/crud/ktdatatable/base/html-table.js') }}" type="text/javascript"></script>
    
    <script src="{{ asset('js/pages/widgets.js') }}" type="text/javascript"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script>
        
        $('.dropdown-toggle').dropdown();
    
    </script>
@endsection
