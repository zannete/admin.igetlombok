@extends("layouts.app")

@section("content")
  <div class="page-content-inner single-page-login-beta" style="background-image: url(../assets/common/img/temp/login/6.jpg)">
    <!-- Login Beta Page -->
    <div class="single-page-block-header">
      <div class="row">
        <div class="col-lg-4">
          <div class="logo">
            <a href="javascript: history.back();">
              <img src="{{ asset("assets/common/img/logo-inverse.png ") }}" alt="Clean UI Admin Template" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="single-page-block">
      <div class="row">
        <div class="col-xl-12">
          <div class="single-page-block-inner" style="height: 100%;">
            <div class="single-page-block-form">
              <h3 class="text-center">
                Good Morning
                <span class="small">This day will be great!</span>
              </h3>
              <br />
              {!! Form::open(["action" => "LoginController@login", "method" => "POST", "id" => "form-validation", "name" => "form-validation"]) !!}
                <div class="form-group">
                  {{ Form::label("email", "Email", ["class" => "form-label"]) }}
                  {{ Form::email("validation[email]", "", ["id" => "validation-email", "class" => "form-control", "placeholder" => "yourname@example.com", "data-validation" => "[EMAIL]"]) }}
                </div>
                <div class="form-group">
                  {{ Form::label("password", "Password", ["class" => "form-label"]) }}
                  {{ Form::password("validation[password]", ["class" => "form-control password", "id" => "validation-password", "data-validation" => "[L>=6]", "data-validation-message" => "$ must be at least 6 characters", "placeholder" => "Password"]) }}
                </div>
                <div class="form-actions">
                  <button type="submit" class="btn btn-primary width-150 margin-inline">Sign In</button>
                </div>
              {!! Form::close() !!}
            </div>
            <div class="single-page-block-sidebar" style="background-image: url(../assets/common/img/temp/login/7.jpg)">
              <div class="single-page-block-sidebar--shadow">
              </div>
              <div class="single-page-block-sidebar--place">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="single-page-block-footer text-center">
      <ul class="list-unstyled list-inline">
      </ul>
    </div>
    <!-- End Login Beta Page -->
  </div>
@endsection

@section("additionalJS")
  <script>
    $(function () {
      // Add class to body for change layout settings
      $('body').addClass('single-page');
      // Form Validation
      $('#form-validation').validate({
        submit: {
          settings: {
            inputContainer: '.form-group',
            errorListClass: 'form-control-error',
            errorClass: 'has-danger'
          }
        }
      });

      // Show/Hide Password
      $('.password').password({
        eyeClass: '',
        eyeOpenClass: 'icmn-eye',
        eyeCloseClass: 'icmn-eye-blocked'
      });

    });
  </script>
@endsection