<form action="<?php echo base_url ?>user_check" method="POST" enctype="multipart/form-data">
    <section id="main-content">
          <section class="wrapper">
            <div class="col-lg-12">
              <section class="panel">
                <div class="panel-body">
                      <div class="tab-content">
                        <?php echo $this->session->userdata("msg"); ?>
                                  <!--strt driver-->
                                  <div id="home" class="tab-pane active">
                                      <div class="form-group" style="padding: 0 0 30px 0;text-align: center;">
                                         <label class="col-sm-4 col-sm-4 control-label"></label> 
                                         <label class="col-sm-4 col-sm-4 control-label" style="color: #0088CC; font-size: 25px;">User Details</label> 
                                         <label class="col-sm-4 col-sm-4 control-label"></label> 
                                      </div>

                         
                                      

                                        <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Select type<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <select type="text" onchange='parentid(this.value);' class="form-control" id ="phtypeoto"  name="type" required="">
                                              <option selected>Select Agent</option>
                                               <?php foreach ($usertype as $row) {?>
                                             <option  value="<?php echo $row->user_id ?>"><?php echo $row->usertype ?></option>
                                           <?php } ?>

                                            </select>
                                        </div>
                                    </div>
                        


                                       
             
                                    <div id="pr" style="display: none;" >
                                     <div class="form-group" id="" style="padding: 16 0 30px 0;">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Select Parent<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <select type="text" class="form-control" id ="phtypeoto"  name="parent_id" >
                                             <option value="">Select parent</option>
                                               <?php foreach ($mainagent as $row) {?>

                                             <option  value="<?php echo $row->userid ?>"><?php echo $row->fname ?></option>
                                           <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                  </div>

                                       <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">First Name<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" class="form-control" id ="phtypeoto"  name="fname" required="">
                                        </div>
                                    </div>
                                     
                                      <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Last Name<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" class="form-control" id ="phtypeoto"  name="lname" required="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Phone<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="tel" class="form-control" id ="phtypeoto" minlength="10"  name="phone" required="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Email<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="email" class="form-control" id ="phtypeoto"  name="email" required="">
                                        </div>
                                    </div>
                                     <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Passowrd<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="password" class="form-control" id ="pass1"  name="" required="">
                                        </div>
                                    </div>
                                     <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Re-type Passowrd<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="password" class="form-control" id ="pass2"  name="password" required="">
                                        </div>
                                    </div>
                                        <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Address<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <textarea type="text" class="form-control" id ="phtypeoto"  name="address" required=""></textarea>
                                        </div>
                                    </div>

                                 <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Profile<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input type="file" class="form-control" id ="phtypeoto"  name="userfile" required="">
                                        </div>
                                    </div>

                              <center> <button type="submit" id="btnSubmit" name="submit" class="btn btn-info" style="margin-top: 20px;">SAVE</button></center>
                            </div>
                          </div>
                        </div>
                    </section>
                  </div>
              
                </section>
              </section>


                              </form>
    </body>
<script type="text/javascript">
function parentid(val){

    var element=document.getElementById('pr');
    if(val=='Select type'||val=='3' ||val=='4')
    element.style.display='block';
    else  
    element.style.display='none';

  
}

</script>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#btnSubmit").click(function () {
            var password = $("#pass1").val();
            var confirmPassword = $("#pass2").val();
            if (password != confirmPassword) {
                alert("Passwords do not match.");
                
                return false;

            }
            return true;
        });
    });
</script>

</html>
