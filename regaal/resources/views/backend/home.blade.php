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
                                <a class="nav-link" id="section1-tab" data-toggle="tab" href="#section1" role="tab" aria-controls="section1" aria-selected="true">Introduction Section</a>
                            </li>
                            <li class="nav-item" onclick="make_active('section2')">
                                <a class="nav-link" id="section2-tab" data-toggle="tab" href="#section2" role="tab" aria-controls="section2" aria-selected="true">Journey Section</a>
                            </li>
                            <li class="nav-item" onclick="make_active('section3')">
                                <a class="nav-link" id="section3-tab" data-toggle="tab" href="#section3" role="tab" aria-controls="section3" aria-selected="true">Environment Section</a>
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
                        @include('backend.Home_banner.Banner') 
                        <!-- Introduction Section -->
                        {{-- @include('backend.Home_banner.Introduction_Section') --}}
                        <div class="tab-pane fade show" id="section1" role="tabpanel" aria-labelledby="section1-tab">
                          <form class="form" action="{{ url('/section1/save') }}" method="POST">
                              <div class="headerText">
                                  <h4 class="mg-b-25">Introduction Management</h4>
                                  <input type="submit" class="btn btn-primary" value="Save" onclick="updateIntroductionData()">
                              </div>
                              @csrf
                              <label for="home_section1_title">Title:</label>
                              <input type="text" class="form-control" id="home_section1_title" placeholder="Enter title" name="home_section1_title" required>
                      
                              <label for="home_section1_text">Text:</label>
                              <textarea class="form-control" id="home_section1_text" placeholder="Enter text" rows="4" name="home_section1_text" required></textarea>
                      
                              <label for="home_section2_videoid">Vimeo Video ID:</label>
                              <input type="text" class="form-control" id="home_section2_videoid" placeholder="Enter Video ID" name="home_section2_videoid">
                              <p><strong>Note:</strong> Please enter only the Vimeo Video ID. To get a Video ID, you can open a video in Vimeo, and in the URL bar, you will find something similar to this - "https://vimeo.com/472927205," where "472927205" is the Video ID.
                      
                              <input type="hidden" name="id" value="">
                          </form>
                      </div>
                      <script>
                       function updateIntroductionData() {
    console.log("updateIntroductionData function called"); // Add this line to check if the function is called

    // Get the form values
    var title = $('#home_section1_title').val();
    var text = $('#home_section1_text').val();
    var videoid = $('#home_section2_videoid').val();

    // Prepare the data to send via AJAX
    var data = {
        home_section1_title: title,
        home_section1_text: text,
        home_section2_videoid: videoid
    };

    // Make an AJAX POST request to update the data
    $.ajax({
        type: "POST",
        url: "/api/update-introduction-data",
        data: data,
        success: function (response) {
            if (response.success) {
                alert("Introduction data updated successfully");
            } else {
                alert("Failed to update introduction data");
            }
        },
        error: function () {
            alert("Failed to update introduction data");
        }
    });
}

                      </script>
                      <script>
                       function loadIntroductionData() {
                        $.ajax({
                            type: "GET",
                            url: "/api/introduction-data", // Replace with your actual API endpoint
                            success: function (data) {
                                // Check if data is not empty
                                if (data) {
                                    $('#home_section1_title').val(data.home_section1_title);
                                    $('#home_section1_text').val(data.home_section1_text);
                                    $('#home_section2_videoid').val(data.home_section2_videoid);
                                    // Populate other fields as needed
                                }
                            },
                            error: function () {
                                alert("Failed to fetch introduction data.");
                            }
                        });
                    }

                    // Call the function to load introduction data when the tab is displayed or as needed.
                    loadIntroductionData();

                    </script>
                    
                        {{-- Journey Section --}}
                        {{-- @include('backend.Home_banner.Journey_Management') --}}
                        <div class="tab-pane fade show" id="section2" role="tabpanel" aria-labelledby="section2-tab">
                          <form class="form" action="{{ url('/section2/save') }}" method="POST">
                            @csrf
                              <div class="headerText">
                                  <h4 class="mg-b-25">Journey Management</h4>
                                  {{-- <button type="button" class="btn btn-warning" style="margin-left: 635px;" data-toggle="modal" data-target="#exampleModal3">Add Year</button> --}}
                                  <button type="submit" class="btn btn-primary" >Save</button>
                              </div>
                              <label for="home_section2_title">Title:</label>
                              <input type="text" class="form-control" placeholder="Enter title" id="home_section2_title" name="home_section2_title">
                              <div class="float-right">
                                <label for="home_section2_year">Add Year:</label>
                                <input type="number" id="home_section2_year" name="home_section2_year" class="btn btn-md btn-warning" min="1900" max="2099" step="1" value="2023">
                              </div><br><br>
                            </form>

                              
                              <h5>Timeline:</h5>
                              <table class="table table-hover">
                                  <thead>
                                      <tr>
                                          <th>Year</th>
                                          <th>Text</th>
                                          <th style="width: 170px;">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody id="journeyDataContainer">
                                      <!-- Data will be displayed here using JavaScript -->
                                  </tbody>
                              </table>
                              <!-- Other content for the tab -->
                          
                      </div>
                      <div class="modal fade" id="exampleModal4">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h4 class="modal-title">Update Timeline</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                      
                            <div class="modal-body">
                              <form class="form" action="{{ url('/update2/save') }}" method="post" >
                                @csrf
                                <input type="hidden" name="home_timeline_id_edit" id="home_timeline_id_edit">
                                <label for="home_timeline_year_edit">Year:</label>
                                <input type="text" class="form-control" placeholder="Enter year" required id="home_timeline_year_edit">
                                <label for="home_timeline_text_edit">Text:</label>
                                <textarea class="form-control" placeholder="Enter text" rows="3" id="home_timeline_text_edit" required></textarea>
                                <button type="submit" class="btn btn-success">Update</button>

                                <p style="color: red; font-size: 15px;"><b id="about_section5_error_edit"></b></p>
                              </form>
                            </div>
                      
                            <div class="modal-footer">
                              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                        {{-- Environment Section --}}
                        @include('backend.Home_banner.Environment_Section')
                        <!-- Other sections go here -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modals for uploading and updating banners -->
