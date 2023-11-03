@extends('frontend.layouts.main')
@section('main-container')

<!-- slider Area Start-->
<div class="slider-area slider-about-area-desktop">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('frontend/uploads/1604855240.webp')}}" style="background-size: cover;background-position: center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2> </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->


<!-- slider Area Start-->
<div class="slider-area slider-about-area-mobile">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('frontend/uploads/1610618014.webp')}}" style="background-size: cover;background-position: center">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-cap text-center">
                        <h2> </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- slider Area End-->


<!-- Start Align Area -->
<div class="whole-wrap culture-bottom">
    <div class="container box_1170">
    <br /><br />
        <h3 align="center" class="bold-text" style="font-size:38px;">Gallery</h3>
        <br />
        <div class="section-top-border">
            <div class="container con-more-sec">
                <div class="row" style="text-align: center;margin: 0 auto;">
                    <div class="col-md-12">
<ul class="nav nav-pills pills-dark mb-3 left-padding" id="pills-tab" role="tablist">
  <li class="nav-item">
     <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Machines</a>
  </li>
  <li class="nav-item">
     <a class="nav-link " id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">People</a>
  </li>
  
</ul>
</div>
<div class="col-md-12">
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  <!-- <div class="col-md-6 padding-culture">
    <a href="'.base_url().'uploads/1620726209.jpg" class="img-pop-up">
        <div class="single-gallery-image" style="background: url(".base_url()."uploads/1620726209.jpg);"></div>
        <h5 align="center" style="font-size: 17px;margin-top: 15px;">'.$val->gallery_img_text.'</h5>
    </a>
  </div> -->

    <div class="row"><div class="col-md-6 padding-culture">
                        <a href="{{asset('frontend/uploads/1620726209.jpg"')}} class="img-pop-up">
                          <div class="single-gallery-image" style="background: url({{asset('frontend/uploads/1620726209.jpg)')}};"></div>
                          <h5 align="center" style="font-size: 17px;margin-top: 15px;">Germ Dryer</h5>
                        </a>
                      </div><div class="col-md-6 padding-culture">
                        <a href="{{asset('frontend/uploads/1604773949.webp')}}" class="img-pop-up">
                          <div class="single-gallery-image" style="background: url({{asset('frontend/uploads/1604773949.webp')}});"></div>
                          <h5 align="center" style="font-size: 17px;margin-top: 15px;">Hydrocyclone</h5>
                        </a>
                      </div></div><div class="row"><div class="col-md-6 padding-culture">
                        <a href="{{asset('frontend/uploads/1620726460.jpg"')}} class="img-pop-up">
                          <div class="single-gallery-image" style="background: url({{asset('frontend/uploads/1620726460.jpg)')}};"></div>
                          <h5 align="center" style="font-size: 17px;margin-top: 15px;">PS/GT</h5>
                        </a>
                      </div><div class="col-md-6 padding-culture">
                        <a href="{{asset('frontend/uploads/1620729984.jpg"')}} class="img-pop-up">
                          <div class="single-gallery-image" style="background: url({{asset('frontend/uploads/1620729984.jpg)')}};"></div>
                          <h5 align="center" style="font-size: 17px;margin-top: 15px;">Production House</h5>
                        </a>
                      </div></div>

                  <!-- <div class="row">
                  <div class="col-md-6 padding-culture">
                    <a href="https://regaal.in/uploads/1620726209.jpg" class="img-pop-up">
                      <div class="single-gallery-image" style="background: url(https://regaal.in/uploads/1620726209.jpg);"></div>
                      <h5 align="center" style="font-size: 17px;margin-top: 15px;">Germ Dryer</h5>
                    </a>
                  </div>
                  <div class="col-md-6 padding-culture">
                    <a href="https://regaal.in/uploads/1604773949.webp" class="img-pop-up">
                      <div class="single-gallery-image" style="background: url(https://regaal.in/uploads/1604773949.webp);"></div>
                      <h5 align="center" style="font-size: 17px;margin-top: 15px;">Hydrocyclone</h5>
                    </a>
                  </div>
                  </div> -->

        <!-- <div align="center" style="float:right">
            <nav aria-label="...">
                
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: machines_links</p>
<p>Filename: views/gallery.php</p>
<p>Line Number: 105</p>


