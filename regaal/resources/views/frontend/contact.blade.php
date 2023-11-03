@extends('frontend.layouts.main')
@section('main-container')

 <!-- slider Area Start-->
 <div class="slider-area slider-about-area-desktop">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('frontend/uploads/1604751384.webp')}}" style="background-size: cover;background-position: center">
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


<div class="slider-area slider-about-area-mobile">
    <!-- Mobile Menu -->
    <div class="single-slider slider-height2 d-flex align-items-center" data-background="{{asset('frontend/uploads/1610617045.webp')}}" style="background-size: cover;background-position: center">
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

<!-- ================ contact section start ================= -->
<section class="contact-section">
        <div class="container">
            


            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-6">
                    <form class="form-contact contact_form" action="#" method="post" id="contactForm" novalidate="novalidate" onsubmit="return check_sub()">
                        {{-- action="https://demo.ivdisplays.net/regaal_dev_new/send_email" --}}
                        <div class="row">
                            <div class="col-12">
                            
                                <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control" name="message" id="message" cols="28" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message"></textarea>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Send</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>HEAD OFFICE:</h3>
                            <p>Convergence Contact Center<br />
D2/2, Block EP&GP, 7th Floor<br />
Sector 5, Bidhannagar<br />
Saltlake<br />
Kolkata - 700091<br />
PH: 7605039041 / 6289292160</p>
                        </div>
                    </div>
                    
                    
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>FACTORY:</h3>
                            <p>BHATGAON, GALGALIA CHECK POST<br />
THAKURGANJ BLOCK<br />
DIST - KISHANGANJ<br />
BIHAR - 855106<br />
PH: 0659232011</p>
                        </div>
                    </div>
                    
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>CITY OFFICE:</h3>
                            <p>G-603, 6TH FLOOR<br />
TOWER NO. 4 CITY CENTER<br />
MATIGARA, SILIGURI<br />
PINCODE - 734010<br />
PH: +91 3532576896</p>
                        </div>
                    </div>
                    <!--<div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>Mon to Fri 9am to 6pm</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>Send us your query anytime!</p>
                        </div>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
<!-- ================ contact section end ================= -->
<script type="text/javascript">
function check_sub(){
// alert($('#job').val());
if($('#name').val()=='' || $('#email').val()=='' || $('#subject').val()=='' || $('#message').val()==''){
    // $('#job_text').css('display','block');
    return false;
}
else{
    // $('#sub_loader').css('display','block');
    // $('#contactForm').submit();
    var base_url = 'https://demo.ivdisplays.net/regaal_dev_new/';
    // var attach = $('#attach').prop('files')[0];
    var form_data = new FormData();
    // form_data.append('attach', attach);
    form_data.append('name', $('#name').val());
    form_data.append('email', $('#email').val());
    form_data.append('subject', $('#subject').val());
    form_data.append('message', $('#message').val());
    $.ajax({
        type: "POST",
        url: base_url + 'front/send_email',
        data: form_data,
        processData:false,
        contentType:false,
        cache:false,
        success:
            function(data){
                // alert(data);
                window.location.reload();
            }
      });
}
return false;
}
</script>

@endsection
