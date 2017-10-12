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
             <li class="sub-menu" style="">

                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Admin</span></a>
                <ul class="sub">
                 
           <li class="sub-menu" >
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>User</span></a>
                <ul class="sub">
                    <li><a  href="<?php echo base_url; ?>type"><i class="fa fa-pencil"></i>Type</a></li>
                    <li><a  href="<?php echo base_url; ?>useradd"><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href="<?php echo base_url; ?>userlist"><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>
              <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Card</span></a>
                <ul class="sub">
                    <li><a  href="<?php echo base_url; ?>cardtype"><i class="fa fa-pencil"></i>Type</a></li>
                    <li><a href="<?php echo base_url; ?>cardadd"><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a href="<?php echo base_url; ?>card_list"><i class="fa fa-pencil"></i>List</a></li>
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

             <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Advertisment</span></a>
                <ul class="sub">
                    
                    <li><a  href=""><i class="fa fa-pencil"></i>Add</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                      </ul>
                    
            </li>
          </ul>
        </li>
         <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Supplier</span></a>
                <ul class="sub">
                  
           <li class="sub-menu">
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
                    
            </li>

          </ul>
        </li>
              
           
              <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Main agent</span></a>
                <ul class="sub">
                  
           <li class="sub-menu">

                    <li><a href="<?php echo base_url; ?>main_cards_view"><i class="fa fa-pencil"></i>Cards View</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Profite based Reports</a></li>

        </li>
          </ul>
            </li>

         
              <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-plus"></i>
                    <span>Sub agent</span></a>
                <ul class="sub">
                  
           <li class="sub-menu">
               
                    <li><a  href=""><i class="fa fa-pencil"></i>Sales</a></li>
                  <!--   <li><a  href=""><i class="fa fa-pencil"></i>List</a></li>
                    <li><a  href=""><i class="fa fa-pencil"></i>Profite based Reports</a></li> -->

        </li>
          </ul>
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