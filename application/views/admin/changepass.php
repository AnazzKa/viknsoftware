


      <section id="main-content">
          <section class="wrapper">
              
            <div class="col-lg-8">

                      <section class="panel">

                          <section class="panel">
                        
                        <form action="<?php echo base_url; ?>pass_action" method="POST">
                          <div class="panel-body">
                            <h4><?php echo $this->session->userdata("msg") ?></h4>
                              <div class="tab-content">
                                  <!--strt driver-->
                                  <div id="home" class="tab-pane active">
                                      <div class="form-group" style="padding: 0 0 30px 0;text-align: center;">
                                         <label class="col-sm-4 col-sm-4 control-label"></label> 
                                         <label class="col-sm-4 col-sm-4 control-label" style="color: #0088CC; font-size: 22px;">Change Password</label> 
                                         <label class="col-sm-4 col-sm-4 control-label"></label> 
                                      </div>
                                  
                                        <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Old<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" class="form-control" id =""  name="old" required="">
                                        </div>
                                    </div>

                                      <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">New<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" class="form-control" id ="new"  name="new" required="">
                                        </div>
                                    </div>

                                      <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">confirm<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" class="form-control" id ="confirm"  name="confirm" required="">
                                        </div>
                                    </div>
                                     
                                    </div>
                                  <!--end rto -->
                              </div>
                              <center> <button type="submit" name="submit" id="btnSubmit" class="btn btn-info" style="margin-top: 20px;">SAVE</button></center>
                            
                          </div>
                              </form>
                      </section>




                      </section>

                  </div>


              
          </section>
                    <section class="footer">
                         BrandingSparrow Copyright ,2016
                   </section>  
      </section>
      
                  
    
  <!-- </section> -->
    </body>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#new").val();
            var confirmPassword = $("#confirm").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                // $(this).val() = ''; 
                // return false;

            }
            return true;
        });
    });
</script>
</html>
