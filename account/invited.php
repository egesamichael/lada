<?php

require("header.php");

?>

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h3 class="h3 mb-0 text-gray-800">Invited Members</h3>
            <ol class="breadcrumb">
              <!-- <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Pages</li>
              <li class="breadcrumb-item active" aria-current="page">Blank Page</li> -->
            </ol>
          </div>

           <!-- DataTable with Hover -->
           <div class="col-lg-12">
            <div class="card mb-4">
             
              <div class="table-responsive p-3">
                <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                  <thead class="thead-light">
                    <tr>
                      <th>Name</th>
                      <th>Date Joined</th>
                      <th>Status</th>
                      <th>Group</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>Name</th>
                      <th>Date Joined</th>
                      <th>Status</th>
                      <th>Group</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Demo Invited member</td>
                      <td>21/12/2020</td>
                      <td>Active</td>
                      <td>Group 1</td>
                    
                    </tr>
                   
                  
                  </tbody>
                </table>
              </div>
            </div>
          </div>
       
        <!--Row-->

       

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
  <?php
  require("footer.php");
  ?>