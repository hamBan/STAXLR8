<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Doctor Login</title>
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css"
    />
    <link rel="stylesheet" href="{{asset("assets/css/main.min.css")}}" />
  </head>
  <body>
    <section class="logsignWrapper">
      <div class="sectionWrapper">
        <div class="loginWrap bg-white">
          <div class="loginFormWrap">
            <div class="loginForm logsign">
                @if(session()->has('success'))
                    <div>{{$success}}</div>
                @endif
              <h3 class="bgcolor-gradient">Sign in to xyz</h3>
              <form action="{{__("/doctor-login")}}" method="post">
                  @csrf
                <div class="emailIcon formElement">
                  <input
                    type="email"
                    name=""
                    id=""
                    placeholder="Email"
                    class=""
                  />
                </div>
                <div class="formElement passwordIcon">
                  <input type="password" name="" placeholder="Password" id="" />
                </div>
                <a
                  href="javascript:void(0);"
                  data-toggle="modal"
                  data-target="#passwordModal"
                >
                  <span>Forgot Password</span> ?</a
                >
                <input
                  type="submit"
                  value="Sign In"
                  class="submitBtn bgcolor-gradient text-uppercase"
                />
              </form>
            </div>
            <div class="loginText"></div>
          </div>
          <div class="contentWrap bgcolor-gradient">
            <div class="content">
              <h3 class="d-none d-md-block">Hello, Doctor!</h3>
              <p>Enter your personal details and start journey with us</p>
              <a href="{{__("/signup")}}" class="changeFormBtn">Sign Up</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Modal -->
    <div
      class="modal fade"
      id="passwordModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="passwordModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header text-center border-0">
            <h5 class="modal-title bgcolor-gradient" id="passwordModalLabel">
              Forgot Password?
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="#">
              <div class="row no-gutters">
                <div class="col-9">
                  <div class="emailIcon formElement">
                    <input
                      type="email"
                      name=""
                      id=""
                      placeholder="Email"
                      class=""
                    />
                  </div>
                </div>
                <div class="col-3">
                  <input
                    type="submit"
                    value="Submit"
                    class="submitBtn bgcolor-gradient text-uppercase"
                  />
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.js"></script>
    <script>
      $("#passwordModal").on("show.bs.modal", function(event) {
        var button = $(event.relatedTarget); // Button that triggered the modal
        var recipient = button.data("whatever"); // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this);
        // modal.find(".modal-title").text("New message to " + recipient);
        //modal.find(".modal-body input").val(recipient);
      });
    </script>
  </body>
</html>
