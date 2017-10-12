<form action="<?php echo base_url ?>user_update" method="POST">
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
                                         <label class="col-sm-4 col-sm-4 control-label" style="color: #0088CC; font-size: 25px;">User Edit</label> 
                                         <label class="col-sm-4 col-sm-4 control-label"></label> 
                                      </div>

                          <div class="form-group" style="padding: 16 0 30px 0;display: none;">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">ID<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" value="<?php echo $useredit->userid ?>" class="form-control" id ="phtypeoto"  name="ueditid" >
                                        </div>
                                    </div>
                                      
                                        

                                        <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Select type<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <select type="text" onchange='Check(this.value);' class="form-control" id ="phtypeoto"  name="type" required="">
                                              <option value="">Select Agent</option>
                                              

                                      <?php foreach ($usertype as $row) {?>
                                      <option <?php if ($row->user_id==$useredit->type_id) {  ?> SELECTED <?php } ?>  value="<?php echo $row->user_id ?>"><?php echo $row->usertype ?></option>
                                           <?php }?>

                                            </select>
                                        </div>
                                    </div>

                                       
             

                                     <div class="form-group" id="parent" style="padding: 16 0 30px 0;<?php if  ($useredit->parent_name!=null){
                                       ?>display: none;<?php } ?>">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Select Parent<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <select type="text" class="form-control" id ="phtypeoto"  name="parent_id" >
                                             
                                             <?php foreach ($mainagent as $row) {?>

                                      <option <?php if ($row->fname==$useredit->parent_name) {  ?> SELECTED <?php } ?>  value="<?php echo $row->userid ?>"><?php echo $row->fname ?></option>
                                           <?php }?>
                                               </select>
                                        </div>
                                    </div>

                                       <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">First Name<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" class="form-control" id ="phtypeoto" value="<?php echo $useredit->fname ?>"  name="fname" required="">
                                        </div>
                                    </div>
                                     
                                      <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Last Name<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" class="form-control" id ="phtypeoto" value="<?php echo $useredit->lname ?>"  name="lname" required="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Phone<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="tel" class="form-control" id ="phtypeoto" value="<?php echo $useredit->phone ?>" name="phone" required="">
                                        </div>
                                    </div>
                                    <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Email<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="email" class="form-control" id ="phtypeoto" value="<?php echo $useredit->email ?>" name="email" required="">
                                        </div>
                                    </div>
                                        <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Address<span style="color: red">*</span></label>
                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <textarea type="text" class="form-control" id ="phtypeoto"  name="address" required=""><?php echo $useredit->address ?></textarea>
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
    </body>

<script type="text/javascript">
function Check(val){
   var element=document.getElementById('parent');
 if(val=='Select type'||val=='Sub agent')
   element.style.display='block';

 else  
   element.style.display='none';
 

}

</script>


</html>
