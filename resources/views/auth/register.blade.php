@extends('layouts.app')

@section('content')
<style>
     .success-muted-note {
            color: #34bfa3 !important;
            font-weight: 600 !important;
        }

            div.ex1 {
                background: #eee;
                height: 400px;
                overflow: scroll;
}

</style>



        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />

        {{-- Fonts --}}
        {{ Metronic::getGoogleFontsInclude() }}

        {{-- Global Theme Styles (used by all pages) --}}
        @foreach(config('layout.resources.css') as $style)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($style)) : asset($style) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Layout Themes (used by all pages) --}}
        @foreach (Metronic::initThemes() as $theme)
            <link href="{{ config('layout.self.rtl') ? asset(Metronic::rtlCssPath($theme)) : asset($theme) }}" rel="stylesheet" type="text/css"/>
        @endforeach

        {{-- Includable CSS --}}
        @yield('styles')


<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
<link rel="stylesheet" href="{{URL::asset('assets/wizard-2.css')}}">
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <div class="card card-custom">
            <div class="card-body p-0">
                <!--begin: Wizard-->
                <div class="wizard wizard-2" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="false">
                    <!--begin: Wizard Nav-->
                    <div class="wizard-nav border-right py-8 px-8 py-lg-20 px-lg-10">
                        <!--begin::Wizard Step 1 Nav-->
                        <div class="wizard-steps">
                            <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <span class="svg-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24" />
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">Account Settings</h3>
                                        <div class="wizard-desc">Setup Your Account Details</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 1 Nav-->
                            <!--begin::Wizard Step 2 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <span class="svg-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Map/Compass.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M12,21 C7.02943725,21 3,16.9705627 3,12 C3,7.02943725 7.02943725,3 12,3 C16.9705627,3 21,7.02943725 21,12 C21,16.9705627 16.9705627,21 12,21 Z M14.1654881,7.35483745 L9.61055177,10.3622525 C9.47921741,10.4489666 9.39637436,10.592455 9.38694497,10.7495509 L9.05991526,16.197949 C9.04337012,16.4735952 9.25341309,16.7104632 9.52905936,16.7270083 C9.63705011,16.7334903 9.74423017,16.7047714 9.83451193,16.6451626 L14.3894482,13.6377475 C14.5207826,13.5510334 14.6036256,13.407545 14.613055,13.2504491 L14.9400847,7.80205104 C14.9566299,7.52640477 14.7465869,7.28953682 14.4709406,7.27299168 C14.3629499,7.26650974 14.2557698,7.29522855 14.1654881,7.35483745 Z" fill="#000000" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">Setup Locations</h3>
                                        <div class="wizard-desc">Choose Your Location Map</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 2 Nav-->
                            <!--begin::Wizard Step 3 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <span class="svg-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Thunder-move.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M16.3740377,19.9389434 L22.2226499,11.1660251 C22.4524142,10.8213786 22.3592838,10.3557266 22.0146373,10.1259623 C21.8914367,10.0438285 21.7466809,10 21.5986122,10 L17,10 L17,4.47708173 C17,4.06286817 16.6642136,3.72708173 16.25,3.72708173 C15.9992351,3.72708173 15.7650616,3.85240758 15.6259623,4.06105658 L9.7773501,12.8339749 C9.54758575,13.1786214 9.64071616,13.6442734 9.98536267,13.8740377 C10.1085633,13.9561715 10.2533191,14 10.4013878,14 L15,14 L15,19.5229183 C15,19.9371318 15.3357864,20.2729183 15.75,20.2729183 C16.0007649,20.2729183 16.2349384,20.1475924 16.3740377,19.9389434 Z" fill="#000000" />
                                                    <path d="M4.5,5 L9.5,5 C10.3284271,5 11,5.67157288 11,6.5 C11,7.32842712 10.3284271,8 9.5,8 L4.5,8 C3.67157288,8 3,7.32842712 3,6.5 C3,5.67157288 3.67157288,5 4.5,5 Z M4.5,17 L9.5,17 C10.3284271,17 11,17.6715729 11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L4.5,20 C3.67157288,20 3,19.3284271 3,18.5 C3,17.6715729 3.67157288,17 4.5,17 Z M2.5,11 L6.5,11 C7.32842712,11 8,11.6715729 8,12.5 C8,13.3284271 7.32842712,14 6.5,14 L2.5,14 C1.67157288,14 1,13.3284271 1,12.5 C1,11.6715729 1.67157288,11 2.5,11 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">Business Detail</h3>
                                        <div class="wizard-desc">Add your business detail</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 3 Nav-->
                            
                            <!--begin::Wizard Step 6 Nav-->
                            <div class="wizard-step" data-wizard-type="step">
                                <div class="wizard-wrapper">
                                    <div class="wizard-icon">
                                        <span class="svg-icon svg-icon-2x">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Like.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <path d="M9,10 L9,19 L10.1525987,19.3841996 C11.3761964,19.7920655 12.6575468,20 13.9473319,20 L17.5405883,20 C18.9706314,20 20.2018758,18.990621 20.4823303,17.5883484 L21.231529,13.8423552 C21.5564648,12.217676 20.5028146,10.6372006 18.8781353,10.3122648 C18.6189212,10.260422 18.353992,10.2430672 18.0902299,10.2606513 L14.5,10.5 L14.8641964,6.49383981 C14.9326895,5.74041495 14.3774427,5.07411874 13.6240179,5.00562558 C13.5827848,5.00187712 13.5414031,5 13.5,5 L13.5,5 C12.5694044,5 11.7070439,5.48826024 11.2282564,6.28623939 L9,10 Z" fill="#000000" />
                                                    <rect fill="#000000" opacity="0.3" x="2" y="9" width="5" height="11" rx="1" />
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                    <div class="wizard-label">
                                        <h3 class="wizard-title">Completed!</h3>
                                        <div class="wizard-desc">Review and Submit</div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Wizard Step 6 Nav-->
                        </div>
                    </div>
                    <!--end: Wizard Nav-->
                    <!--begin: Wizard Body-->
                    <div class="wizard-body py-8 px-8 py-lg-20 px-lg-10">
                        <!--begin: Wizard Form-->
                        <div class="row">
                            <div class="offset-xxl-2 col-xxl-8">
                                <form method="POST" action="{{ route('register') }}" class="form" id="kt_form">
                                    @csrf
                                    <!--begin: Wizard Step 1-->
                                    <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
                                        <h4 class="mb-10 font-weight-bold text-dark">Enter your Account Details</h4>
                                        <!--begin::Input-->
                                        <!--begin::Select-->
                                       
                                            
                                        <div class="col-lg-4 offset-lg-4">
                                            <div class="form-group">
                                                <label>Select Your Country</label>
                                                <select id="country" name="country" class="form-control form-control-solid form-control-lg">
                                                    
                                                    <option value="CA">🇨🇦  Canada</option>
                                                    
                                                    <option value="PK">🇵🇰  Pakistan</option>
                                                    
                                                    <option value="AE">🇦🇪  United Arab Emirates</option>
                                                    
                                                    <option value="US">🇺🇸  United States</option>
                                                    
                                                </select>
                                            </div>
                                        </div> 
                                        <div class="row">

                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="fname" placeholder="First Name" value="{{ old('fname') }}" />
                                                <span class="form-text text-muted">Please enter your first name.</span>
                                            </div>
                                        </div>
                                        
                                        <!--end::Input-->
                                        <!--begin::Input-->
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Middle Name</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="mname" placeholder="Last Name" value="{{ old('mname') }}" />
                                                <span class="form-text text-muted">Please enter your middle name.</span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control form-control-solid form-control-lg" name="lname" placeholder="Last Name" value="{{ old('lname') }}" />
                                                <span class="form-text text-muted">Please enter your last name.</span>
                                            </div>
                                        </div>

                                    </div>
                                        
                                        
                                        <!--end::Input-->
                                        <div class="row">
                                            
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="email" class="form-control form-control-solid form-control-lg" name="email" value="{{ old('email') }}" placeholder="Email"  />
                                                    @error('email')
                                                        <span class="text-danger form-text" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                    <span class="form-text text-muted">Please enter your email address.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="phone" value="{{ old('phone') }}" placeholder="phone"  id="phone" />
                                                    <span class="form-text text-muted">Please enter your phone number.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>

                                        <div class="row">
                                            
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" id="pass" class="form-control form-control-solid form-control-lg" name="password" placeholder="Password"  />
                                                   
                                                    <span class="form-text" id="pass_upper_note"> 1 Uppercase</span>
                                                    
                                                    <span class="form-text" id="pass_lower_note">1 Lowercase</span>
                                                
                                                    <span class="form-text" id="pass_numeric_note"> 1 Numeric</span>
                                                    
                                                    <span class="form-text" id="pass_special_note"> 1 Special Character</span>
                                                    
                                                    <span class=" form-text" id="pass_length_note" > Atleast 8 character long</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Confirm Password</label>
                                                    <input type="password" class="form-control form-control-solid form-control-lg" name="cpassword" placeholder="confirm password" id="cpassword" />
                                                    <span class="form-text text-muted">Please confirm your password.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>

                                    </div>
                                    <!--end: Wizard Step 1-->
                                    <!--begin: Wizard Step 2-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Setup Your Current Location</h4>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Address Line 1</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="address_1" placeholder="Address Line 1" value="{{old('address_1')}}" />
                                                    <span class="form-text text-muted">Please enter your Address.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Address Line 2</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="address_2" placeholder="Address Line 2" value="{{old('address_2')}}" />
                                                    <span class="form-text text-muted">Please enter your Address.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>Postcode</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="post_code" placeholder="Postcode" value="{{old('post_code')}}" />
                                                    <span class="form-text text-muted">Please enter your Postcode.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="city" placeholder="City" value="{{old('city')}}" />
                                                    <span class="form-text text-muted">Please enter your City.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <!--begin::Input-->
                                                <div class="form-group">
                                                    <label>State</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="state" placeholder="State" value="{{old('state')}}" />
                                                    <span class="form-text text-muted">Please enter your State.</span>
                                                </div>
                                                <!--end::Input-->
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <!--end: Wizard Step 2-->
                                    <!--begin: Wizard Step 3-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <h4 class="mb-10 font-weight-bold text-dark">Bsuiness Details</h4>
                                        <!--begin::Select-->
                                        <div class="row">
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Legal Business Name</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="bname" placeholder="Business Name" value="{{old('bname')}}" />
                                                    <span class="form-text text-muted">Please enter your Business Name.</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Tax ID/ EIN</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="tid" placeholder="Enter Tax ID/ EIN" value="{{old('tid')}}" />
                                                    <span class="form-text text-muted">Please enter your Business Tax id/EIN.</span>
                                                </div>
                                            </div>
                                            <div class="col-xl-4">
                                                <div class="form-group">
                                                    <label>Business Contact No*</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="bNumber" placeholder="Business contact number" value="{{old('bNumber')}}" />
                                                    <span class="form-text text-muted">Please enter your Business Contact Number.</span>
                                                </div>

                                            </div>

                                            <div id="nIDCard" class="col-xl-6">
                                                <div class="form-group">
                                                    <label>National Id Card Number</label>
                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="nic" placeholder="NIC" value="Business" />
                                                    <span class="form-text text-muted">Please enter your National Id Card Number.</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!--end::Select-->
                                        
                                    </div>
                                    <!--end: Wizard Step 3-->
                                    <!--begin: Wizard Step 6-->
                                    <div class="pb-5" data-wizard-type="step-content">
                                        <!--begin::Section-->
                                        <h4 class="mb-10 font-weight-bold text-dark">Our Privacy Policy</h4>
                                        <div class="ex1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Similique sapiente ex ea nobis minus hic aspernatur unde voluptates, debitis cumque, tempore blanditiis modi laudantium ad harum impedit dignissimos incidunt, eligendi nostrum saepe vero omnis ducimus corrupti! Officiis magnam, deserunt dolorem iusto explicabo debitis quas voluptatibus ullam corporis omnis. Recusandae incidunt cum corporis itaque fugit dolores exercitationem reprehenderit minima quidem labore eveniet facere illum ipsa doloremque, explicabo id eos asperiores harum! Numquam, consectetur molestiae harum facere esse porro odit exercitationem reprehenderit animi, incidunt quibusdam vel hic ullam sed. Veritatis, recusandae corporis! Ducimus mollitia ipsa ratione perferendis modi necessitatibus excepturi quaerat illo laudantium, pariatur eum qui, sunt itaque facilis enim, asperiores incidunt sit cupiditate? Numquam labore quisquam at. Quasi repellat iste id quidem aliquid ipsam dolorum ducimus magni ratione dolore suscipit eos eveniet qui consequatur atque, vitae facilis itaque necessitatibus nihil asperiores non tempore hic! Voluptas unde, numquam odit veritatis, eos, sunt asperiores dolor facilis fuga placeat ex debitis deleniti aperiam commodi temporibus! Fugiat, quidem. Libero corrupti asperiores commodi officia eum, quod quam non incidunt totam enim! Minus a quidem ratione quibusdam! Minima, quod repellendus? Delectus explicabo nam quibusdam eius necessitatibus ratione, quia omnis tempora mollitia ad aperiam molestiae est asperiores! Nam, dolore ipsa doloremque, ipsam voluptates ad sit iure a dignissimos ex nesciunt molestias vel dicta minima magni rerum debitis at atque nostrum deserunt! Aut, omnis illo? Eos iste, quaerat quos voluptatum nemo commodi maxime culpa atque explicabo recusandae! Eos nemo beatae nihil vitae, sequi at ab cupiditate, laudantium error, illo sit blanditiis laboriosam placeat consequuntur illum omnis minima quod et qui repellendus expedita voluptates cumque. Natus, fuga sit. Sunt consequatur non voluptatem necessitatibus magni consequuntur reprehenderit deserunt impedit exercitationem illum quod explicabo, laudantium labore esse saepe, accusantium sequi alias unde earum veniam rem! Placeat consequatur, quo ipsa nobis earum ipsum alias nostrum quod recusandae inventore quae, commodi fuga, nihil laboriosam dignissimos ipsam fugit mollitia. Sit velit ipsam hic. Porro maiores fugit facere perspiciatis eos, iure ut repellat iste non deleniti recusandae deserunt nemo eveniet odio dolore? Perferendis enim consequuntur, commodi quae nostrum odit at odio, nobis soluta tenetur a eveniet itaque fugit tempore accusamus aliquam tempora repellendus esse voluptatibus error veritatis possimus quo amet! Aspernatur exercitationem eos ullam dignissimos ad, error vel similique perspiciatis explicabo maxime nisi officia? Rerum similique ullam, ad saepe accusamus, officiis ratione ducimus illum eius esse odit at minima placeat culpa sunt ut fugiat! Reprehenderit accusamus quia quo sequi vero omnis sapiente, atque possimus ullam ducimus non. Optio quidem consequuntur harum neque sapiente nemo maxime tenetur aspernatur earum, nisi dolores necessitatibus iste debitis incidunt repellat magnam pariatur cupiditate ipsum odio reiciendis fugiat odit. Dicta adipisci fugiat veritatis architecto vel beatae consectetur, sed delectus sunt nostrum. Quibusdam et a optio quam, nihil tempore exercitationem itaque saepe quod labore asperiores impedit nam neque temporibus! Quisquam, praesentium odio possimus magnam, modi, tenetur maiores excepturi voluptatibus consequuntur amet ab placeat quo unde veniam obcaecati dicta atque molestiae explicabo sunt consectetur suscipit laboriosam. Temporibus minus nam numquam quos saepe, quis ducimus.</div>
                                        <!--end::Section-->
                                    </div>
                                    <!--end: Wizard Step 6-->
                                    <!--begin: Wizard Actions-->
                                    <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                        <div class="mr-2">
                                            <button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
                                        </div>
                                        <div>
                                            <button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-submit">Submit</button>
                                            <button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
                                        </div>
                                    </div>
                                    <!--end: Wizard Actions-->
                                </form>
                            </div>
                            <!--end: Wizard-->
                        </div>
                        <!--end: Wizard Form-->
                    </div>
                    <!--end: Wizard Body-->
                </div>
                <!--end: Wizard-->
            </div>
        </div>
    </div>
    <!--end::Container-->
