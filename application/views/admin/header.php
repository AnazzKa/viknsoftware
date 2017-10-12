
<header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="<?php echo base_url ?>Dashboard" class="logo">VIKN<span>SOFT</span></a>
    <!--logo end-->

    <div class="top-nav ">
        <!--search & user info start-->
        <ul class="nav pull-right top-menu">

            <!-- user login dropdown start-->
            <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <img alt="" src="<?php echo base_url ?>assets/admin/img/avatar1_small.jpg">
                    <span class="username"> <?php echo $this->session->userdata("NAME") ?></span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu extended logout">
                    <div class="log-arrow-up"></div>

                       <center> <li><a href="<?php echo base_url ?>logout"><i class="fa fa-key"></i> Log Out</a></li>
                     <li><a href="<?php echo base_url ?>change_password"><i class="fa fa-"></i>Change Password</a></li></center>
                </ul>
            </li>
            <!-- user login dropdown end -->
        </ul>
        <!--search & user info end-->
    </div>
</header>
