<?php
  require_once "header.php";
 ?>
 <!--start Content-->
         <div class="col-md-9 content">
             <div>
             <form class="form-inline" method="post" action="delproduct.php" >
             <table  id="example" class="table table-striped">
                 <thead>
                   <tr>
                    <!-- <th><input type="checkbox"  id="checkAll"/></th> -->
                     <th>Doner Name</th>
                     <th>Ammount</th>
                     <th>Purpose</th>
                     <th>Address</th>
                     <th>Cell No.</th>
                     <th>Date</th>
                     <th>Payment Status</th>
                     <th>Payment Type</th>
                   </tr>
                 </thead>
               </thead>
               <tbody>
                       <?php
                           $query="SELECT * FROM `doner`";
                           $result=mysqli_query($link, $query);
                           while($row=mysqli_fetch_array($result)){
                       ?>
                               <tr>
                                   <form action="" method="POST">
                                       <td><?php echo $row['d_name']?></td>
                                       <td><?php echo $row['d_amount']?></td>
                                       <td><?php echo $row['d_purpose']?></td>
                                       <td><?php echo $row['d_addr']?></td>
                                       <td><?php echo $row['d_cell']?></td>
                                       <td><?php echo $row['d_date']?></td>
                                       <td><?php echo $row['d_pay']?></td>
                                       <td><?php echo $row['d_paytype']?></td>
                               </tr>
                                   </form>
                           <?php
                           }
                           ?>
               </tbody>

               </table>
             </form>
             </div>
         </div>
         <!--end Content-->
     </div>