<!-- Modal for uploading desktop banner -->
<div class="modal fade" id="exampleModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Desktop Banner</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form" action="{{ url('/save_banner') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="target_type" id="target_type" value="">
          <label for="home_banner_text"><b>Banner Text:</b></label>
          <input type="text" class="form-control" placeholder="Enter text" name="home_banner_text"><br>
          @error('home_banner_text')
          <p style="color: red; font-size: 15px;"><b>{{ $message }}</b></p>
          @enderror
          <label for="home_banner_pic_mod"><b id="type_text">Choose Image (1350x850):</b></label>
          <input type="file" name="home_banner_pic" accept="image/png, image/jpg, image/jpeg" required><br>
          @error('home_banner_pic')
          <p style="color: red; font-size: 15px;"><b>{{ $message }}</b></p>
          @enderror
          <input type="hidden" name="img_target_page" value="home_desk.php">
          <button type="submit" class="btn btn-success">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal for uploading mobile banner -->
<div class="modal fade" id="exampleModal1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Upload Mobile Banner</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      
        <form class="form" action="{{ url('/save_banner_mob') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="target_type" id="target_type" value="">
          <label for="home_banner_text_mob"><b>Banner Text:</b></label>
          <input type="text" class="form-control" placeholder="Enter text" name="home_banner_text_mob" value=""><br>
          @error('home_banner_text_mob')
          <p style="color: red; font-size: 15px;"><b>{{ $message }}</b></p>
          @enderror
          <label for="home_banner_pic_mob"><b id="type_text">Choose Image (1350x850):</b></label>
          @error('home_banner_pic_mob')
          <p style="color: red; font-size: 15px;"><b>{{ $message }}</b></p>
          @enderror
          <input type="hidden" name="img_target_page_mob" value="home_mob.php">
          <button type="submit" class="btn btn-success">Save</button>
        </form>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal for updating desktop banner -->
<div class="modal fade" id="exampleModal12">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Desktop Banner</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form" action="{{ url('/save_banner_desk_update') }}" method="POST" enctype="multipart/form-data" id="updateDeskBannerForm">
          @csrf
          <input type="hidden" id="modalBannerId" name="modalBannerId" value="">
          <label for="modalBannerText"><b>Banner Text:</b></label>
          <input type="text" class="form-control" placeholder="Enter text" id="modalBannerText" name="modalBannerText"><br>
          @error('modalBannerText')
          <p style="color: red; font-size: 15px;"><b>{{ $message }}</b></p>
          @enderror
          <img src="" id="modalBannerImage" alt="no img" width="150px" style="width: 220px; max-width: 100%; display: block; margin: 0 auto; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="container" style="text-align: center; padding: 10px 20px;"></div>
          <label for="modalBannerImage"><b id="type_text">Choose Image (1350x850):</b></label>
          <input type="file" name="modalBannerImage" accept="image/png, image/jpg, image/jpeg"><br>
          @error('modalBannerImage')
          <p style="color: red; font-size: 15px;"><b>{{ $message }}</b></p>
          @enderror
          <input type="hidden" name="img_target_page_desk" value="home_desk.php">
          <button type="submit" class="btn btn-success" id="updateDeskBannerButton">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal for updating mobile banner -->
