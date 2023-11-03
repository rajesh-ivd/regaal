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
                            <!-- Tab links for managing different sections -->
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
                                    <div class="col-md-12"><center><h3>No Data Available !</h3></center></div>
                                @endif

                                      </div>
                                    </div>
                                  </div>


                                  <div class="headerText">

                                    <h4 class="mg-b-25">Mobile Banner Management</h4>

                                    <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Upload Banner Image</button> -->

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
                                        <div class="col-md-12"><center><h3>No Data Available !</h3></center></div>
                                    @endif

                                          </div>
                                        </div>
                                      </div>

                          </div>

                        <!-- content Section -->

                        <div class="tab-pane fade show" id="section1" role="tabpanel" aria-labelledby="section1-tab">
                            <form class="form" action="{{ route('updateAboutSection1') }}" method="post">
                                @csrf
                                <div class="headerText">
                                    <h4 class="mg-b-25">Content Section Management</h4>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                                <label for="about_section1_quote1"><b>Quote 1:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_quote1" name="about_section1_quote1" value="{{ $about_section1_data[0]->element_content }}" required><br>

                                <label for="about_section1_quote2"><b>Quote 2:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_quote2" name="about_section1_quote2" value="{{ $about_section1_data[1]->element_content }}" required><br>

                                <label for="about_section1_company_title"><b>Company Title:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_company_title" name="about_section1_company_title" value="{{ $about_section1_data[16]->element_content }}" required><br>

                                <label for="about_section1_company_text"><b>Company Text:</b></label>
                                <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_company_text" name="about_section1_company_text" required>{{ $about_section1_data[17]->element_content }}</textarea><br>

                                <label for="about_section1_family_title"><b>Family Title:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_family_title" name="about_section1_family_title" value="{{ $about_section1_data[18]->element_content }}" required><br>

                                <label for="about_section1_family_text"><b>Family Text:</b></label>
                                <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_family_text" name="about_section1_family_text" required>{{ $about_section1_data[19]->element_content }}</textarea><br>

                                <label for="about_section1_logo_title"><b>Logo Title:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_logo_title" name="about_section1_logo_title" value="{{ $about_section1_data[20]->element_content }}" required><br>

                                <label for="about_section1_logo_text"><b>Logo Text:</b></label>
                                <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_logo_text" name="about_section1_logo_text" required>{{ $about_section1_data[21]->element_content }}</textarea><br>

                                <label for="about_section1_boldtext1"><b>Bold Text 1:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_boldtext1" name="about_section1_boldtext1" value="{{ $about_section1_data[2]->element_content }}" required><br>

                                <label for="about_section1_boldtext2"><b>Bold Text 2:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_boldtext2" name="about_section1_boldtext2" value="{{ $about_section1_data[3]->element_content }}" required><br>

                                <label for="about_section1_boldtext3"><b>Bold Text 3:</b></label>
                                <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_boldtext3" name="about_section1_boldtext3" value="{{ $about_section1_data[4]->element_content }}" required><br>

                                <label for="about_section1_mission_text"><b>Mission Text:</b></label>
                                <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_mission_text" name="about_section1_mission_text" required>{{ $about_section1_data[5]->element_content }}</textarea><br>

                                <label for="about_section1_vision_text"><b>Vision Text:</b></label>
                                <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_vision_text" name="about_section1_vision_text" required>{{ $about_section1_data[6]->element_content }}</textarea><br>

                                <label for="about_section1_values_text"><b>Our Values Text:</b></label>
                                <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_values_text" name="about_section1_values_text" required>{{ $about_section1_data[7]->element_content }}</textarea><br>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="about_section1_value1_title"><b>Value 1 Title:</b></label>
                                        <input type="text" class="form-control" placeholder="Enter Title" id="about_section1_value1_title" name="about_section1_value1_title" value="{{ $about_section1_data[8]->element_content }}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="about_section1_value1_text"><b>Value 1 Text:</b></label>
                                        <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_value1_text" name="about_section1_value1_text" value="{{ $about_section1_data[9]->element_content }}" required>
                                    </div>
                                </div>

                                <!-- Add similar input fields for other values -->

                                <br><br>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="row row-sm mg-b-25 crd">
                                            @if(isset($about_section1_pic_data))
                                                @foreach($about_section1_pic_data as $key => $val)
                                                    <div class="col-md-6">
                                                        <div class="card card-event" style="width: 50%;">
                                                            <img src="{{ asset('uploads/' . $val->img_link) }}" class="card-img-top" style="height: auto;" alt="">
                                                            <div class="card-body tx-13">
                                                                <h5>{{ $val->img_title }}</h5>
                                                            </div>
                                                            <div class="card-footer tx-13">
                                                                <span class="tx-color-03"></span>
                                                                <span class="del-icon">
                                                                    <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal3" onclick="about_section1_edit_data({{ $val->img_id }})"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @if(($key + 1) % 2 == 0)
                                                        </div><div class="row row-sm mg-b-25 crd">
                                                    @endif
                                                @endforeach
                                            @else
                                                <div class="col-md-12"><center><h3>No Data Available !</h3></center></div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('backend.layouts.footer')
