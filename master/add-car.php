
<!DOCTYPE html>
<html lang="en">
<head>

      <!-- Css Meta Url-css Style Include -->
      <?php include 'include/css.php' ;?>
     <!-- /Css Include -->
<style type="text/css">
/*---------signup-step-------------*/
.bg-color{
    background-color: #333;
}
.signup-step-container{
    padding: 150px 0px;
    padding-bottom: 60px;
}

textarea {
    height: 45px;
}


    .wizard .nav-tabs {
        position: relative;
        margin-bottom: 0;
        border-bottom-color: transparent;
    }

    .wizard > div.wizard-inner {
            position: relative;
    margin-bottom: 50px;
    text-align: center;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 85%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 15px;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 30px;
    height: 30px;
    line-height: 30px;
    display: inline-block;
    border-radius: 50%;
    background: #fff;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 16px;
    color: #0e214b;
    font-weight: 500;
    border: 1px solid #ddd;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
        background: #0db02b;
    color: #fff;
    border-color: #0db02b;
}
.wizard li.active span.round-tab i{
    color: #5bc0de;
}
.wizard .nav-tabs > li.active > a i{
    color: #0db02b;
}

.wizard .nav-tabs > li {
    width: 150px;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: red;
    transition: 0.1s ease-in-out;
}



.wizard .nav-tabs > li a {
    width: 30px;
    height: 30px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
    background-color: transparent;
    position: relative;
    top: 0;
}
.wizard .nav-tabs > li a i{
    position: absolute;
    top: -15px;
    font-style: normal;
    font-weight: 400;
    white-space: nowrap;
    left: 50%;
    transform: translate(-50%, -50%);
    font-size: 12px;
    font-weight: 700;
    color: #000;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 20px;
}

.tab-pane label {
    padding-bottom: 10px;
}


.wizard h3 {
    margin-top: 0;
}
.prev-step,
.next-step{
    font-size: 13px;
    padding: 8px 24px;
    border: none;
    border-radius: 4px;
    margin-top: 30px;
}
.next-step{
    background-color: #0db02b;
    color:#fff;
}
.skip-btn{
    background-color: #cec12d;
}
.step-head{
    font-size: 20px;
    text-align: center;
    font-weight: 500;
    margin-bottom: 20px;
}
.term-check{
    font-size: 14px;
    font-weight: 400;
}
.custom-file {
    position: relative;
    display: inline-block;
    width: 100%;
    height: 40px;
    margin-bottom: 0;
}
.custom-file-input {
    position: relative;
    z-index: 2;
    width: 100%;
    height: 40px;
    margin: 0;
    opacity: 0;
}
.custom-file-label {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1;
    height: 40px;
    padding: .375rem .75rem;
    font-weight: 400;
    line-height: 2;
    color: #495057;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: .25rem;
}
.custom-file-label::after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    display: block;
    height: 38px;
    padding: .375rem .75rem;
    line-height: 2;
    color: #495057;
    content: "Browse";
    background-color: #e9ecef;
    border-left: inherit;
    border-radius: 0 .25rem .25rem 0;
}
.footer-link{
    margin-top: 30px;
}
.all-info-container{

}
.list-content{
    margin-bottom: 10px;
}
.list-content a{
    padding: 10px 15px;
    width: 100%;
    display: inline-block;
    background-color: #f5f5f5;
    position: relative;
    color: #565656;
    font-weight: 400;
    border-radius: 4px;
}
.list-content a[aria-expanded="true"] i{
    transform: rotate(180deg);
}
.list-content a i{
    text-align: right;
    position: absolute;
    top: 15px;
    right: 10px;
    transition: 0.5s;
}
.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
    background-color: #fdfdfd;
}
.list-box{
    padding: 10px;
}
.signup-logo-header .logo_area{
    width: 200px;
}
.signup-logo-header .nav > li{
    padding: 0;
}
.signup-logo-header .header-flex{
    display: flex;
    justify-content: center;
    align-items: center;
}
.list-inline li{
    display: inline-block;
}
.pull-right{
    float: right;
}