<div class="modal fade" id="exampleModal121">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Update Mobile Banner</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form class="form" action="{{ url('/save_banner_mob_update') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" id="modalBannerId_mob" name="modalBannerId_mob" value="">
          <label for="modalBannerText_mob"><b>Banner Text:</b></label>
          <input type="text" class="form-control" placeholder="Enter text" id="modalBannerText_mob" name="modalBannerText_mob"><br>
          @error('modalBannerText_mob')
          <p style="color: red; font-size: 15px;"><b>{{ $message }}</b></p>
          @enderror
          <img src="" id="modalBannerImage_mob" alt="no img" width="150px" style="width: 220px; max-width: 100%; display: block; margin: 0 auto; background-color: white; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
          <div class="container" style="text-align: center; padding: 10px 20px;"></div>
          <label for="modalBannerImage_mob"><b id="type_text">Choose Image (1350x850):</b></label>
          <input type="file" name="modalBannerImage_mob" accept="image/png, image/jpg, image/jpeg"><br>
        
          @error('modalBannerImage_mob')
          <p style="color: red; font-size: 15px;"><b>{{ $message }}</b></p>
          @enderror
          <input type="hidden" name="img_target_page_mob" value="home_mob.php">
          <button type="submit" class="btn btn-success">Save</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

@include('backend.layouts.footer')

<!-- JavaScript code to handle modals and AJAX requests -->
<script>
  function populateModal(bannerId, targetPage) {
    console.log(targetPage);
    $.ajax({
      type: "GET",
      url: `/admin/home/${bannerId}/${targetPage}`,
      success: function (data) {
        console.log(data);
        $('#modalBannerId').val(bannerId);
        $('#modalBannerText').val(data.img_text);
  
        $('#modalBannerImage').attr('src', '{{ asset('backend/img/banner/') }}/' + data.img_link);
      },
      error: function () {
        alert("Failed to fetch banner details.");
      }
    });
  }
  
  function populateModal_mob(bannerId, targetPage) {
    console.log(targetPage);
    $.ajax({
      type: "GET",
      url: `/admin/home/${bannerId}/${targetPage}`,
      success: function (data) {
        console.log(data);
        $('#modalBannerId_mob').val(bannerId);
        $('#modalBannerText_mob').val(data.img_text);
  
        $('#modalBannerImage_mob').attr('src', '{{ asset('backend/img/banner/') }}/' + data.img_link);
      },
      error: function () {
        alert("Failed to fetch banner details.");
      }
    });
  }
  // Function to load journey data and populate the table
function loadJourneyData() {
    // Make an AJAX request to fetch the journey data from the server.
    $.ajax({
        type: "GET",
        url: "/api/journey-data", // Replace with your actual API endpoint
        success: function (data) {
            // Assuming data is an array of journey items.
            const journeyDataContainer = document.getElementById("journeyDataContainer");
            journeyDataContainer.innerHTML = ''; // Clear the container.

            data.forEach((item) => {
                const row = document.createElement("tr");
                row.innerHTML = `
                    <td>${item.year}</td>
                    <td>${item.title}</td>
                    <td>
                      <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal4" onclick="editTimeline(${item.id}, '${item.year}', '${item.title}')"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button class="btn btn-sm btn-danger" onclick="deleteTimeline(${item.id})"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </td>
                `;
                journeyDataContainer.appendChild(row);
            });
        },
        error: function () {
            alert("Failed to fetch journey data.");
        }
    });
}

// Call the function to load journey data when the tab is displayed or as needed.
loadJourneyData();

function editTimeline(id, year, title) {
    // Set the values in the modal fields.
    $('#home_timeline_id_edit').val(id);
    $('#home_timeline_year_edit').val(year);
    $('#home_timeline_text_edit').val(title);
    $('#about_section5_error_edit').text(''); // Clear any previous error message if needed.
}

  </script>