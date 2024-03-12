<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Project</title>
 

     <!-- Css Meta Url-css Style Include -->
      <?php include 'assets/include/cssinclude.php' ;?>
     <!-- /Css Include -->


</head>
<body>

     <!-- Header -->
      <?php include 'assets/include/header.php' ;?>
     <!-- /Header -->


<!-- Header -->


<section class="breadcrumb">

    <div class="container">
        <div class="row mx-0 px-0">
            <div class="col-lg-12 mx-0 px-0">
                <div class="title-section text-center animated wow flash delay-2s">
                  <div class="heading">Start Bidding Now and Drive Home Your Dream Car!</div>
                  <p class="title-p">Live Car Auction Showcase!</p>
              </div>
            </div>    
        </div>     
    </div>    

</section>


<section class="scroll-none" id="">
    <div class="fillter-btn bg-f7 onscroll-fixed">
        
          <div class="container">
        <div class="row mx-0 px-0 ">
    
         
     <div class="col-lg-12  mx-0 px-0 d-flex">

        <i class="button--left fa-solid fa-chevron-left" id="slideBack"></i>
      <div class="scroll-x mt-3 mx-3">
      
   
      <div class="btn-group ml-10" role="group" aria-label="Basic checkbox toggle button group">
      <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck1">Chassis Perfect</label>

      <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck2">GCC Specs</label>

      <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck3">Warranty Available</label>

       <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck4">Ending Soon</label>

       <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck5">Rear Wheel Drive</label>

       <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck6">Bank Loan Available</label>

       <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck7">Low Milage</label>


       <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck8">Accident Free</label>

       <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck9">Brand New Car</label>

       <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck10">Accident Free</label>

       <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck11">Front Wheel Drive</label>

       <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck12">High End Vehicles</label>

      <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">
      <label class="btn btn-outline-primary" for="btncheck13">No Airbags Deployed</label>

      </div>

</div> 

<i class="button--right fa-solid fa-chevron-right" id="slide"></i>  
    
</div>
    </div>  
      </div>
   </div><!---------->


   <!---Breadcrumb---->


             
            

