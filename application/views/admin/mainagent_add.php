<form action="<?php echo base_url ?>mainagent_action" method="POST">
    <section id="main-content">
          <section class="wrapper">
            <div class="col-lg-12">
              <section class="panel">
                <div class="panel-body">
                      <div class="tab-content">
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
                                               <!-- <option selected>Select Agent</option> -->
                                               <?php foreach ($usertype as $row) {?>
                                             <option selected="" value="<?php echo $row->user_id ?>"><?php echo $row->usertype ?></option>
                                           <?php } ?>

                                            </select>
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
                                            <input  type="tel" class="form-control" id ="num"   name="phone" required=""  minlength="10" return false;" ><span id="message"></span>
                                        </div>
                                    </div>

                                    <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Email<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="email" class="form-control" id ="phtypeoto"  name="email" required="">
                                        </div>
                                    </div>
                                        <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Address<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <textarea type="text" class="form-control" id ="phtypeoto"  name="address" required=""></textarea>
                                        </div>
                                    </div>
                                
                              <center> <button type="submit" name="submit" class="btn btn-info" style="margin-top: 20px;">SAVE</button></center>
                            </div>
                          </div>
                        </div>
                    </section>
                  </div>
              
                </section>
              </section>


                              </form>


<script type="text/javascript">
         
           function phoneno(){          
            $('#phone').keypress(function(e) {
                var a = [];
                var k = e.which;

                for (i = 48; i < 58; i++)
                    a.push(i);

                if (!(a.indexOf(k)>=0))
                    e.preventDefault();
            });
        }
      
</script>

</html>
