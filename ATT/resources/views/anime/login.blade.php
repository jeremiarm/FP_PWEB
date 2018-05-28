      @extends('semantic-ui.master')
      @section('title')
      Login
      @stop
      @section('css')
      <style type="text/css">

       body{
          background: url("assets/image/bg2.jpg") no-repeat fixed;
          background-size: cover; 
          margin-left: 0px;
          margin-right: 0px;
        }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
    #plus{
      margin-top: 10px;
    }

  </style>
  @stop
  @section('content')
  <div class="ui middle aligned center aligned grid">
    <div class="column">
      <h2 class="ui image header">
        <img src ="assets/image/logo.png" class="image">
        <div class="content" style="color: white;">
          Login to your account
        </div>
      </h2>
      <form action="https://s.codepen.io/voltron2112/debug/PqrEPM?" method="get" class="ui large form">
        <div class="ui stacked secondary  segment">
          <div class="field">
            <div class="ui left icon input">
              <i class="user icon"></i>
              <input type="text" name="email" placeholder="E-mail address">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="lock icon"></i>
              <input type="password" name="password" placeholder="Password">
            </div>
          </div>
          <div class="ui fluid large blue submit button">Login</div>
          <div class="ui checkbox" id = "plus">
            <input type="checkbox" name="remember">
            <label>Remember me!</label>
          </div>

        </div>
        <div class="ui error message"></div>

      </form>

      <div class="ui message">
        New to us? <a href="{{route('register')}}">Register</a>
      </div>
    </div>
  </div>

  @stop
  @section('script')
  <script type="text/javascript">   $(document)
  .ready(function() {
    $('.ui.form')
    .form({
      fields: {
        email: {
          identifier  : 'email',
          rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your e-mail'
          },
          {
            type   : 'email',
            prompt : 'Please enter a valid e-mail'
          }
          ]
        },
        password: {
          identifier  : 'password',
          rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your password'
          },
          {
            type   : 'length[6]',
            prompt : 'Your password must be at least 6 characters'
          }
          ]
        }
      }
    })
    ;
  })
  ;
</script>
@stop