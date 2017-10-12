
  <body class="login-body">
    <div class="container">

    <form class="form-signin" id="form1" name="form1" method="post" action="<?php echo base_url; ?>login_action">
        <h2 class="form-signin-heading">sign in now</h2>
       
        <!--<center><span id='emailerr' style='color:#F00'>   </span></center>-->
        <div id="error_id" class="popover-title"  align="center" style="color:#09C"></div>
        <div class="login-wrap">
        <?php echo $this->session->userdata("msg") ?>
            <div id="error_id" class="popover-title"  align="center" style="color:#09C"></div>
            <input type="text" id="user" name="user" class="form-control" placeholder="Email ID" autofocus>
            <input type="password" id="pass" name="pass" class="form-control" placeholder="Password">
            
            <button class="btn btn-lg btn-login btn-block" name="submit" id="btnsign" type="submit">Sign in</button>
            
            
            

        </div>

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <!--<script src="js/jquery.js"></script>-->
    <!--<script src="js/bootstrap.min.js"></script>-->

  </body>
</html>
