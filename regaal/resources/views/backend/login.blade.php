@include('backend.layouts.header')
{{-- @include('backend.layouts.aside') --}}
  

<div class="loginSec">
    <div class="loginHeader clearfix">
        <div class="log">
            <img src="{{ asset('backend/img/logo/logo.webp') }}" alt="">
        </div>
    </div>
    @if ($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div id="resulterror" style="display: none;">
        <div class="alert alert-danger"></div>
    </div>

    <div class="log-back text-center">
        <div class="logSec">
            <div id="username_validation"></div>
            <div class="logSecHead clearfix">
                <div class="iconEducation"><i class="fa fa-lock"></i></div>
                <div class="secureEducation">HIGH SECURED LOGIN</div>
            </div>
            <div class="loginBody">
                <form method="POST" name="loginForm" onsubmit="return admin_login()">
                    @csrf {{-- Add the CSRF token field --}}
                    <div class="col-md-12 eform-top">
                        <div class "input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input id="email" type="text" class="form-control uid" name="email" placeholder="Email" value="">
                        </div>
                        <p style="color: red;" id="error_email"></p>
                    </div>
                    <div class="col-md-12 eform-top">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <input id="password" type="password" class="form-control demos" name="password" placeholder="Password" value="" autocomplete="off">
                        </div>
                        <p style="color: red;" id="error_password"></p>
                    </div>
                    <div class="col-md-12 eform-top">
                        <div class="input-group">
                            <button type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#email').focus();

    function admin_login() {
        $('#error_email').html('');
        $('#error_password').html('');

        var email = $("#email").val();
        var password = $("#password").val();

        if (email === '' || password === '') {
            
            if (email === '') {
                $('#error_email').text("Email is required.");
            }
            if (password === '') {
                $('#error_password').text("Password is required.");
            }
            return false;
        }

        $.ajax({
            type: "POST",
            url: "{{ route('admin.login.post') }}",
            data: {
                _token: "{{ csrf_token() }}", 
                email: email,
                password: password,
                target: 'admin',
            },
            success: function (data) {
               
                if (data.status === 'failed') {
                    console.log(data);
                    // alert(data.msg);

                     $('#resulterror .alert').html(data.msg);
                    $('#resulterror').show();
                    setTimeout(function() {
                        $('#resulterror').hide(); 
                    }, 3000);
                } else {
                    window.location.href = "{{ url('/admin/home') }}"; 
                                       
                }

            },
        });
        return false;
    }

    $('#email, #password').on('keypress', function (event) {
        if (event.which === 13) {
            event.preventDefault(); 
            if ($(this).attr('id') === 'email') {
                $("#password").focus();
            } else {
                admin_login();
            }
        }
    });
</script>
