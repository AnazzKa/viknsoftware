


      <section id="main-content">
          <section class="wrapper">
              
            <div class="col-lg-6">

                      <section class="panel">

                          <section class="panel">
                        
                        <form action="<?php echo base_url; ?>card_update" method="POST">
                          <div class="panel-body">
                            
                              <div class="tab-content">
                                  <!--strt driver-->
                                  <div id="home" class="tab-pane active">
                                      <div class="form-group" style="padding: 0 0 30px 0;text-align: center;">
                                         <label class="col-sm-4 col-sm-4 control-label"></label> 
                                         <label class="col-sm-4 col-sm-4 control-label" style="color: #0088CC; font-size: 25px;">Card Type</label> 
                                         <label class="col-sm-4 col-sm-4 control-label"></label> 
                                      </div>

                                      <input type="hidden" name="card_id" value="<?php echo $cardedit->card_id?>">

                                     
                                        <div class="form-group" style="padding: 16 0 30px 0">
                                        <label class="col-sm-2 col-sm-2 control-label" style="margin-top: 10px;">Type<span style="color: red">*</span></label>


                                        <div class="col-sm-10" style="margin-top: 10px;">
                                            <input  type="text" value="<?php echo $cardedit->cardtype ?>" class="form-control" id ="phtypeoto"  name="type" >
                                        </div>
                                    </div>

                                     
                                    </div>
                                  <!--end rto -->
                              </div>
                              <center> <button type="submit" name="submit" class="btn btn-info" style="margin-top: 20px;">Update</button></center>
                            
                          </div>
                              </form>
                      </section>




                      </section>

                  </div>

                   <div class="col-lg-6">

                      <section class="panel">

                          <header class="panel-heading">

                             Cardtype List

                          </header>


                                  <strong> <?php echo $this->session->userdata("msg") ?> </strong> 
            
          
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>

             <tr>
               <th>SL ID</th>
               <th>Date</th>
               <th>Type</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
          <?php 
          $i=1;
          foreach ($card as $value) {
          ?>
             <tr>
               <td><?php echo $i++ ?></td>
               <td><?php echo $value->date; ?></td>
              <td><?php echo  $value->cardtype ?></td>
              <td><a href="<?php echo base_url ?>cardelete?cardeleid=<?php echo $value->card_id ?>" class="btn btn-danger" ><i class="fa fa-trash-o"></i></a>
                  <a href="<?php echo base_url ?>cardedit?cardid=<?php echo $value->card_id ?>" class="btn btn-primary" ><i class="fa fa-pencil"></i></a></td>
             </tr>
              <?php } ?> </tbody> 
              
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>

              
          </section>
                    <section class="footer">
                         BrandingSparrow Copyright ,2016
                   </section>  
      </section>
      
                  
    
  <!-- </section> -->
    </body>
</html>