<p>Backtrace:</p>

    

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/application/modules/front/views/gallery.php<br />
        Line: 105<br />
        Function: _error_handler			</p>

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/application/third_party/MX/Loader.php<br />
        Line: 363<br />
        Function: include			</p>

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/application/third_party/MX/Loader.php<br />
        Line: 305<br />
        Function: _ci_load			</p>

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/application/modules/front/controllers/Front.php<br />
        Line: 232<br />
        Function: view			</p>

    

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/index.php<br />
        Line: 315<br />
        Function: require_once			</p>

    


</div>                </nav>
        </div> -->
                        <div align="center" style="float:right; margin-top: 25px; margin-right: 100px;">
                <nav aria-label="...">
                    <ul class='pagination list--reset'>
                        <li class="page-item active"><span class="page-link">1</span></li><li class="page-item"><a href="#"><span class="page-link">2</span></a></li><li class="page-item"><a href="#"><span class="page-link">3</span></a></li><li class="page-item"><a href="#"><span class="page-link">Next</span></a></li></ul>
                </nav>
            </div>
                        
 
  </div>
  <div class="tab-pane fade show " id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

    <h6>No Images Available!</h6>        
    <!-- <div class="row" style="margin-top:30px;">
        <div class="col-md-1"></div>
        <div class="col-md-5 para-gallery-right">
            <div class="card card-pink overflow-hidden shadow bg-white border-0 px-0">
               <div class="card-shape">
               <img src="assets/front/img/gallery/500X300.png" class="card-img-top card-img" >                   
              </div>
             
              <div class="card-footer">               
                <p>Group Image1 </p>             
              </div>
            </div>
        </div>
        <div class="col-md-5 para-gallery-right para-gallery-top" >
            <div class="card card-pink h-100 overflow-hidden shadow bg-white border-0 px-0">
               <div class="card-shape">
               <img src="assets/front/img/gallery/500X300.png" class="card-img-top card-img" >                   
              </div>
             
              <div class="card-footer">           
                <p>Group Image 2</p>                 
              </div>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div> -->


        <!-- <div align="center" style="float:right; margin-top: 50px;">
            <nav aria-label="...">
                
<div style="border:1px solid #990000;padding-left:20px;margin:0 0 10px 0;">

<h4>A PHP Error was encountered</h4>

<p>Severity: Notice</p>
<p>Message:  Undefined variable: people_links</p>
<p>Filename: views/gallery.php</p>
<p>Line Number: 190</p>


<p>Backtrace:</p>

    

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/application/modules/front/views/gallery.php<br />
        Line: 190<br />
        Function: _error_handler			</p>

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/application/third_party/MX/Loader.php<br />
        Line: 363<br />
        Function: include			</p>

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/application/third_party/MX/Loader.php<br />
        Line: 305<br />
        Function: _ci_load			</p>

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/application/modules/front/controllers/Front.php<br />
        Line: 232<br />
        Function: view			</p>

    

    

    
        <p style="margin-left:10px">
        File: /home4/ivdispla/public_html/demo/regaal_dev_new/index.php<br />
        Line: 315<br />
        Function: require_once			</p>

    


</div>                </nav>
        </div> -->
        



  </div>
</div>
</div>  
                </div>
            </div>
        </div>
        
    </div>
</div>
<!-- End Align Area -->
{{-- 
<script type="text/javascript">

function set_cat(cat_id){
var base_url = 'https://demo.ivdisplays.net/regaal_dev_new/';
$.ajax({
type: "POST",
url: base_url + 'front/front/set_cat',
data: {cat_id: cat_id},
success:
    function(data){
      window.location.reload();
      // $('#gallery_div').html(data);
    }
});
}

</script> --}}

@endsection
