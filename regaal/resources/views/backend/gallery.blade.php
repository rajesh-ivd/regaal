@include('backend.layouts.header')
@include('backend.layouts.aside')
  


    <div class="content ht-100v pd-0">

      <div class="content-header">

        <div style="padding-left: 300px;">
          <h3 style="color: limegreen;"><?php/* ////echo $this->session->flashdata('flashmsg'); */?></h3>
        </div>

        <!-- <div class="content-search">

          <i data-feather="search"></i>

          <input type="search" class="form-control" placeholder="Search">

        </div> -->

        <!-- <nav class="nav">

          <a href="" class="nav-link"><i data-feather="help-circle"></i></a>

          <a href="" class="nav-link"><i data-feather="grid"></i></a>

          <a href="" class="nav-link"><i data-feather="align-left"></i></a>

        </nav> -->

      </div>



      <div class="content-body">

        <div class="container pd-x-0 tx-13">

          <div class="media d-block d-lg-flex">

            <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">

              <div class="df-example">

                <ul class="nav nav-tabs" id="myTab" role="tablist">

                  <li class="nav-item" onclick="make_active('banner')">

                    <a class="nav-link" id="banner-tab" data-toggle="tab" href="#banner" role="tab" aria-controls="banner" aria-selected="true">Banner</a>

                  </li>

                  <!-- <li class="nav-item" onclick="make_active('section1')">

                    <a class="nav-link" id="section1-tab" data-toggle="tab" href="#section1" role="tab" aria-controls="section1" aria-selected="true">Category Section</a>

                  </li> -->

                  <li class="nav-item" onclick="make_active('section2')">

                    <a class="nav-link" id="section2-tab" data-toggle="tab" href="#section2" role="tab" aria-controls="section2" aria-selected="true">Image Section</a>

                  </li>

                  <!-- <li class="nav-item" onclick="make_active('section3')">

                    <a class="nav-link" id="section3-tab" data-toggle="tab" href="#section3" role="tab" aria-controls="section3" aria-selected="true">Picture Section</a>

                  </li> -->

                  <!-- <li class="nav-item" onclick="make_active('section4')">

                    <a class="nav-link" id="section4-tab" data-toggle="tab" href="#section4" role="tab" aria-controls="section4" aria-selected="true">Video Section</a>

                  </li> -->

                  <!--<li class="nav-item" onclick="make_active('section5')">

                    <a class="nav-link" id="section5-tab" data-toggle="tab" href="#section5" role="tab" aria-controls="section5" aria-selected="true">Section 5</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section6')">

                    <a class="nav-link" id="section6-tab" data-toggle="tab" href="#section6" role="tab" aria-controls="section6" aria-selected="true">Section 6</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section7')">

                    <a class="nav-link" id="section7-tab" data-toggle="tab" href="#section7" role="tab" aria-controls="section7" aria-selected="true">Section 7</a>

                  </li>

                  <li class="nav-item" onclick="make_active('section8')">

                    <a class="nav-link" id="section8-tab" data-toggle="tab" href="#section8" role="tab" aria-controls="section8" aria-selected="true">Section 8</a>

                  </li> -->

                  <!-- <li class="nav-item" onclick="make_active('section9')">

                    <a class="nav-link" id="section9-tab" data-toggle="tab" href="#section9" role="tab" aria-controls="section9" aria-selected="true">Client Section</a>

                  </li> -->

                  <!-- <li class="nav-item" onclick="make_active('section10')">

                    <a class="nav-link" id="section10-tab" data-toggle="tab" href="#section10" role="tab" aria-controls="section10" aria-selected="true">Section 10</a>

                  </li> -->

                </ul>

























                <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">

                  <div class="tab-pane fade show" id="banner" role="tabpanel" aria-labelledby="banner-tab">

                    <div class="headerText">

                      <h4 class="mg-b-25">Desktop Banner Management</h4>

                      <!-- <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">Upload Banner Image</button> -->

                    </div>

            <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                <?php/*
                /*
                if(isset($gallery_banner_data_desk)){
                  foreach ($gallery_banner_data_desk as $key => $val) {
                    //echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-body tx-13">
                                <h5>'.$val->img_text.'</h5>
                              </div>
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal2" onclick="gallery_banner_edit_data_desk('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      //echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  //echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }*/
                */?>
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
                <?php/*/*
                if(isset($gallery_banner_data_mob)){
                  foreach ($gallery_banner_data_mob as $key => $val) {
                    //echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-body tx-13">
                                <h5>'.$val->img_text.'</h5>
                              </div>
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal2" onclick="gallery_banner_edit_data_mob('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      //echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  //echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }*/
                */?>
                  </div>
                </div>
              </div>

            </div>



             <!--  <div class="modal fade" id="exampleModal">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Upload Banner</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="home_banner_text"><b>Banner Text:</b></label>
                      <input type="text" class="form-control" placeholder="Enter text" id="home_banner_text" required><br>
                      <label for="home_banner_pic"><b>Choose Image(1350x850):</b></label>
                      <input type="file" id="home_banner_pic" accept="image/png, image/jpg, image/jpeg" required><br>
                      <button type="submit" class="btn btn-success" onclick="home_banner_add()">Save</button>
                      <p style="color: red; font-size: 15px;"><b id="home_banner_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->

              <div class="modal fade" id="exampleModal2">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Banner</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="gallery_banner_edit_id" value="">
                      <label for="gallery_banner_text_edit"><b>Banner Title:</b></label>
                      <input type="text" class="form-control" placeholder="Enter text" id="gallery_banner_text_edit"><br>
                      <label for="gallery_banner_pic_edit"><b id="type_text">Choose Image(1350x400):</b></label>
                      <img src="#" id="show_pic" width="150px;" style="display: none;"><br>
                      <input type="file" id="gallery_banner_pic_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="gallery_banner_edit()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="gallery_banner_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>



































              <!-- <div class="tab-pane fade show" id="section1" role="tabpane2" aria-labelledby="section1-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Category Management</h4>

                      <button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal3">Add Category</button>

                    </div>

                    <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Category Name</th>
                        <th style="width: 170px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php/*
                      /*
                      if(isset($gallery_cat_data)){
                        foreach ($gallery_cat_data as $key => $val) {
                      */?>
                          <tr>
                            <td><?php/* ////echo $val->cat_name;*/?></td>
                            <td><button class="btn btn-info btn-sm" onclick="gallery_cat_data_edit('<?php/* ////echo $val->cat_id;*/?>')" data-toggle="modal" data-target="#exampleModal4"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                              <button class="btn btn-danger btn-sm" onclick="gallery_cat_del('<?php/* ////echo $val->cat_id;*/?>')"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                          </tr>
                      <?php/*
                        }
                      }*/
                      */?>
                    </tbody>
                  </table>

                  <p><strong>Note: </strong>Deleting a Category will delete the images under it as well.</p>
                </form>
              </div>

              <div class="modal fade" id="exampleModal3">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Add Category</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="gallery_cat_name"><b>Category Name:</b></label>
                      <input type="text" class="form-control" placeholder="Enter name" id="gallery_cat_name" required><br>
                      <button type="submit" class="btn btn-success" onclick="gallery_cat_add()">Add</button>
                      <p style="color: red; font-size: 15px;"><b id="gallery_cat_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>


              <div class="modal fade" id="exampleModal4">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Category</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="gallery_cat_name_edit"><b>Category Name:</b></label>
                      <input type="hidden" id="gallery_cat_id" value="">
                      <input type="text" class="form-control" placeholder="Enter name" id="gallery_cat_name_edit" required><br>
                      <button type="submit" class="btn btn-success" onclick="gallery_cat_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="gallery_cat_error_edit"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->





































              <!-- <div class="tab-pane fade show" id="section4" role="tabpane5" aria-labelledby="section4-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Video Management</h4>

                      <button type="button" class="btn btn-primary" onclick="about_section4_save()">Save</button>

                    </div>
                    <label for="about_section4_video_link">Video Link:</label>
                    <input type="text" class="form-control" placeholder="Enter title" id="about_section4_video_link" value="<?php/* ////echo $about_section4_data[0]->element_content;*/?>" required>

                    <h5>Background Image:</h5>

          <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                <?php/*
                /*
                if(isset($about_section4_pic_data)){
                  foreach ($about_section4_pic_data as $key => $val) {
                    //echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal4" onclick="about_section4_image_edit_data('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      //echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  //echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                */
                */?>
                  </div>
                </div>
              </div>

                </form>
              </div>


              <div class="modal fade" id="exampleModal4">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="about_section4_image_edit_id" value="">
                      <label for="about_section4_image_edit"><b>Choose Image(1170x550):</b></label>
                      <img src="#" id="show_pic4" width="150px;" style="display: none;"><br>
                      <input type="file" id="about_section4_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic4').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="about_section4_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="about_section4_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->
































              <!-- <div class="tab-pane fade show" id="section1" role="tabpane2" aria-labelledby="section1-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Section 1 Management</h4>

                      <button type="submit" class="btn btn-primary" onclick="section1_save()">Save</button>

                    </div>
                  <label for="section1_title">Title:</label>
                  <input type="text" class="form-control" placeholder="Enter title" id="section1_title" value="<?php/* ////echo $section1_data[0]->element_content;*/?>" required>
                  <label for="section1_boldtext">Bold Text:</label>
                  <textarea class="form-control" placeholder="Enter Text" rows="3" id="section1_boldtext" required><?php/* ////echo $section1_data[1]->element_content;*/?></textarea>
                  <label for="section1_normaltext">Normal Text:</label>
                  <textarea class="form-control" placeholder="Enter Text" rows="3" id="section1_normaltext" required><?php/* ////echo $section1_data[2]->element_content;*/?></textarea>

                  <h5>Icons:</h5>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Icon Title</th>
                        <th>Icon</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php/*
                      if(isset($section1_pic_data)){
                        foreach ($section1_pic_data as $key => $val) {
                      */?>
                          <tr>
                            <td><?php/* ////echo $val->img_title;*/?></td>
                            <td><img src="<?php/* ////echo base_url();*/?>uploads/<?php/* ////echo $val->img_link;*/?>" width="50px;"></td>
                            <td><button class="btn btn-info btn-sm" onclick="section1_pic_edit_data('<?php/* ////echo $val->img_id;*/?>')" data-toggle="modal" data-target="#exampleModal3"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                          </tr>
                      <?php/*
                        }
                      }
                      */?>
                    </tbody>
                  </table>

                </form>
              </div>


               -->






















              <div class="tab-pane fade show" id="section2" role="tabpane3" aria-labelledby="section2-tab">
                <form class="form" action="" onsubmit="return false">
                  <div class="headerText">

                      <h4 class="mg-b-25">Image Management</h4>

                      <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal5">Add Image</button>
                    </div>

                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>Sl No.</th>
                        <th>Image Text</th>
                        <th>Category</th>
                        <th>Image</th>
                        <th style="width: 170px;">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php/*
                      if(isset($gallery_image_data)){
                        $sl_no = 1;
                        foreach ($gallery_image_data as $key => $val) {
                          */?>
                            <tr>
                              <td><?php/* ////echo $sl_no++;*/?></td>
                              <td><?php/* ////echo $val->gallery_img_text;*/?></td>
                              <td><?php/* ////echo $val->gallery_img_category;*/?></td>
                              <td><img src="<?php/* ////echo base_url().'uploads/'.$val->gallery_img_link;*/?>" width="100px"></td>
                              <td>
                                <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal6" onclick="gallery_image_data_edit('<?php/* ////echo $val->gallery_img_id;*/?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                <button class="btn btn-sm btn-danger" onclick="gallery_image_del('<?php/* ////echo $val->gallery_img_id;*/?>')"><i class="fa fa-trash" aria-hidden="true"></i></button>
                              </td>
                            </tr>
                          <?php/*
                        }
                      }
                      */?>
                    </tbody>
                  </table>
            </form>
              </div>



              <div class="modal fade" id="exampleModal5">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Add New Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <!-- <input type="hidden" id="gallery_image_edit_id" value=""> -->
                      <label for="gallery_image_text">Image Text:</label>
                        <input type="text" class="form-control" placeholder="Enter text" id="gallery_image_text" value="" onkeyup="char_count(this.value)">
                      <!-- <label for="cat_id">Select Category:</label>
                        <select class="form-control" id="cat_id" name="cat_id" required>
                          <option value="">-Select Category-</option>
                          <?php/*
                          foreach ($gallery_cat_data as $key => $val) {
                            //echo '<option value="'.$val->cat_id.'">'.$val->cat_name.'</option>';
                          }
                          */?>
                        </select> -->
                        <p><strong>Recommended max charecter:</strong> 60</p>
                        <p><strong>Charecter count:</strong> <span id="char_count">0</span></p>
                        <label for="gallery_image_category">Image Category:</label>
                        <select class="form-control" id="gallery_image_category" name="gallery_image_category">
                          <option value="" selected>Select Category</option>
                          <option value="Machines">Machines</option>
                          <option value="People">People</option>
                        </select>
                      <label for="gallery_image"><b>Choose Image(1280x500):</b></label>
                      <img src="#" id="show_pic2" width="150px;" style="display: none;"><br>
                      <input type="file" id="gallery_image" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic2').src = window.URL.createObjectURL(this.files[0]);document.getElementById('show_pic2').style.display = 'block';" required><br>
                      <button type="submit" class="btn btn-success" onclick="gallery_image_add()">Add</button>
                      <p style="color: red; font-size: 15px;"><b id="gallery_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>



              <div class="modal fade" id="exampleModal6">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="gallery_image_edit_id" value="">
                      <label for="gallery_image_text_edit">Image Text:</label>
                        <input type="text" class="form-control" placeholder="Enter text" id="gallery_image_text_edit" value="" onkeyup="char_count_edit(this.value)">
                      <!-- <label for="cat_id_edit">Select Category:</label>
                        <select class="form-control" id="cat_id_edit" name="cat_id_edit" required>
                          <option value="">-Select Category-</option>
                          <?php/*
                          foreach ($gallery_cat_data as $key => $val) {
                            //echo '<option value="'.$val->cat_id.'">'.$val->cat_name.'</option>';
                          }
                          */?>
                        </select> -->
                        <p><strong>Recommended max charecter:</strong> 60</p>
                        <p><strong>Charecter count:</strong> <span id="char_count_edit">0</span></p>
                        <label for="gallery_image_category_edit">Image Category:</label>
                        <select class="form-control" id="gallery_image_category_edit" name="gallery_image_category_edit">
                          <option value="">Select Category</option>
                          <option value="Machines">Machines</option>
                          <option value="People">People</option>
                        </select>
                      <label for="gallery_image_edit"><b>Choose Image(1280x500):</b></label>
                      <img src="#" id="show_pic3" width="150px;" style="display: none;"><br>
                      <input type="file" id="gallery_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic3').src = window.URL.createObjectURL(this.files[0]);document.getElementById('show_pic3').style.display = 'block';"><br>
                      <button type="submit" class="btn btn-success" onclick="gallery_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="gallery_image_error_edit"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>

 @include('backend.layouts.footer')