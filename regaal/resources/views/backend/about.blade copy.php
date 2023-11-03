@include('backend.layouts.header')
@include('backend.layouts.aside')

    <div class="content ht-100v pd-0">
      <div class="content-header">
        <div style="padding-left: 300px;">
          <h3 style="color: limegreen;"></h3>
        </div>
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

                  <li class="nav-item" onclick="make_active('section1')">

                    <a class="nav-link" id="section1-tab" data-toggle="tab" href="#section1" role="tab" aria-controls="section1" aria-selected="true">Content Section</a>

                  </li>


                </ul>

                <div class="tab-content bd bd-gray-300 bd-t-0 pd-20" id="myTabContent">

                  <div class="tab-pane fade show" id="banner" role="tabpanel" aria-labelledby="banner-tab">

                    <div class="headerText">

                      <h4 class="mg-b-25">Desktop Banner Management</h4>

                    </div>

                    <div class="row">
                    <div class="col-xl-12">


              <div class="row row-sm mg-b-25 crd">

                <div class="row row-sm mg-b-25 crd">
                    <div class="col-md-6">
                      <div class="card card-event">
                        <img src="{{ asset('uploads/' . $val->img_link) }}" class="card-img-top" alt="">
                        <div class="card-body tx-13">
                          <h5></h5>
                        </div>
                        <div class="card-footer tx-13">
                          <span class="tx-color-03"></span>
                          <span class="del-icon">
                            <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal2" onclick="about_banner_edit_data_desk({{ $val->img_id }})"></i>
                          </span>
                        </div>
                      </div>
                    </div>
                      </div><div class="row row-sm mg-b-25 crd">

                </div>
                <div class="col-md-12"><center><h3>No Data Available !</h3></center></div>
                  </div>
                </div>
              </div>


              <div class="headerText">

                      <h4 class="mg-b-25">Mobile Banner Management</h4>


                    </div>

            <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">

                <div class="row row-sm mg-b-25 crd">
                    <div class="col-md-6">
                      <div class="card card-event">
                        <img src="{{ asset('uploads/' . $val->img_link) }}" class="card-img-top" alt="">
                        <div class="card-body tx-13">
                          <h5></h5>
                        </div>
                        <div class="card-footer tx-13">
                          <span class="tx-color-03"></span>
                          <span class="del-icon">
                            <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal2" onclick="about_banner_edit_data_mob({{ $val->img_id }})"></i>
                          </span>
                        </div>
                      </div>
                    </div>

                      </div><div class="row row-sm mg-b-25 crd">
                    @endif
                  @endforeach
                </div>
              @else
                <div class="col-md-12"><center><h3>No Data Available !</h3></center></div>
              @endif

                  </div>
                </div>
              </div>

            </div>


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
                      <input type="file" id="home_banner_pic" accept="image/*" required><br>
                      <button type="submit" class="btn btn-success" onclick="home_banner_add()">Save</button>
                      <p style="color: red; font-size: 15px;"><b id="home_banner_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>

              <div class="modal fade" id="exampleModal2">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Banner</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="about_banner_text_edit"><b>Banner Title:</b></label>
                      <input type="hidden" id="about_banner_edit_id" value="">
                      <input type="text" class="form-control" placeholder="Enter text" id="about_banner_text_edit"><br>
                      <label for="about_banner_pic_edit"><b id="type_text">Choose Image(1350x400):</b></label>
                      <img src="#" id="show_pic" width="150px;" style="display: none;"><br>
                      <input type="file" id="about_banner_pic_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="about_banner_edit()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="about_banner_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>

              <div class="tab-pane fade show" id="section1" role="tabpane2" aria-labelledby="section1-tab">
                <form class="form" action="" onsubmit="return false">

                    <div class="headerText">

                      <h4 class="mg-b-25">Content Section Management</h4>

                      <button type="button" class="btn btn-primary" onclick="about_section1_save()">Save</button>
                    </div>


                      <label for="about_section1_quote1"><b>Quote 1:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_quote1" value="<?php //echo $about_section1_data[0]->element_content;?>" required><br>
                      <label for="about_section1_quote2"><b>Quote 2:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_quote2" value="<?php //echo $about_section1_data[1]->element_content;?>" required><br>

                      <label for="about_section1_company_title"><b>Company Title:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_company_title" value="<?php //echo $about_section1_data[16]->element_content;?>" required><br>
                      <label for="about_section1_company_text"><b>Company Text:</b></label>
                      <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_company_text" required><?php //echo $about_section1_data[17]->element_content;?></textarea><br>

                      <label for="about_section1_family_title"><b>Family Title:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_family_title" value="<?php //echo $about_section1_data[18]->element_content;?>" required><br>
                      <label for="about_section1_family_text"><b>Family Text:</b></label>
                      <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_family_text" required><?php //echo $about_section1_data[19]->element_content;?></textarea><br>

                      <label for="about_section1_logo_title"><b>Logo Title:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Quote" id="about_section1_logo_title" value="<?php //echo $about_section1_data[20]->element_content;?>" required><br>
                      <label for="about_section1_logo_text"><b>Logo Text:</b></label>
                      <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_logo_text" required><?php //echo $about_section1_data[21]->element_content;?></textarea><br>

                      <label for="about_section1_boldtext1"><b>Bold Text 1:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_boldtext1" value="<?php //echo $about_section1_data[2]->element_content;?>" required><br>
                      <label for="about_section1_boldtext2"><b>Bold Text 2:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_boldtext2" value="<?php //echo $about_section1_data[3]->element_content;?>" required><br>
                      <label for="about_section1_boldtext3"><b>Bold Text 3:</b></label>
                      <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_boldtext3" value="<?php //echo $about_section1_data[4]->element_content;?>" required><br>

                      <label for="about_section1_mission_text"><b>Mission Text:</b></label>
                      <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_mission_text" required><?php //echo $about_section1_data[5]->element_content;?></textarea><br>
                      <label for="about_section1_vision_text"><b>Vision Text:</b></label>
                      <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_vision_text" required><?php //echo $about_section1_data[6]->element_content;?></textarea><br>

                      <label for="about_section1_values_text"><b>Our Values Text:</b></label>
                      <textarea class="form-control" placeholder="Enter Text" rows="3" id="about_section1_values_text" required><?php //echo $about_section1_data[7]->element_content;?></textarea><br>

                      <div class="row">
                        <div class="col-md-6">
                          <label for="about_section1_value1_title"><b>Value 1 Title:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Title" id="about_section1_value1_title" value="<?php //echo $about_section1_data[8]->element_content;?>" required>
                        </div>
                        <div class="col-md-6">
                          <label for="about_section1_value1_text"><b>Value 1 Text:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_value1_text" value="<?php //echo $about_section1_data[9]->element_content;?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label for="about_section1_value2_title"><b>Value 2 Title:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Title" id="about_section1_value2_title" value="<?php //echo $about_section1_data[10]->element_content;?>" required>
                        </div>
                        <div class="col-md-6">
                          <label for="about_section1_value2_text"><b>Value 2 Text:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_value2_text" value="<?php //echo $about_section1_data[11]->element_content;?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label for="about_section1_value3_title"><b>Value 3 Title:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Title" id="about_section1_value3_title" value="<?php //echo $about_section1_data[12]->element_content;?>" required>
                        </div>
                        <div class="col-md-6">
                          <label for="about_section1_value3_text"><b>Value 3 Text:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_value3_text" value="<?php //echo $about_section1_data[13]->element_content;?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label for="about_section1_value4_title"><b>Value 4 Title:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Title" id="about_section1_value4_title" value="<?php //echo $about_section1_data[14]->element_content;?>" required>
                        </div>
                        <div class="col-md-6">
                          <label for="about_section1_value4_text"><b>Value 4 Text:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_value4_text" value="<?php //echo $about_section1_data[15]->element_content;?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label for="about_section1_value5_title"><b>Value 5 Title:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Title" id="about_section1_value5_title" value="<?php //echo $about_section1_data[22]->element_content;?>" required>
                        </div>
                        <div class="col-md-6">
                          <label for="about_section1_value5_text"><b>Value 5 Text:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_value5_text" value="<?php //echo $about_section1_data[23]->element_content;?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label for="about_section1_value6_title"><b>Value 6 Title:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Title" id="about_section1_value6_title" value="<?php //echo $about_section1_data[24]->element_content;?>" required>
                        </div>
                        <div class="col-md-6">
                          <label for="about_section1_value6_text"><b>Value 6 Text:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_value6_text" value="<?php //echo $about_section1_data[25]->element_content;?>" required>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label for="about_section1_value7_title"><b>Value 7 Title:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Title" id="about_section1_value7_title" value="<?php //echo $about_section1_data[26]->element_content;?>" required>
                        </div>
                        <div class="col-md-6">
                          <label for="about_section1_value7_text"><b>Value 7 Text:</b></label>
                          <input type="text" class="form-control" placeholder="Enter Text" id="about_section1_value7_text" value="<?php //echo $about_section1_data[27]->element_content;?>" required>
                        </div>
                      </div>

                      <br><br>


            <div class="row">
            <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">

                  </div>
                </div>
              </div>

                </form>
              </div>


              <div class="modal fade" id="exampleModal3">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="about_section1_name_edit"><b>Name:</b></label>
                      <input type="hidden" id="about_section1_edit_id" value="">
                      <input type="text" class="form-control" placeholder="Enter text" id="about_section1_name_edit" required><br>
                      <label for="about_section1_pic_edit"><b>Choose image/png, image/jpg, image/jpeg"(225x225):</b></label>
                      <img src="#" id="show_pic2" width="150px;" style="display: none;"><br>
                      <input type="file" id="about_section1_pic_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic2').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="about_section1_edit()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="about_section1_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>


                  </div>
                </div>
              </div>

                </form>
              </div>
                    </tbody>
                  </table>
            </form>
              </div>



              <div class="modal fade" id="exampleModal3">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Add Year in Timeline</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">

                      <label for="home_timeline_year">Year:</label>
                      <input type="text" class="form-control" placeholder="Enter year" required id="home_timeline_year">
                      <label for="home_timeline_text">Text:</label>
                      <textarea class="form-control" placeholder="Enter text" rows="3" id="home_timeline_text" required></textarea>

                      <button type="submit" class="btn btn-success" onclick="home_timeline_year_add()">Add</button>
                      <p style="color: red; font-size: 15px;"><b id="home_timeline_error"></b></p>
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
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                        <input type="hidden" name="home_timeline_id_edit" id="home_timeline_id_edit">

                      <label for="home_timeline_year_edit">Year:</label>
                      <input type="text" class="form-control" placeholder="Enter year" required id="home_timeline_year_edit">
                      <label for="home_timeline_text_edit">Text:</label>
                      <textarea class="form-control" placeholder="Enter text" rows="3" id="home_timeline_text_edit" required></textarea>

                      <button type="submit" class="btn btn-success" onclick="home_timeline_year_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="about_section5_error_edit"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->

                        <?php
                        if(isset($home_section3_pic_data)){
                          foreach ($home_section3_pic_data as $key => $val) {
                            echo '<div class="col-md-6">
                                    <div class="card card-event">
                                      <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                                      <div class="card-footer tx-13">
                                        <span class="tx-color-03"></span>
                                        <span class="del-icon">
                                          <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal5" onclick="home_section3_pic_data('.$val->img_id.')"></i>
                                        </span>
                                      </div>
                                    </div>
                                  </div>';
                            if(($key+1)%2==0){
                              echo '</div><div class="row row-sm mg-b-25 crd">';
                            }
                          }
                        }
                        else{
                          echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                        }
                        ?>
                          </div>
                        </div>
                      </div>

                </form>
              </div>



              <div class="modal fade" id="exampleModal5">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Icons</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="home_section3_image_edit_id" value="">
                      <label for="home_section3_image_edit"><b>Choose Image(1280x500):</b></label>
                      <img src="#" id="show_pic2" width="150px;" style="display: none;"><br>
                      <input type="file" id="home_section3_image_edit" accept="image/*" onchange="document.getElementById('show_pic2').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="home_section3_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="home_section3_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->

                <?php
                if(isset($section5_pic_data)){
                  foreach ($section5_pic_data as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal6" onclick="section5_image_edit_data('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>

                </form>
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
                      <input type="hidden" id="section5_image_edit_id" value="">
                      <label for="section5_image_edit"><b>Choose Image(1226x611):</b></label><br>
                      <img src="#" id="show_pic5" width="150px;" style="display: none;"><br>
                      <input type="file" id="section5_image_edit" accept="image/*" onchange="document.getElementById('show_pic5').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section5_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section5_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->


                      <?php
                      if(isset($section6_pic_data)){
                        foreach ($section6_pic_data as $key => $val) {
                          ?>
                            <tr>
                              <td><?php //echo $val->img_title;?></td>
                              <td><img src="<?php //echo base_url();?>uploads/<?php //echo $val->img_link;?>" width="50px;"></td>
                              <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal7" onclick="section6_image_edit_data('<?php //echo $val->img_id;?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                            </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>

                </form>
              </div>


              <div class="modal fade" id="exampleModal7">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <label for="section6_image_text"><b>Icon Title:</b></label>
                      <input type="hidden" id="section6_image_edit_id" value="">
                      <input type="text" class="form-control" placeholder="Enter text" id="section6_image_text" required><br>
                      <label for="section6_image_edit"><b>Choose Image(306x306):</b></label><br>
                      <img src="#" id="show_pic6" width="150px;" style="display: none;"><br>
                      <input type="file" id="section6_image_edit" accept="image/*" onchange="document.getElementById('show_pic6').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section6_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section6_icon_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->

                <?php
                if(isset($section7_pic_data)){
                  foreach ($section7_pic_data as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal8" onclick="section7_image_edit_data('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>

                </form>
              </div>


              <div class="modal fade" id="exampleModal8">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="section7_image_edit_id" value="">
                      <label for="section7_image_edit"><b>Choose Image(470x314):</b></label><br>
                      <img src="#" id="show_pic7" width="150px;" style="display: none;"><br>
                      <input type="file" id="section7_image_edit" accept="image/*" onchange="document.getElementById('show_pic7').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section7_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section7_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->



                      <?php
                      if(isset($section8_pic_data)){
                        foreach ($section8_pic_data as $key => $val) {
                          ?>
                            <tr>
                              <td><?php //echo $val->img_title;?></td>
                              <td><img src="<?php //echo base_url();?>uploads/<?php //echo $val->img_link;?>" width="100px;"></td>
                              <td><?php //echo $val->img_text;?></td>
                              <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal9" onclick="section8_image_edit_data('<?php //echo $val->img_id;?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                            </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>

                </form>
              </div>


              <div class="modal fade" id="exampleModal9">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Article</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                        <label for="section8_article_title"><b>Article Title:</b></label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section8_article_title" required>
                        <label for="section8_article_text"><b>Article Text:</b></label>
                        <textarea class="form-control" placeholder="Enter Text" rows="2" id="section8_article_text" required></textarea>
                      <input type="hidden" id="section8_article_edit_id" value="">
                      <label for="section8_article_edit"><b>Choose Image(455x275):</b></label>
                      <img src="#" id="show_pic8" width="150px;" style="display: none;"><br>
                      <input type="file" id="section8_article_edit" accept="image/*" onchange="document.getElementById('show_pic8').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section8_article_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section8_article_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>

                      <?php
                      if(isset($section9_pic_data)){
                        foreach ($section9_pic_data as $key => $val) {
                          ?>
                            <tr>
                              <td><?php //echo $val->img_title;?></td>
                              <td><img src="<?php //echo base_url();?>uploads/<?php //echo $val->img_link;?>" width="100px;"></td>
                              <td><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal10" onclick="section9_image_edit_data('<?php //echo $val->img_id;?>')"><i class="fa fa-pencil" aria-hidden="true"></i></button></td>
                            </tr>
                          <?php
                        }
                      }
                      ?>
                    </tbody>
                  </table>

                </form>
              </div>


              <div class="modal fade" id="exampleModal10">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                        <label for="section9_image_title"><b>Image Title:</b></label>
                        <input type="text" class="form-control" placeholder="Enter title" id="section9_image_title">
                      <input type="hidden" id="section9_image_edit_id" value="">
                      <label for="section9_image_edit"><b>Choose Image(150x80):</b></label>
                      <img src="#" id="show_pic9" width="150px;" style="display: none;"><br>
                      <input type="file" id="section9_image_edit" accept="image/*" onchange="document.getElementById('show_pic9').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section9_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section9_article_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div> -->

                <?php
                if(isset($section10_pic_data)){
                  foreach ($section10_pic_data as $key => $val) {
                    echo '<div class="col-md-6">
                            <div class="card card-event">
                              <img src="'.base_url().'/uploads/'.$val->img_link.'" class="card-img-top" alt="">
                              <div class="card-footer tx-13">
                                <span class="tx-color-03"></span>
                                <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal11" onclick="section10_image_edit_data('.$val->img_id.')"></i>
                                </span>
                              </div>
                            </div>
                          </div>';
                    if(($key+1)%2==0){
                      echo '</div><div class="row row-sm mg-b-25 crd">';
                    }
                  }
                }
                else{
                  echo '<div class="col-md-12"><center><h3>No Data Available !</h3></center></div>';
                }
                ?>
                  </div>
                </div>
              </div>

                </form>
              </div>


              <div class="modal fade" id="exampleModal11">
                <div class="modal-dialog">
                  <div class="modal-content">

                    <div class="modal-header">
                      <h4 class="modal-title">Update Image</h4>
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <div class="modal-body">
                      <form class="form" action="" onsubmit="return false">
                      <input type="hidden" id="section10_image_edit_id" value="">
                      <label for="section10_image_edit"><b>Choose Image(1226x793):</b></label><br>
                      <img src="#" id="show_pic10" width="150px;" style="display: none;"><br>
                      <input type="file" id="section10_image_edit" accept="image/*" onchange="document.getElementById('show_pic10').src = window.URL.createObjectURL(this.files[0])"><br>
                      <button type="submit" class="btn btn-success" onclick="section10_image_update()">Update</button>
                      <p style="color: red; font-size: 15px;"><b id="section10_image_error"></b></p>
                      </form>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>

                </div>

              </div>

            </div><!-- media-body -->

          </div><!-- media -->

        </div><!-- container -->

      </div><!-- content-body -->

      
    </div><!-- content -->



<script type="text/javascript">


</script>
@include('backend.layouts.footer')