/*-----------custom-checkbox-----------*/
/*----------Custom-Checkbox---------*/
input[type="checkbox"]{
    position: relative;
    display: inline-block;
    margin-right: 5px;
}
input[type="checkbox"]::before,
input[type="checkbox"]::after {
    position: absolute;
    content: "";
    display: inline-block;   
}
input[type="checkbox"]::before{
    height: 16px;
    width: 16px;
    border: 1px solid #999;
    left: 0px;
    top: 0px;
    background-color: #fff;
    border-radius: 2px;
}
input[type="checkbox"]::after{
    height: 5px;
    width: 9px;
    left: 4px;
    top: 4px;
}
input[type="checkbox"]:checked::after{
    content: "";
    border-left: 1px solid #fff;
    border-bottom: 1px solid #fff;
    transform: rotate(-45deg);
}
input[type="checkbox"]:checked::before{
    background-color: #18ba60;
    border-color: #18ba60;
}


.font-big {
    font-size: 28px;
    color: #0db02b;
    text-shadow: 1px 1px 1px #000;
}



@media (max-width: 767px){
    .sign-content h3{
        font-size: 40px;
    }
    .wizard .nav-tabs > li a i{
        display: none;
    }
    .signup-logo-header .navbar-toggle{
        margin: 0;
        margin-top: 8px;
    }
    .signup-logo-header .logo_area{
        margin-top: 0;
    }
    .signup-logo-header .header-flex{
        display: block;
    }
}

