<div class="tab-pane fade show" id="banner" role="tabpanel" aria-labelledby="banner-tab">
  <div class="headerText">
      <h4 class="mg-b-25">Desktop Banner Management</h4>
      <button type="button" class="btn btn-warning" onclick="set_type_home('home_desk.php')" data-toggle="modal" data-target="#exampleModal">Upload Desktop Banner</button>
  </div>
  <div class="row">
      <div class="col-xl-12">
          <div class="row row-sm mg-b-25 crd">
              @if(count($home_banner_desk_data) > 0)
                  @for ($i = max(0, count($home_banner_desk_data) - 4); $i < count($home_banner_desk_data); $i++)
                      @php
                          $val = $home_banner_desk_data[$i];
                      @endphp
                      <div class="col-md-6">
                          <div class="card card-event">
                              <img src="{{ asset('backend/img/banner/' . $val->img_link) }}" class="card-img-top" alt="">
                              <div class="card-body tx-13">
                                  <h5>{{ $val->img_text }}</h5>
                              </div>
                              <div class="card-footer tx-13">
                                  <span class="tx-color-03"></span>
                                  <span class="del-icon">
                                      <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal12" data-bannerid="{{ $val->img_id }}" onclick="populateModal({{ $val->img_id }},'home_desk.php')"></i>
                                      @if(count($home_banner_desk_data) > 1)
                                          <i class="fas fa-trash-alt text-danger" title="Delete" onclick="image_del('{{ $val->img_id }}')"></i>
                                      @endif
                                  </span>
                              </div>
                          </div>
                      </div>
                  @endfor
              @else
                  <div class="col-md-12">
                      <center><h3>No Data Available!</h3></center>
                  </div>
              @endif
          </div>
      </div>
  </div>

  <div class="headerText">
      <h4 class="mg-b-25">Mobile Banner Management</h4>
      <button type="button" class="btn btn-warning" onclick="set_type_home('home_mob.php')" data-toggle="modal" data-target="#exampleModal1">Upload Mobile Banner</button>
  </div>

  <div class="row">
      <div class="col-xl-12">
          <div class="row row-sm mg-b-25 crd">
              @if(count($home_banner_mob_data) > 0)
                  @for ($i = max(0, count($home_banner_mob_data) - 4); $i < count($home_banner_mob_data); $i++)
                      @php
                          $val = $home_banner_mob_data[$i];
                      @endphp
                      <div class="col-md-6">
                          <div class="card card-event">
                              <img src="{{ asset('backend/img/banner/' . $val->img_link) }}" class="card-img-top" alt="">
                              <div class="card-body tx-13">
                                  <h5>{{ $val->img_text }}</h5>
                              </div>
                              <div class="card-footer tx-13">
                                  <span class="tx-color-03"></span>
                                  <span class="del-icon">
                                      <i class="fas fa-edit" title="Edit" data-toggle="modal" data-target="#exampleModal121" data-bannerid="{{ $val->img_id }}" onclick="populateModal_mob({{ $val->img_id }},'home_mob.php')"></i>
                                      @if(count($home_banner_mob_data) > 1)
                                          <i class="fas fa-trash-alt text-danger" title="Delete" onclick="image_del('{{ $val->img_id }}')"></i>
                                      @endif
                                  </span>
                              </div>
                          </div>
                      </div>
                  @endfor
              @else
                  <div class="col-md-12">
                      <center><h3>No Data Available!</h3></center>
                  </div>
              @endif
          </div>
      </div>
  </div>
</div>