</div>
<!--end::Entry-->


     {{-- Global Theme JS Bundle (used by all pages)  --}}
     @foreach(config('layout.resources.js') as $script)
     <script src="{{ asset($script) }}" type="text/javascript"></script>
 @endforeach

 {{-- Includable JS --}}
 @yield('scripts')


 
    {{-- @endsection --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>

if(document.getElementById('country').value == "PK"){
        document.getElementById("nIDCard").style.display = "block";
    }else{
        document.getElementById("nIDCard").style.display = "none";
    } 
document.querySelector('#country').addEventListener('change', function() {
    if(document.getElementById('country').value == "PK"){
        document.getElementById("nIDCard").style.display = "block";
    }else{
        document.getElementById("nIDCard").style.display = "none";
    }

	
});

    </script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.2-dev/js/formValidation.min.js" integrity="sha512-DlXWqMPKer3hZZMFub5hMTfj9aMQTNDrf0P21WESBefJSwvJguz97HB007VuOEecCApSMf5SY7A7LkQwfGyVfg==" crossorigin="anonymous"></script> --}}
<script src="{{URL::asset('js/form-controls.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script> --}}
<script src="{{URL::asset('js/wizard-2.js')}}"></script>
{{-- <script src="{{URL::asset('js/FormValidation.full.js')}}"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script> --}}
@endsection
