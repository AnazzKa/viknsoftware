
                      <section id="main-content">

          <section class="wrapper site-min-height">

              <!-- page start-->

              <div class="row">

                  <div class="col-lg-12">

                      <section class="panel">

                          <header class="panel-heading">

                             Users List

                          </header>


                                  <strong> <?php echo $this->session->userdata("msg") ?> </strong> 
            
          
                          <div class="panel-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>

             <tr>
               <th>SL ID</th>
               <th>User Type</th>
               <th>Added Date</th>
               <th>First Name</th>
               <th>Last Name</th>
               <th>Address</th>
               <th>Phone</th>
               <th>Email</th>
               <th>Action</th>
             </tr>
           </thead>
           <tbody>
          <?php 
          $i=1;
          foreach ($users as $value) {
          ?>
             <tr>
              <td><?php echo $i++ ?></td>
              <td><?php echo $value->usertype; ?></td>
              <td><?php echo $value->added_date; ?></td>
             <td><?php echo  $value->fname ?></td>
              <td><?php echo  $value->lname ?></td>
              <td><?php echo  $value->address ?></td>
              <td><?php echo  $value->phone ?></td>
              <td><?php echo  $value->email ?></td>
              
              <td><a  href="<?php echo base_url ?>mainagentdel?userid=<?php echo $value->userid ?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" ><i class="fa fa-trash-o"></i></a>
                  <a href="<?php echo base_url ?>mainagentedit?useredit=<?php echo $value->userid ?>" class="btn btn-primary" ><i class="fa fa-pencil"></i></a></td>
             </tr>
              <?php } ?> </tbody> 
              
                          </table>
                                 </div>
                          </div>
                      </section>
                  </div>
              </div>
              <section class="footer">
                         BrandingSparrow Copyright ,2016
                   </section>  
              <!-- page end-->
          </section>
      </section>
                  
      </div>
    </div>



        <script>
function deleletconf(){

var result = confirm("Want to delete?");
if (result) {
    //Logic to delete the item
}
}
</script>
        