</style>
   
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
                                                        <h1>Add Car</h1>
                                                     
                                                    </div>
                                                    <div class="page-description-actions">
                                                       
                                                        
                                                    </div>
                                                </div>
                            </div>

                            
                        </div>
                        <div class="row">
                           
                            
                            <div class="col-xl-12">
                                <div class="card widget widget-stats pt-5">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            
                                            <div class="widget-stats-content flex-fill ">

                                              
      
           
                     <div class="wizard">
                        <div class="wizard-inner">
                            <div class="connecting-line"></div>
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i></i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i></i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i></i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> <i></i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> <i></i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> <i></i></a>
                                </li>
                                <li role="presentation" class="disabled">
                                    <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">7</span> <i></i></a>
                                </li>

                                <li role="presentation" class="disabled">
                                    <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"><span class="round-tab">8</span> <i></i></a>
                                </li>
                            </ul>
                        </div>
        
                       
                            <div class="tab-content" id="main_form">
                                   
                                
                                <div class="tab-pane active" role="tabpanel" id="step1">
                                    <h5 class="text-center font-big">ENGINE</h5>
                                    <hr/>

                          <div class="row">  
                            <div class="col-md-12">
                                <h5 class="text-success  mt-3">Radiator</h5>
                            </div>
                            
                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="leaking">Leaking</option>
                               </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- coolent -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Coolant Level</h5>
                            </div>
                        <div class="col-md-4"> 
                                <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="low">Low</option>
                                <option value="empty">Empty</option>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        
                        <!-- engine noise -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Engine Noise</h5>
                        </div>
                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="none">None</option>
                                <option value="slight">Slight</option>
                                <option value="moderate">Moderate</option>
                                <option value="severe">Severe</option>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                       
                        
                        <!-- turbo/super charger -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Turbo/Super Charger</h5>
                        </div>
                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="leaks">Leaks</option>
                                <option value="hose/clamp damaged">Hose/Clamp Damaged</option>
                                <option value="N/A">N/A</option>
                                </select>
                            </div>
                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        
                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- engine mounting -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Engine Mounting</h5>
                        </div>

                        <div class="col-md-4">

                                <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="cracked">Cracked</option>
                                <option value="vibration">Vibration</option>
                                </select>
                        </div>


                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>


                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- drive belts -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Drive Belts</h5>
                        </div>
                        <div class="col-md-4">
                                <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="loose/squeeking noise">Loose/Squeeking Noise</option>
                                <option value="drive belt pully noise/wobbling">Drive Belt Pully Noise/Wobbling</option>
                                <option value="cracked">Cracked</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                       

                        <!-- engine oil leak -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Engine Oil Leak</h5>
                        </div>

                        <div class="col-md-4">
                             <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="none">None</option>
                                <option value="minor">Minor</option>
                                <option value="major">Major</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                                <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                       

                        <!-- transmission oil leak -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Transmission Oil Leak</h5>
                        </div>

                        <div class="col-md-4">
                                <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="none">None</option>
                                <option value="minor">Minor</option>
                                <option value="major">Major</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                              <label for="floatingTextarea">Comments</label>
                              <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- gear mounting -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Gear Mounting</h5>
                        </div>

                        <div class="col-md-4">
                                <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="cracked">Cracked</option>
                                <option value="vibration">Vibration</option>
                                </select>
                        </div>
                           
                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                             <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        

                        <!-- silencer/catalyst -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Silencer/Catalyst</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="available">Available</option>
                                <option value="missing">Missing</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                         </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- hoses -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Hoses</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="cracked">Cracked</option>
                                <option value="leaking">Leaking</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>

                        </div>

                        <!-- Upper Cover -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Upper Cover</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="cracked">Cracked</option>
                                <option value="missing">Missing</option>
                                </select>

                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                       
                        <div class="col-md-4">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Engine Shield cover -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Engine Shield Cover</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="cracked">Cracked</option>
                                <option value="missing">Missing</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Bonnet Hinge & Holder -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Bonnet Hinge & Holder</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="missing/unavailable">Missing/Unavailable</option>
                                <option value="not opening smoothly cable and/or lock needs to be repaired">Not Opening Smoothly Cable And/Or Lock Needs To Be Repaired</option>
                                </select>
                        </div>
                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Fender Liners -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Fender Liners</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="cracked">Cracked</option>
                                <option value="missing">Missing</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Engine Idle -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Engine Idle</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="vehicle not starting">Vehicle Not Starting</option>
                                <option value="bouncing or shaking during idle">Bouncing or Shaking During Idle</option>
                                <option value="rpm fluctuating">RPM Fluctuating</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                    

                        <!-- Engine Oil Condition -->
                        <div class="col-md-12">
                            <h5 class="text-success  mt-3">Engine Oil Condition</h5>
                        </div>

                        <div class="col-md-4">
                                <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="signs of coolant in engine oil, might mean failure in one or more of engine gasket or seals">Signs of coolant in engine oil, might mean failure in one or more of engine gasket or seals</option>
                                <option value="oil cap missing/broken">Oil Cap Missing/Broken</option>
                                <option value="level high, needs to be partially removed">Level high, Needs to be partially removed</option>
                                <option value="Level is low, Needs to be topped up with same oil grade">Level is low, Needs to be topped up with same oil grade</option>
                                <option value="oil is black, needs to be changed">Oil is black, Needs to be changed</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                         <!-- Coolant Cap -->
                         <div class="col-md-12">
                            <h5 class="text-success  mt-3">Coolant Cap</h5>
                        </div>

                        <div class="col-md-4">
                                <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="filler cap damaged/broken">Filler Cap Damaged/Broken</option>
                                <option value="filler cap missing">Filler Cap Missing</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                         </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                    </ul>


                        </div>


                                <div class="tab-pane" role="tabpanel" id="step2">

                                    <h5 class="text-center font-big">BRAKES</h5>
                                    <div class="row">
                                   
                                     
            
                        <!-- Brake Oil -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Brake Oil</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="low">Low</option>
                                <option value="empty">Empty</option>
                                </select>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>                           
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>                               
                        </div>

                        <!-- Front Pad -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Pad</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="fair">Fair</option>
                                <option value="poor">Poor</option>
                            </select>                              
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>                            
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>                              
                        </div>

                        <!-- Rear Pad -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Pad</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="fair">Fair</option>
                                <option value="poor">Poor</option>
                            </select>                             
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Front Disc -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Disc</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="scratched/grooved">Scratched/Grooved</option>
                                <option value="rotor rust">Rotor Rust</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                                <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Rear Disc / Drum -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Disc / Drum</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="scratched/grooved">Scratched/Grooved</option>
                                <option value="rotor rust">Rotor Rust</option>
                            </select>                               
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
    

                                       </div>
                                    
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>
                                <div class="tab-pane" role="tabpanel" id="step3">
                                    <h5 class="text-center font-big">TYRE</h5>
                                     <div class="row">
                                  
                                                            <!-- Front Left -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Left</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="floatingInput">Date</label>
                            <input class="form-control flatpickr1" type="text" placeholder="Select Date..">
                        </div>

                        <div class="col-md-4">
                            <label for="floatingInput">Size</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingInput">Condition</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <!-- Rear Left -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Left</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="floatingInput">Date</label>
                            <input class="form-control flatpickr2" type="text" placeholder="Select Date..">
                        </div>

                        <div class="col-md-4">
                            <label for="floatingInput">Size</label>
                                <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingInput">Condition</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <!-- Rear Right -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Right</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="floatingInput">Date</label>
                            <input class="form-control flatpickr3" type="text" placeholder="Select Date..">
                        </div>

                        <div class="col-md-4">
                            <label for="floatingInput">Size</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingInput">Condition</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <!-- Front Right -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Right</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="floatingInput">Date</label>
                            <input class="form-control flatpickr4" type="text" placeholder="Select Date..">
                        </div>

                        <div class="col-md-4">
                            <label for="floatingInput">Size</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingInput">Condition</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                                   
                                  
                                       </div>
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>

                                <div class="tab-pane" role="tabpanel" id="step4">
                                    <h5 class="text-center font-big">RIMS</h5>
                                    <div class="all-info-container">
                                       
                                          <div class="row">
                                         
                   
                        <!-- Front Left -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Left</h5>
                        </div>
                        
                        <div class="col-md-6">
                            <label for="floatingInput">Brand</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <div class="col-md-6 ">
                            <label for="floatingInput">Condition</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <!-- Rear Left -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Left</h5>
                        </div>

                        <div class="col-md-6">
                            <label for="floatingInput">Brand</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <div class="col-md-6 ">
                            <label for="floatingInput">Condition</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <!-- Rear Right -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Right</h5>
                        </div>

                        <div class="col-md-6">
                            <label for="floatingInput">Brand</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <div class="col-md-6 ">
                            <label for="floatingInput">Condition</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <!-- Front Right -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Right</h5>
                        </div>

                        <div class="col-md-6">
                            <label for="floatingInput">Brand</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                        <div class="col-md-6 ">
                            <label for="floatingInput">Condition</label>
                            <input type="text" class="form-control" id="floatingInput" placeholder="size" required>
                        </div>

                      
                  
               
                                          </div>  

                                        
                                    </div>
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>

                                  <div class="tab-pane" role="tabpanel" id="step5">
                                    <h5 class="text-center font-big">ELECTRICAL SYSTEM</h5>
                                    <div class="all-info-container">
                                       
                                        <div class="row">


              
                        <!-- Sunroof Operation -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Sunroof Operation</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="n/a">N/A</option>
                                <option value="faulty">Faulty</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Window Operation -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Window Operation</h5>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="n/a">N/A</option>
                                <option value="faulty">Faulty</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        
                        <!-- Convertible -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Convertible</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="n/a">N/A</option>
                                <option value="faulty">Faulty</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        
                        <!-- Horn Operation -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Horn Operation</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="n/a">N/A</option>
                                <option value="faulty">Faulty</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Air Conditioner -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Air Conditioner</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="low cooling">Low Cooling</option>
                                <option value="blower noisy/blocked">Blower Noisy/Blocked</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                                <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Entertainment System -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Entertainment System</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Side Mirror Controls -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Side Mirror Controls</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="n/a">N/A</option>
                                <option value="faulty">Faulty</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Head Lights -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Head Lights</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="faded">Faded</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Rear Lights -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Lights</h5>
                        </div>
                        
                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="faded">Faded</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Indicators/Side Lights -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Indicators/Side Lights</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="faded">Faded</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Fog Lights -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Fog Lights</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="faded">Faded</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Interior Lights -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Interior Lights</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="faded">Faded</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Key Remote -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Key Remote</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="keypad damaged">Keypad Damaged</option>
                                <option value="battery flat">Battery Flat</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Cigarette Lighter -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Cigarette Lighter</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Cameras -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Cameras</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="blurred vision">Blurred Vision</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                       <!-- Push Start -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Push Start</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Instrument/Functions -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Instrument/Functions</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                         <!-- Wipers/Washers -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Wipers/Washers</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                                <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Door Locking -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Door Locking</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Switches/Controls -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Switches/Controls</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Steering Wheel Switches -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Steering Wheel Switches</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Hazard Lights Button -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Hazard Lights Button</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="faded">Faded</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Number Plate Lights -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Number Plate Lights</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="faded">Faded</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Parking Sensors -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Parking Sensors</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>


                                        </div>    
                                        
                                    </div>
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>

                                 <div class="tab-pane" role="tabpanel" id="step6">
                                    <h5 class="text-center font-big">ESTEERING AND SUSPENSION</h5>
                                    <div class="all-info-container">
                                       
                                       <div class="row">

                                                                <!-- Steering Rack/Brushings -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Steering Rack/Bushings</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="loose/clunking noise">Loose/Clunking Noise</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        
                        <!-- Front Differential -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Differential</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="whining/humming noise, needs to be serviced">Whining/Humming noise, Needs to be serviced</option>
                                <option value="leaking">Leaking</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        
                         <!-- Rear Differential -->
                         <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Differential</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="whining/humming noise, needs to be serviced">Whining/Humming noise, Needs to be serviced</option>
                                <option value="leaking">Leaking</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Front Springs/Shock Absorbers -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Springs/Shock Absorbers</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="leaking">Leaking</option>
                                <option value="bouncing/noisy">Bouncing/Noisy</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Rear Springs/Shock Absorbers -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Springs/Shock Absorbers</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="leaking">Leaking</option>
                                <option value="bouncing/noisy">Bouncing/Noisy</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Front Axle -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Axle</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="boot/axle leaking">Boot/Axle Leaking</option>
                                <option value="clunking noise">Clunking Noise</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Rear Axle -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Axle</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="boot/axle leaking">Boot/Axle Leaking</option>
                                <option value="clunking noise">Clunking Noise</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                                <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Front Ball Joint -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Ball Joint</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="boot damaged/leak">Boot damaged/Leak</option>
                                <option value="leak">Leak</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Rear Ball Joint -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Ball Joint</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="boot damaged/leak">Boot damaged/Leak</option>
                                <option value="leak">Leak</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Power Steering -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Power Steering</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="whining noise from motor">Whining noise from motor</option>
                                <option value="faulty">Faulty</option>
                                <option value="stearing oil leaking">Stearing oil leaking</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Front Suspension Arms/Bushes -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Suspension Arms/Bushes</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and Tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="noisy">Noisy</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Rear Suspension Arms/Bushes -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Suspension Arms/Bushes</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and Tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="noisy">Noisy</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>


                                       </div> 
                                        
                                    </div>
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>

                                 <div class="tab-pane" role="tabpanel" id="step7">
                                    <h5 class="text-center font-big">INTERIOR</h5>
                                    <div class="all-info-container">
                                       
                                        <div class="row">


                        <!-- Dashboard Condition -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Dashboard Condition</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>
                            
                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-md-4 ">
                                <label for="floatingTextarea">Comments</label>
                                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Speedometer Cluster -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Speedometer Cluster</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>
                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        
                        <!-- Steering Wheel -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Steering Wheel</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>
                        
                        <!-- Visor -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Visor</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Internal Mirrors -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Internal Mirrors</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Door Fittings/Operation -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Door Fittings/Operation</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Door Hinges -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Door Hinges</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Door Stoppers -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Door Stoppers</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Trim Panels -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Trim Panels</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Head Lining -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Head Lining</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Carpets -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Carpets</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Seat Belts -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Seat Belts</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Seats -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Seats</h5>
                        </div>

                        <div class="col-md-4">
                                <label for="">Condition</label>
                                <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                                </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Boot/Trunk -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Boot/Trunk</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Arm Rest -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Arm Rest</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Storage Compartments -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Storage Compartments</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Front Wind Screen -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Front Wind Screen</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                                <label for="">Rating</label>
                                <select class="form-select" id="" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Rear Wind Screen -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Rear Wind Screen</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Gear Liver -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Gear Liver</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="wear and tear">Wear and tear</option>
                                <option value="damaged">Damaged</option>
                                <option value="scratched">Scratched</option>
                                <option value="n/a">N/A</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                           



                                        </div>    
                                        
                                    </div>
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Continue</button></li>
                                    </ul>
                                </div>


                                 <div class="tab-pane" role="tabpanel" id="step8">
                                    <h5 class="text-center font-big">FINAL CHECKS</h5>
                                    <div class="all-info-container">
                                       
                                       <div class="row">
                                          
                        <!-- Engine Performance -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Engine Performance</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="smooth">Smooth</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                    <option selected disabled value="">Choose...</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Engine Smoke -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Engine Smoke</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="none">None</option>
                                <option value="minimal">Minimal</option>
                                <option value="excessive">Excessive</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Gear Shifting -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Gear Shifting</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="smooth">Smooth</option>
                                <option value="hard">Hard</option>
                                <option value="n/a">N/A</option>
                                <option value="slipping">Slipping</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Clutch Operation -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Clutch Operation</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="smooth">Smooth</option>
                                <option value="hard">Hard</option>
                                <option value="n/a">N/A</option>
                                <option value="slipping">Slipping</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Instrument/Controls -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Instrument/Controls</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                                <option value="engine light on">Engine Light On</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Cruise Control -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Cruise Control</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Steering Effort/Handling -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Steering Effort/Handling</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="smooth">Smooth</option>
                                <option value="hard">Hard</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Alignment -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Alignment</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="bad">Bad</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- Brake Operation -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">Brake Operation</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="bad">Bad</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- 4WD Operation -->
                        <div class="col-md-12">
                            <h5 class="text-success mt-3">4WD Operation</h5>
                        </div>

                        <div class="col-md-4">
                            <label for="">Condition</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="good">Good</option>
                                <option value="faulty">Faulty</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="">Rating</label>
                            <select class="form-select" id="" required>
                                <option selected disabled value="">Choose...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                            </select>
                        </div>

                        <div class="col-md-4 ">
                            <label for="floatingTextarea">Comments</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <!-- submit button -->
                        <div class="col-md-12 text-center my-3">
                            <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                                       </div> 
                                        
                                    </div>
                                    
                                    <ul class="list-inline pull-right">
                                        <li><button type="button" class="default-btn prev-step">Back</button></li>
                                        <li><button type="button" class="default-btn next-step">Finish</button></li>
                                    </ul>
                                </div>


                                <div class="clearfix"></div>
                            </div>
                            
                      
                    </div>
                                             
                                               
                                     
                        
                    
                     
                      
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    
      <!-- Css Include -->
      <?php include 'include/js.php' ;?>

      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
     <!-- /Css Include -->
     <script>
// ------------step-wizard-------------
$(document).ready(function () {
    $('.nav-tabs > li a[title]').tooltip();
    
    //Wizard
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {

        var target = $(e.target);
    
        if (target.parent().hasClass('disabled')) {
            return false;
        }
    });

    $(".next-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        active.next().removeClass('disabled');
        nextTab(active);

    });
    $(".prev-step").click(function (e) {

        var active = $('.wizard .nav-tabs li.active');
        prevTab(active);

    });
});

function nextTab(elem) {
    $(elem).next().find('a[data-toggle="tab"]').click();
}
function prevTab(elem) {
    $(elem).prev().find('a[data-toggle="tab"]').click();
}


$('.nav-tabs').on('click', 'li', function() {
    $('.nav-tabs li.active').removeClass('active');
    $(this).addClass('active');
});

$(".flatpickr1").flatpickr();
$(".flatpickr2").flatpickr();
$(".flatpickr3").flatpickr();
$(".flatpickr4").flatpickr();

     </script>
    
</body>
</html>