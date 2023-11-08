@include('backend.layouts.header')
@include('backend.layouts.aside')

<div class="content ht-100v pd-0">
    <div class="content-header"></div>
    <div class="content-body">
        <div class="container pd-x-0 tx-13">
            <div class="media d-block d-lg-flex">
                <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">
                    <div class="df-example">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" onclick="make_active('banner')">
                                <a class="nav-link" id="banner-tab" data-toggle="tab" href="#banner" role="tab" aria-controls="banner" aria-selected="true">Banner</a>
                            </li>
                            <li class="nav-item active" data-section-id="section1" onclick="make_active('section1')">
                                <a class="nav-link" id="section1-tab" data-toggle="tab" href="#section1" role="tab" aria-controls="section1" aria-selected="true">Content Section</a>
                            </li>
                        </ul>
                        <div>
                            <h6 style="color: limegreen;">
                                @if (session('success'))
                                    <div class="alert alert-success alert-dismissible custom-alert" role="alert">
                                        <button type="button" class="close custom-close" data-dismiss="alert" aria-label="Close" style="padding-left: 12px;">
                                            <span aria-hidden="true" style="position: relative; top: -15px; left: 35px;">&times;</span>
                                        </button>
                                        <span>{{ session('success') }}</span>
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger alert-dismissible custom-alert" role="alert">
                                        <button type="button" class="close custom-close" data-dismiss="alert" aria-label="Close" style="padding-left: 12px;">
                                            <span aria-hidden="true" style="position: relative; top: -15px; left: 35px;">&times;</span>
                                        </button>
                                        <span>{{ session('error') }}</span>
                                    </div>
                                @endif
                            </h6>
                        </div>
                    </div>
                    <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">
                        <!-- Banner section -->
                        <div class="tab-pane fade show" id="banner" role="tabpanel" aria-labelledby="banner-tab">
                            <div class="headerText">
                                <h4 class="mg-b-25">Desktop Banner Management</h4>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row row-sm mg-b-25 crd">
                                        @if ($about_banner_data_desk && count($about_banner_data_desk) > 0)
                                            @foreach($about_banner_data_desk as $key => $val)
                                                <div class="col-md-6">
                                                    <div class="card card-event">
                                                        <img src="{{ asset('backend/img/banner/' . $val->img_link) }}" class="card-img-top" alt="Image Alt Text">
                                                        <div class="card-body tx-13">
                                                            <h5>{{ $val->img_text }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if(($key+1) % 2 == 0)
                                                    </div><div class="row row-sm mg-b-25 crd">
                                                @endif
                                            @endforeach
                                        @else
                                              <div class="col-md-12"><center><h3>No Data Available!</h3></center></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="headerText">
                                <h4 class="mg-b-25">Mobile Banner Management</h4>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="row row-sm mg-b-25 crd">
                                        @if(isset($about_banner_data_mob))
                                            @foreach($about_banner_data_mob as $key => $val)
                                                <div class="col-md-6">
                                                    <div class="card card-event">
                                                        <img src="{{ asset('backend/img/banner/' . $val->img_link) }}" class="card-img-top" alt="Image Alt Text">
                                                        <div class="card-body tx-13">
                                                            <h5>{{ $val->img_text }}</h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if(($key+1) % 2 == 0)
                                                    </div><div class="row row-sm mg-b-25 crd">
                                                @endif
                                            @endforeach
                                        @else
                                            <div class="col-md-12"><center><h3>No Data Available!</h3></center></div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Content Section -->
                        <div class="tab-pane fade show" id="section1" role="tabpanel" aria-labelledby="section1-tab">
                            @foreach ($home_section_one_data as $data)
                            <form class="form" action="{{ url('/updateAboutSection1') }}" method="post">
                                @csrf
                                <div class="headerText">
                                    <h4 class="mg-b-25">Content Section Management</h4>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                                <label for="about_section1_quote1"><b>Quote 1:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Quote" name="about_section1_quote1" value="{{ $data->home_section1_text }}" required><br>
                                <input type="hidden" name="hidenId" value="{{ $data->id }}">
                                <!-- Include other input fields here as needed -->
                            </form>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('backend.layouts.footer')
