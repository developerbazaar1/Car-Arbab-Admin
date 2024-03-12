
<!DOCTYPE html>
<html lang="en">
<head>

      <!-- Css Meta Url-css Style Include -->
      <?php include 'include/css.php' ;?>
     <!-- /Css Include -->

   
</head>
<body>
    <div class="app align-content-stretch d-flex flex-wrap">
          

       <!-- Sidebar Include -->
          <?php include 'include/sidebar.php' ;?>
       <!-- /Sidebar Include -->

        <div class="app-container">

              <!-- Sidebar Include -->
                  <?php include 'include/header.php' ;?>
               <!-- /Sidebar Include -->


           

            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                               <div class="page-description d-flex align-items-center">
                                                    <div class="page-description-content flex-grow-1">
                                                        <h1>View inspector</h1>
                                                     
                                                    </div>

                                                    <div class="page-description-actions">
                                                       
                                                        <a href="add-inspector.php" class="btn btn-dark"><i class="material-icons">add</i>Add inspector </a>
                                                    </div>
                                                    
                                                </div>
                            </div>

                            
                        </div>
                       
                           
                            
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">Basic</h5>
                                    </div>
                                    <div class="card-body table-responsive">
                                        <table id="datatable1" class="display" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Id</th>
                                                    <th>Create date</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                                <tr>
                                                    <td># 1</td>
                                                    <td>27 01 2024</td>
                                                    <td>Arshad</td>
                                                    <td>arshad@gmail.com</td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                                                        </div>
                                                     </td>
                                                 </tr>

                                                <tr>
                                                    <td># 2</td>
                                                    <td>27 01 2024</td>
                                                    <td>Amzad</td>
                                                    <td>amzad@gmail.com</td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" >
                                                        </div>
                                                     </td>
                                                 </tr>  

                                                  <tr>
                                                    <td># 3</td>
                                                    <td>27 01 2024</td>
                                                    <td>Rehan</td>
                                                    <td>rehan@gmail.com</td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                                                        </div>
                                                     </td>
                                                 </tr>  


                                                  <tr>
                                                    <td># 4</td>
                                                    <td>27 01 2024</td>
                                                    <td>Aadil</td>
                                                    <td>aadil@gmail.com</td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked">
                                                        </div>
                                                     </td>
                                                 </tr>   



                                                  <tr>
                                                    <td># 5</td>
                                                    <td>27 01 2024</td>
                                                    <td>Afridi</td>
                                                    <td>afridi@gmail.com</td>
                                                    <td>
                                                        <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                                                        </div>
                                                     </td>
                                                 </tr>                            
                         

                                            </tbody>
                                           
                                        </table>
                                    </div>
                                </div>
                        </div>
                        
                    
                     
                      
                       
                    
                </div>
            </div>
        </div>
    </div>
    
      <!-- Css Include -->
      <?php include 'include/js.php' ;?>
     <!-- /Css Include -->
    
</body>
</html>