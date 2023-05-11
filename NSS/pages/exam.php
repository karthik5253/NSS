 <div class="contact-page sidebar-collapse">
 <div class="main">
    <div class="section section-gray" style="min-height: 790px;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title"><i class="fas fa-bell" style="font-size: 48px;"></i> New Notifications</h2>
            <p>Information provided by admin such as datesheet, Notice board, etc will be posted here. </p>
            <hr>
          </div>
          
        </div>
     
        <div class="row">
          <div class="col-md-12 text-center">
          
            <div class="table-responsive">
              <table class="table table-bordered" style="border-radius: 5px; ">
               
                  <thead class="bg-default">
                    
                  </thead>
                  <tbody>

                     <?php 
                             $sql_prepare = 'SELECT comment,pdf,link,cdate FROM exam ORDER BY ex_id DESC';
                                            $stmt = $con->prepare($sql_prepare); 
                                           // $stmt->bind_param('i',$_GET['event']);
                                            $stmt->execute();
                                            $stmt->bind_result($comment,$pdf,$link,$cdate);
                                           
                                           $jsons = array();
                                                   
                         while($stmt->fetch())
                         {
                           $jsons = array('comment'=>$comment,'pdf'=>$pdf,'link'=>$link,'cdate'=>$cdate);
                      ?> 
                        <tr>

                          <td ><?php
                                 
                                   $timestamp = $jsons['cdate'];
                                    echo date("F jS, Y", strtotime($timestamp));
                           ?></td>

                          <td ><img src="assets/new.gif"><?php echo $jsons['comment']; ?></td>

                         <td>
                            <?php
                               if($jsons['pdf'] !=='' && $jsons['link'] =='') //if pdf not empty but link empty
                               {
                            ?>
                              
                                <a href="assets\image\uploads\pdf\<?php echo $jsons['pdf']; ?>" class="btn btn-success" download>
                                  <i class="fas fa-download" ></i> Download
                                </a>
                             
                              <?php
                               }else if($jsons['link'] !=='' && $jsons['pdf'] =='') //if link not empty but pdf empty
                               {
                                ?>
                                   <a href="<?php echo $jsons['link']; ?>" target="_blank" class="btn btn-success">
                                   <i class="fas fa-link" ></i> link
                                  </a>
                                 
                                <?php
                               }else if($jsons['link'] !=='' && $jsons['pdf'] !=='') //if both not empty
                               {
                                ?> <a href="assets\image\uploads\pdf\<?php echo $jsons['pdf']; ?>" class="btn btn-success" download>
                                    <i class="fas fa-download" ></i> Download
                                  </a>
                             
                                   <a href="<?php echo $jsons['link']; ?>" target="_blank" class="btn btn-success">
                                   <i class="fas fa-link" ></i> link
                                  </a>
                                 
                                <?php
                               }
                               else if($jsons['link'] =='' && $jsons['pdf'] =='') //if both not empty
                               {
                                ?> 
                                   <button href="#"  class="btn btn-default" disabled="">
                                    Access Denied
                                  </button>
                                 
                                <?php
                               }
                                ?>    
                             </td>

                          
                        </tr>
                     <?php
                        } $stmt->close();?>
                  </tbody>
                </table>
                <h4>
                  
  <div class="card mb-3" style="border:0px; padding: 0px">
  <div class="row no-gutters" style="padding: 0px">
    <div class="col-md-2">
      <img src="assets/image/nss/kan_hanumantha.jpg"  width="250px" height="250px" class="card-img" alt="...">
    </div>
    <div class="col-md-5">
      <div class="card-body"><br>
        <h5 class="card-title"><b>Unit 1 Dr.Hamumatharayappa</b<br></h5>
        <p class="card-text"> Shift- I</p>
        <p class="card-text">University Code KA-22-001</p>
        <p class="card-text">nssunit1@sju.edu.in</p>
        </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="border:0px; padding: 0px">
  <div class="row no-gutters" style="padding: 0px">
    <div class="col-md-2">
      <img src="assets/image/nss/Raj Kiran.jpg"  width="250px" height="250px" class="card-img" alt="...">
    </div>
    <div class="col-md-5">
      <div class="card-body"><br>
        <h5 class="card-title"> <b>Unit 2- Ms. Raj Kiran CA</b>  <br></h5>
        <p class="card-text"> Shift- I</p>
        <p class="card-text">University Code KA-22-002</p>
        <p class="card-text">nssunit2@sju.edu.in</p>
        </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="border:0px; padding: 0px">
  <div class="row no-gutters" style="padding: 0px">
    <div class="col-md-2">
      <img src="assets/image/nss/Veena.jpg"  width="250px" height="250px" class="card-img" alt="...">
    </div>
    <div class="col-md-5">
      <div class="card-body"><br>
        <h5 class="card-title"><b>Unit 3- Ms. Veena Nirmala</b><br></h5>
        <p class="card-text"> Shift- II</p>
        <p class="card-text"> University Code KA-22-003</p>
        <p class="card-text">nssunit3@sju.edu.in</p>
        </div>
    </div>
  </div>
</div>
<div class="card mb-3" style="border:0px; padding: 0px">
  <div class="row no-gutters" style="padding: 0px">
    <div class="col-md-2">
      <img src="assets/image/nss/sw_mary lavanya.jpg"  width="250px" height="250px" class="card-img" alt="...">
    </div>
    <div class="col-md-5">
      <div class="card-body"><br>
        <h5 class="card-title"><b>Unit 4- Dr. Mary princy Lavanya </b<br></h5>
        <p class="card-text"> Shift- II</p>
        <p class="card-text"> University Code KA-22-004</p>
        <p class="card-text">nssunit4@sju.edu.in</p>
        </div>
    </div>
  </div>
</div>
    <div class="card mb-3" style="border:0px; padding: 0px">
  <div class="row no-gutters" style="padding: 0px">
    <div class="col-md-2">
      <img src="assets/image/nss/Mahesh_D.jpeg"  width="250px" height="250px" class="card-img" alt="...">
    </div>
    <div class="col-md-5">
      <div class="card-body"><br>
        <h5 class="card-title"><b>Unit 5- Mr. Mahesha .D.K </b<br></h5>
        <p class="card-text"> Shift- III</p>
        <p class="card-text"> University Code KA-22-005</p>
        <p class="card-text">nssunit5@sju.edu.in</p>
        </div>
    </div>
    </div>
  </div>
</div>

               















            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>





 