<div class="tab-pane fade show" id="section3" role="tabpane4" aria-labelledby="section3-tab">
  <form class="form" action="" onsubmit="return false">
      <div class="headerText">
          <h4 class="mg-b-25">Environment Section Management</h4>
          <button type="button" class="btn btn-primary" onclick="home_section3_save()">Save</button>
      </div>

      <label for="home_section3_title">Title:</label>
      <input type="text" class="form-control" placeholder="Enter title" id="home_section3_title" value="ENVIRONMENT CONSERVATION AS A DRIVING FORCE :">
      <label for="home_section3_text">Text:</label>
      <textarea class="form-control" placeholder="Enter text" rows="4" id="home_section3_text" required>
          We are one of the first plants in India to have a Zero Liquid Discharge (ZLD) unit within our factory premises.

          As a conscious citizen of the world, we are conscious of our impact on the environment. One of the primary ways we tackle the most pressing global environmental issues is via sustainable waste management practices. This includes reducing waste, reducing water consumption and recycling all the water in our plant, which results in zero water discharge.

          Having a water treatment plant in houses is not only cost-effective in the long run but also makes sure there is never a shortage of water for our processes.
      </textarea>

      <br>
      <h5>Background Image: (Desktop)</h5>

      <div class="row">
          <div class="col-xl-12">
              <div class="row row-sm mg-b-25 crd">
                  <div class="col-md-6">
                      <div class="card card-event">
                          <img src="https://demo.ivdisplays.net/regaal_dev_new//uploads/1648724848.png" class="card-img-top" alt="">
                          <div class="card-footer tx-13">
                              <span class="tx-color-03"></span>
                              <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal5" onclick="home_section3_pic_data_desk(2)"></i>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <br>
      <h5>Background Image: (Mobile)</h5>

      <div class="row">
          <div class="col-xl-12">
              <div class "row row-sm mg-b-25 crd">
                  <div class="col-md-6">
                      <div class="card card-event">
                          <img src="https://demo.ivdisplays.net/regaal_dev_new//uploads/1648724878.png" class="card-img-top" alt="">
                          <div class="card-footer tx-13">
                              <span class="tx-color-03"></span>
                              <span class="del-icon">
                                  <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal5" onclick="home_section3_pic_data_mob(35)"></i>
                              </span>
                          </div>
                      </div>
                  </div>
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
                  <label for="home_section3_image_edit"><b id="type_text_env">Choose Image(1280x500):</b></label>
                  <img src="#" id="show_pic2" width="150px;" style="display: none;"><br>
                  <input type="file" id="home_section3_image_edit" accept="image/png, image/jpg, image/jpeg" onchange="document.getElementById('show_pic2').src = window.URL.createObjectURL(this files[0])"><br>
                  <button type="submit" class="btn btn-success" onclick="home_section3_image_update()">Update</button>
                  <p style="color: red; font-size: 15px;"><b id="home_section3_image_error"></b></p>
              </form>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
      </div>
  </div>
</div>
