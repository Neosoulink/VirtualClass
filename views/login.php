<body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="?module=backs&section=login" target="main_fram"  class="uploadForm">
              <h1>Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="user_username"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="user_password"/>
              </div>
              <div>
                <input type="submit" class="btn btn-default submit lal" value="Log in" onclick="uploadLoading()">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Are you admin ?
                  <a href="#signup" class="to_register"> Go admin login </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="web/images/vc_logo_0.jpg" alt="logo vc" class="img-circle" style="height: 35px;width: 35px;margin-bottom: 5px;"> Virtual Class Pro</h1>
                  <p>©2019 All Rights Reserved. Virtual Class Pro with NeoSafari.corp. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form  method="post" class="uploadForm">
              <h1>Admin Login Form</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username or email" required="" name="admin_usermame" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="admin_password"/>
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Are you a siple user ?
                  <a href="#signin" class="to_register"> Go to connect </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="web/images/vc_logo_0.jpg" alt="logo vc" class="img-circle" style="height: 35px;width: 35px;margin-bottom: 5px;"> Virtual Class Pro</h1>
                  <p>©2019 All Rights Reserved. Virtual Class Pro with NeoSafari.corp. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>