<!---offcanvas---->

 <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="left-toggle-filter" aria-labelledby="left-toggle-filterLabel">
            <div class="offcanvas-header  shadow-sm align-items-center dropdown">
                <h5 class="offcanvas-title" id="left-toggle-filterLabel">
                    Filter
                </h5>


                <button type="button" class="fa-light material-icons  bg-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close">tune</button>
            </div>

            <div class="offcanvas-body">

               <div class="toggele-dropdownbox d-flex justify-content-between toggle-1"> 
                <div class="title align-items-start">Car Filter</div>
                 <div class="icon align-items-end"><i class="fa-light fa-angles-down"></i></div>
                 <!-- <i class="">downloading</i> -->
                 
               </div> 

               <div class="car-filter filter-1" style="display:none;">

                 <select class="form-select" aria-label="">
                  <option selected>Make</option>
                  <option value="1">BMW</option>
                  <option value="2">Audi</option>
                  <option value="3">Tata</option>
                  <option value="">Maruti Suzuki</option>
                  <option value="">Ford</option>
                  <option value="">Chevrolet</option>
                  <option value="">Nissan</option>

                </select>

                <select class="form-select" aria-label="">
                  <option selected>Model</option>
                  <option value="1">A4</option>
                  <option value="2">F-150</option>
                  <option value="3">Camry</option>
                  <option value="">Civic</option>
                  <option value="">Sedan</option>
                  <option value="">SUV</option>
                  <option value="">Hatchback</option>

                </select>


                 <select class="form-select" aria-label="">
                  <option selected>Trim</option>
                  <option value="1">Base Trim</option>
                  <option value="2">SE (Special Edition)</option>
                  <option value="3">Sport</option>
                  <option value="">Electric</option>
                  <option value=""></option>
                  
                </select>


                 <select class="form-select" aria-label="">
                  <option selected>Start Code</option>
                  <option value="1">Can’t Test</option>
                  <option value="2">Run & Drive</option>
                  <option value="3">Starts</option>
                  <option value="">Stationary</option>Stationary
                </select>


                 <select class="form-select" aria-label="">
                  <option selected>Fuel Type</option>
                  <option value="1">Petrol</option>
                  <option value="2">Diesel</option>
                  <option value="3">Hybrid</option>
                  <option value="">Electric</option>
                </select>


                 <select class="form-select" aria-label="">
                  <option selected>Cylinders</option>
                  <option value="1">1 Cyl</option>
                  <option value="2">2 Cyl</option>
                  <option value="3">3 Cyl</option>
                  <option value="">4 Cyl</option>
                  <option value="">5 Cyl</option>
                  <option value=""></option>
                </select>

                <select class="form-select" aria-label="">
                    <option value="">Engine Size</option>
                    <option value="">0.65L</option>
                    <option value="">1 L</option>
                    <option value="">1.5 L</option>
                    <option value="">2 L</option>
                    <option value="">2.5 L</option>
                    
                </select>

                 <select class="form-select" aria-label="">
                    <option value="">Transmission</option>
                    <option value="">Automatic</option>
                    <option value="">CVT</option>
                    <option value="">Manual</option>
                    <option value="">Missing</option>
                    <option value=""> Unknown</option>
                  
                </select>

                 <select class="form-select" aria-label="">
                    <option value="">Drivetrain Type</option>
                    <option value="">All-Wheel Drive</option>
                    <option value="">Four Wheel Drive</option>
                    <option value="">Four Wheel Drive</option>
                    <option value="">Rear Wheel Drive</option>
                   
                </select>

                <select class="form-select" aria-label="">
                    <option value="">Odometer Range</option>
                    <option value=""></option>
                   
                </select>


                <div class="year-range">
                    Year
                   <div class="year-input">
                    <div class="field">
                        <input type="number" class="input-min" value="1990">
                    </div>
                    <div class="separator">To</div>
                    <div class="field">
                        <input type="number" class="input-max" value="2025">
                    </div>
                  </div>
                  <div class="slider">
                    <div class="progress"></div>
                    </div>
                  <div class="range-input">
                    <input type="range" class="range-min" min="1900" max="10000" value="1990" step="100">
                    <input type="range" class="range-max" min="0" max="10000" value="2500" step="100">
                  </div>

              </div> 


                <select class="form-select" aria-label="">
                    <option value="">Body Type</option>
                    <option value="">Sedan</option>
                    <option value="">SUV</option>
                    <option value="">Four Wheel Drive</option>
                    <option value="">Electric</option>
                    
                </select>





                





               </div>

               <div class="toggele-dropdownbox d-flex justify-content-between toggle-2"> 
                <div class="title align-items-start">Sale Filter</div>
                 <div class="icon align-items-end"><i class="fa-light fa-angles-down"></i></div>
                 <!-- <i class="material-icons">downloading</i> -->
                 
               </div> 


               <div class="car-filter filter-2" style="display:none;">

                 <select class="form-select" aria-label="">
                  <option selected>Auction Type</option>
                  <option value="1">Live Auction</option>
                  <option value="2">Auction Starting Soon</option>
                  
                </select>

                                 <div class="year-range">
                    Price
                   <div class="year-input">
                    <div class="field">
                        <input type="number" class="input-min" value="1990">
                    </div>
                    <div class="separator">To</div>
                    <div class="field">
                        <input type="number" class="input-max" value="2025">
                    </div>
                  </div>
                  <div class="slider">
                    <div class="progress"></div>
                    </div>
                  <div class="range-input">
                    <input type="range" class="range-min" min="1900" max="10000" value="1990" step="100">
                    <input type="range" class="range-max" min="0" max="10000" value="2500" step="100">
                  </div>

              </div> 



                 <select class="form-select" aria-label="">
                  <option selected>Regional Specifications</option>
                  <option value="1">GCC Specs</option>
                  <option value="2">American Specs</option>
                   <option value="">European Specs</option>
                   <option value="">Japanese Specs</option>
                   <option value="">Korean Specs</option>
                   <option value="">Chinese Specs</option>
               
                </select>


        
               
               </div>


             

            </div><!----Offcanvas-body------>
        </div>



  <!----offcanvas------>




 <div class="all-box">

   <i class="material-icons btn left-filter-btn" data-bs-toggle="offcanvas" data-bs-target="#left-toggle-filter" aria-controls="left-toggle-filter">tune</i>

   <div class="container mt-50 mb-50">

    <div class="row">

          <div class="col-lg-4 mt-25">
             <div class="inner-box">
                <div class="car-modal tag">MUV</div> 
                 <div class="product-img-box">
                  <img class="w-100" src="assets/images/product/product-2.jpg" alt="">
                   <div class="car-value tag">Estimated Market Value: $<span class="">30,000</span></div> 
                 </div>
              
             <div class="details">
             <div class="model-name">AVEO LS AUTOMATIC A/A</div>
             <div class="brand-name">Toyota</div>
             <div class="row">
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms
                    </span>
                  </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/manual.png"> Manual
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc
                    </span>
                  </div>
                <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/petrol.png"> Petrol
                    </span>
                </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/owner.png"> First Owner
                    </span>
                </div>

                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers
                    </span>
                </div>

                <div class="col-12 m-auto">
                   <div class="divider"> </div>
                </div>
                

                <div class="col-6 cost-box">
                  <div class="pri">Repair Cost:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 3,500</div>
                </div> 

                <div class="col-6 cost-box">
                  <div class="pri">Current Bid Price:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 25,000</div>
                </div> 

                 <div class="col-12">
                  <a  href="#" class="btn bid-btn">Bid Now</a>
                 </div>
                 
                 <div class="col-12 text-center"> 
                  <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                </div>
              </div> 
             </div>
            </div>
        </div>  <!---col--->

          <div class="col-lg-4 mt-25">
             <div class="inner-box">
                <div class="car-modal tag">MUV</div> 
                 <div class="product-img-box">
                  <img class="w-100" src="assets/images/product/product-2.jpg" alt="">
                   <div class="car-value tag">Estimated Market Value: $<span class="">30,000</span></div> 
                 </div>
              
             <div class="details">
             <div class="model-name">AVEO LS AUTOMATIC A/A</div>
             <div class="brand-name">Toyota</div>
             <div class="row">
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms
                    </span>
                  </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/manual.png"> Manual
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc
                    </span>
                  </div>
                <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/petrol.png"> Petrol
                    </span>
                </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/owner.png"> First Owner
                    </span>
                </div>

                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers
                    </span>
                </div>

                <div class="col-12 m-auto">
                   <div class="divider"> </div>
                </div>
                

                <div class="col-6 cost-box">
                  <div class="pri">Repair Cost:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 3,500</div>
                </div> 

                <div class="col-6 cost-box">
                  <div class="pri">Current Bid Price:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 25,000</div>
                </div> 

                 <div class="col-12">
                  <a  href="#" class="btn bid-btn">Bid Now</a>
                 </div>
                 
                 <div class="col-12 text-center"> 
                  <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                </div>
              </div> 
             </div>
            </div>
        </div>  <!---col--->


          <div class="col-lg-4 mt-25">
             <div class="inner-box">
                <div class="car-modal tag">MUV</div> 
                 <div class="product-img-box">
                  <img class="w-100" src="assets/images/product/product-2.jpg" alt="">
                   <div class="car-value tag">Estimated Market Value: $<span class="">30,000</span></div> 
                 </div>
              
             <div class="details">
             <div class="model-name">AVEO LS AUTOMATIC A/A</div>
             <div class="brand-name">Toyota</div>
             <div class="row">
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms
                    </span>
                  </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/manual.png"> Manual
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc
                    </span>
                  </div>
                <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/petrol.png"> Petrol
                    </span>
                </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/owner.png"> First Owner
                    </span>
                </div>

                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers
                    </span>
                </div>

                <div class="col-12 m-auto">
                   <div class="divider"> </div>
                </div>
                

                <div class="col-6 cost-box">
                  <div class="pri">Repair Cost:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 3,500</div>
                </div> 

                <div class="col-6 cost-box">
                  <div class="pri">Current Bid Price:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 25,000</div>
                </div> 

                 <div class="col-12">
                  <a  href="#" class="btn bid-btn">Bid Now</a>
                 </div>
                 
                 <div class="col-12 text-center"> 
                  <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                </div>
              </div> 
             </div>
            </div>
        </div>  <!---col--->


          <div class="col-lg-4 mt-25">
             <div class="inner-box">
                <div class="car-modal tag">MUV</div> 
                 <div class="product-img-box">
                  <img class="w-100" src="assets/images/product/product-2.jpg" alt="">
                   <div class="car-value tag">Estimated Market Value: $<span class="">30,000</span></div> 
                 </div>
              
             <div class="details">
             <div class="model-name">AVEO LS AUTOMATIC A/A</div>
             <div class="brand-name">Toyota</div>
             <div class="row">
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms
                    </span>
                  </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/manual.png"> Manual
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc
                    </span>
                  </div>
                <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/petrol.png"> Petrol
                    </span>
                </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/owner.png"> First Owner
                    </span>
                </div>

                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers
                    </span>
                </div>

                <div class="col-12 m-auto">
                   <div class="divider"> </div>
                </div>
                

                <div class="col-6 cost-box">
                  <div class="pri">Repair Cost:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 3,500</div>
                </div> 

                <div class="col-6 cost-box">
                  <div class="pri">Current Bid Price:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 25,000</div>
                </div> 

                 <div class="col-12">
                  <a  href="#" class="btn bid-btn">Bid Now</a>
                 </div>
                 
                 <div class="col-12 text-center"> 
                  <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                </div>
              </div> 
             </div>
            </div>
        </div>  <!---col--->

          <div class="col-lg-4 mt-25">
             <div class="inner-box">
                <div class="car-modal tag">MUV</div> 
                 <div class="product-img-box">
                  <img class="w-100" src="assets/images/product/product-2.jpg" alt="">
                   <div class="car-value tag">Estimated Market Value: $<span class="">30,000</span></div> 
                 </div>
              
             <div class="details">
             <div class="model-name">AVEO LS AUTOMATIC A/A</div>
             <div class="brand-name">Toyota</div>
             <div class="row">
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms
                    </span>
                  </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/manual.png"> Manual
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc
                    </span>
                  </div>
                <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/petrol.png"> Petrol
                    </span>
                </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/owner.png"> First Owner
                    </span>
                </div>

                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers
                    </span>
                </div>

                <div class="col-12 m-auto">
                   <div class="divider"> </div>
                </div>
                

                <div class="col-6 cost-box">
                  <div class="pri">Repair Cost:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 3,500</div>
                </div> 

                <div class="col-6 cost-box">
                  <div class="pri">Current Bid Price:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 25,000</div>
                </div> 

                 <div class="col-12">
                  <a  href="#" class="btn bid-btn">Bid Now</a>
                 </div>
                 
                 <div class="col-12 text-center"> 
                  <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                </div>
              </div> 
             </div>
            </div>
        </div>  <!---col--->

          <div class="col-lg-4 mt-25">
             <div class="inner-box">
                <div class="car-modal tag">MUV</div> 
                 <div class="product-img-box">
                  <img class="w-100" src="assets/images/product/product-2.jpg" alt="">
                   <div class="car-value tag">Estimated Market Value: $<span class="">30,000</span></div> 
                 </div>
              
             <div class="details">
             <div class="model-name">AVEO LS AUTOMATIC A/A</div>
             <div class="brand-name">Toyota</div>
             <div class="row">
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms
                    </span>
                  </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/manual.png"> Manual
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc
                    </span>
                  </div>
                <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/petrol.png"> Petrol
                    </span>
                </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/owner.png"> First Owner
                    </span>
                </div>

                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers
                    </span>
                </div>

                <div class="col-12 m-auto">
                   <div class="divider"> </div>
                </div>
                

                <div class="col-6 cost-box">
                  <div class="pri">Repair Cost:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 3,500</div>
                </div> 

                <div class="col-6 cost-box">
                  <div class="pri">Current Bid Price:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 25,000</div>
                </div> 

                 <div class="col-12">
                  <a  href="#" class="btn bid-btn">Bid Now</a>
                 </div>
                 
                 <div class="col-12 text-center"> 
                  <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                </div>
              </div> 
             </div>
            </div>
        </div>  <!---col--->


          <div class="col-lg-4 mt-25">
             <div class="inner-box">
                <div class="car-modal tag">MUV</div> 
                 <div class="product-img-box">
                  <img class="w-100" src="assets/images/product/product-2.jpg" alt="">
                   <div class="car-value tag">Estimated Market Value: $<span class="">30,000</span></div> 
                 </div>
              
             <div class="details">
             <div class="model-name">AVEO LS AUTOMATIC A/A</div>
             <div class="brand-name">Toyota</div>
             <div class="row">
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms
                    </span>
                  </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/manual.png"> Manual
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc
                    </span>
                  </div>
                <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/petrol.png"> Petrol
                    </span>
                </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/owner.png"> First Owner
                    </span>
                </div>

                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers
                    </span>
                </div>

                <div class="col-12 m-auto">
                   <div class="divider"> </div>
                </div>
                

                <div class="col-6 cost-box">
                  <div class="pri">Repair Cost:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 3,500</div>
                </div> 

                <div class="col-6 cost-box">
                  <div class="pri">Current Bid Price:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 25,000</div>
                </div> 

                 <div class="col-12">
                  <a  href="#" class="btn bid-btn">Bid Now</a>
                 </div>
                 
                 <div class="col-12 text-center"> 
                  <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                </div>
              </div> 
             </div>
            </div>
        </div>  <!---col--->


          <div class="col-lg-4 mt-25">
             <div class="inner-box">
                <div class="car-modal tag">MUV</div> 
                 <div class="product-img-box">
                  <img class="w-100" src="assets/images/product/product-2.jpg" alt="">
                   <div class="car-value tag">Estimated Market Value: $<span class="">30,000</span></div> 
                 </div>
              
             <div class="details">
             <div class="model-name">AVEO LS AUTOMATIC A/A</div>
             <div class="brand-name">Toyota</div>
             <div class="row">
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/Kms.png"> 53000 Kms
                    </span>
                  </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/manual.png"> Manual
                    </span>
                  </div>
                  <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/cc.png"> 22,231 cc
                    </span>
                  </div>
                <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/petrol.png"> Petrol
                    </span>
                </div>
                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/owner.png"> First Owner
                    </span>
                </div>

                 <div class="col-6">
                    <span class="d-flex align-items-center icon-box">
                    <img class="ico" src="assets/images/icon/car-door.png"> 5 Passengers
                    </span>
                </div>

                <div class="col-12 m-auto">
                   <div class="divider"> </div>
                </div>
                

                <div class="col-6 cost-box">
                  <div class="pri">Repair Cost:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 3,500</div>
                </div> 

                <div class="col-6 cost-box">
                  <div class="pri">Current Bid Price:</div>
                   <div class="amou"><i class="fa-duotone fa-dollar-sign"></i> 25,000</div>
                </div> 

                 <div class="col-12">
                  <a  href="#" class="btn bid-btn">Bid Now</a>
                 </div>
                 
                 <div class="col-12 text-center"> 
                  <a href="#" class="ctm-link"> Buy Now $XXXX</a>

                </div>
              </div> 
             </div>
            </div>
        </div>  <!---col--->



    </div> <!----row----->  

    <div class="row px-0 mx-auto text-center mt-25 mb-25">
           <div class="col-lg-5 mx-auto  d-flex justify-content-center">
          
            <button class="btn-load-more"><i class="fa-solid fa-spinner"></i> &nbsp; More </button>
    </div>
    </div>    

</div>
   </div><!-----product--container------>

</section>


     <!-- Footer -->
      <?php include 'assets/include/footer.php' ;?>
     <!-- /Footer -->



    
     <!-- JS Include -->
      <?php include 'assets/include/jsinclude.php' ;?>
     <!-- /JS Include -->


</body>
</html>



    