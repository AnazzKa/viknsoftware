<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <li>
                <a  class="" href="<?php echo base_url; ?>Dashboard">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <?php if ($this->session->userdata['ID']==1) {
            ?>
           <!--   <li class="sub-menu" style="">

                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Admin</span></a>
                <ul class="sub"> -->
                 
           <li class="sub-menu" >
                <a  href="<?php echo base_url; ?>type">
                    <i class="fa fa-plus"></i>
                    <span>User Type</span></a>
            </li>
              <li class="sub-menu" >
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>User</span></a>
                <ul class="sub">
                    <li><a  href="<?php echo base_url; ?>useradd"><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href="<?php echo base_url; ?>userlist"><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>

             <li class="sub-menu" >
               <a  href="<?php echo base_url; ?>cardtype">
                    <i class="fa fa-plus"></i>
                    <span>Card Type</span></a>
            </li>
              <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Card</span></a>
                <ul class="sub">
                   <li><a href="<?php echo base_url; ?>cardadd"><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a href="<?php echo base_url; ?>card_list"><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>
          <!--   <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Reports</span></a>
                <ul class="sub">
                    <li><a  href=""><i class="fa fa-pencil"></i>User based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Date based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Price based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Profite based Reports</a></li>
                      </ul>
                    
            </li> -->

            <!--  <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Advertisment</span></a>
                <ul class="sub">
                    
                    <li><a  href=""><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                      </ul> -->
                    
           <!--  </li> -->
          <!-- </ul> -->
        <!-- </li> -->
         <li class="sub-menu">
                <a href="<?php echo base_url ?>supplier_list" >
                    <i class="fa fa-plus"></i>
                    <span>Supplier List</span></a>
                  </li>
                <!-- <ul class="sub"> -->
                  
         <!--   <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Card</span></a>
                <ul class="sub">

                    <li><a href="<?php echo base_url; ?>cardadd"><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a href="<?php echo base_url; ?>card_list"><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>
             <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Sales</span></a>
                <ul class="sub">

                    <li><a href="<?php echo base_url; ?>view_our_cards"><i class="fa fa-pencil"></i>View Our Cards</a></li>
                    <li><a href="<?php echo base_url; ?>sub_agent_sales"><i class="fa fa-pencil"></i>Sales Cards</a></li>
                      </ul>
                    
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Reports</span></a>
                <ul class="sub">
                    <li><a  href=""><i class="fa fa-pencil"></i>User based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Date based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Price based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Profite based Reports</a></li>
                      </ul>
                    
            </li> -->
<!-- 
          </ul>
        </li>
               -->
           
              <li class="sub-menu">
                <a href="<?php echo base_url ?>mainagent_list" >
                    <i class="fa fa-plus"></i>
                    <span>Main agent List</span></a>
                  </li>
                <!-- <ul class="sub"> -->
                  
          <!--  <li class="sub-menu">

                    <li><a href="<?php echo base_url; ?>main_cards_view"><i class="fa fa-pencil"></i>Cards View</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Profite based Reports</a></li>

        </li> -->
          <!-- </ul> -->
            <!-- </li> -->

         
              <li class="sub-menu">
                <a href="<?php base_url ?>subagent_list" >
                    <i class="fa fa-plus"></i>
                    <span>Sub agent List</span></a>
                  </li>
                <!-- <ul class="sub"> -->
                  
          <!--  <li class="sub-menu">
               
                    <li><a  href=""><i class="fa fa-pencil"></i>Sales</a></li>
               

        </li> -->
          <!-- </ul>
            </li> -->

              <li class="sub-menu">
                <a href="<?php base_url ?>normaluser_list" >
                    <i class="fa fa-plus"></i>
                    <span>Normal Users List</span></a>
                  </li>
            <?php } ?>
<?php if ($this->session->userdata['TYPE']==1) {
    
 ?>
  <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>User</span></a>
                <ul class="sub">
                    
                    <li><a  href="<?php echo base_url ?>mainagent_add"><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href="<?php echo base_url ?>mainagent_list"><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>   


             <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Sales</span></a>
                <ul class="sub">
                    
                    <li><a  href=""><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>

              <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Reports</span></a>
                <ul class="sub">
                    <li><a  href=""><i class="fa fa-pencil"></i>User based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Date based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Price based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Profite based Reports</a></li>
                      </ul>
                    
            </li>
            <?php } ?>
<?php if ($this->session->userdata['TYPE']==2) {
    
 ?>
           <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Card</span></a>
                <ul class="sub">
                    
                    <li><a  href=""><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>
             <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Sales</span></a>
                <ul class="sub">
                    
                    <li><a  href=""><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Reports</span></a>
                <ul class="sub">
                    <li><a  href=""><i class="fa fa-pencil"></i>User based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Date based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Price based Reports</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Profite based Reports</a></li>
                      </ul>
                    
            </li>

          </ul>
        </li>

<?php } ?>
<?php if ($this->session->userdata['TYPE']==3){
    
 ?>

  <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Sales</span></a>
                <ul class="sub">
                    
                    <li><a  href=""><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>
            <?php } ?>

        <!-- sidebar menu end-->
    </div>
</aside>