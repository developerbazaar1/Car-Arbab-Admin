<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Css Meta Url-css Style Include -->
    <?php include 'include/css.php'; ?>
    <!-- /Css Include -->
    <!-- dropify -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">

</head>

<body>
    <div class="app align-content-stretch d-flex flex-wrap">


        <!-- Sidebar Include -->
        <?php include 'include/sidebar.php'; ?>
        <!-- /Sidebar Include -->

        <div class="app-container">

            <!-- Sidebar Include -->
            <?php include 'include/header.php'; ?>
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
                                <div class="card widget widget-stats pt-4">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                            <div class="widget-stats-content flex-fill">
                                                <h5 class="text-center">Seller Terms of Service:</h5>
                                                <p class="text-center pb-4">By signing below, you, the seller of the vehicle in this report indemnify BeSoji and the inspector against any liabilities including damages, costs, and charges made to the vehicle. You agree to indemnify BeSoji and the inspector of any incidents caused to the vehicle and/or public/3rd party property due to mechanical imperfections in the vehicle.</p>

                                                <div class="wizard mt-4">
                                                    <div class="wizard-inner">
                                                        <div class="connecting-line"></div>
                                                        <ul class="nav nav-tabs" role="tablist">
                                                            <li role="presentation" class="active">
                                                                <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span></a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span></a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step4" data-toggle="tab" aria-controls="step4" role="tab"><span class="round-tab">4</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step5" data-toggle="tab" aria-controls="step5" role="tab"><span class="round-tab">5</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step6" data-toggle="tab" aria-controls="step6" role="tab"><span class="round-tab">6</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step7" data-toggle="tab" aria-controls="step7" role="tab"><span class="round-tab">7</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step8" data-toggle="tab" aria-controls="step8" role="tab"><span class="round-tab">8</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step9" data-toggle="tab" aria-controls="step9" role="tab"><span class="round-tab">9</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step10" data-toggle="tab" aria-controls="step10" role="tab"><span class="round-tab">10</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step11" data-toggle="tab" aria-controls="step11" role="tab"><span class="round-tab">11</span> </a>
                                                            </li>
                                                            <li role="presentation" class="disabled">
                                                                <a href="#step13" data-toggle="tab" aria-controls="step11" role="tab"><span class="round-tab">13</span> </a>
                                                            </li>

                                                            <li role="presentation" class="disabled">
                                                                <a href="#End" data-toggle="tab" aria-controls="End" role="tab"><span class="round-tab">End</span> </a>
                                                            </li>
                                                        </ul>
                                                    </div>


                                                    <div class="tab-content" id="main_form">
                                                        <div class="tab-pane active" role="tabpanel" id="step1">

                                                            <form action="/action_page.php" class="">
                                                                <div class="row mt-4">
                                                                    <!-- Seller's Phone Number -->
                                                                    <div class="col-md-6 seller-phone">
                                                                        <label for="phone">Seller's Phone Number :</label><br>
                                                                        <input class="cstm-form_input" type="tel" id="phone" name="phone" placeholder="123-45-678" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                                                                    </div>

                                                                    <!-- Type Of Seller -->
                                                                    <div class="col-md-6">
                                                                        <label class="typeofseller" for=""> Type Of Seller :</label>

                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" id="seller" name="seller" value="seller" required>
                                                                            <label class="form-check-label radio-btn-label" for="seller">Private Seller</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" id="dealer" name="seller" value="dealer" required>
                                                                            <label class="form-check-label radio-btn-label" for="dealer">Dealer</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" id="freelancer" name="seller" value="freelancer" required>
                                                                            <label class="form-check-label radio-btn-label" for="freelancer">Maybe Freelancer</label>
                                                                        </div>
                                                                        <div class="form-check">
                                                                            <input class="form-check-input" type="radio" id="cararbab" name="seller" value="cararbab" required>
                                                                            <label class="form-check-label radio-btn-label" for="cararbab">Car Arbab</label>
                                                                        </div>
                                                                        <br>

                                                                    </div>
                                                                    <!--------- image upload --------->
                                                                    <div class="col-md-12 mt-5 mb-4">
                                                                        <div class="form-group text-center cstm-file-upload">
                                                                            <!-- <img src="../assets/images/cloud-computing.png" alt=""><br> -->
                                                                            <input type="file" class="cstm-file-upload" name="images[]" multiple id="upload-img" />
                                                                        </div>
                                                                        <div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
                                                                    </div>
                                                                    <hr class="mt-5">

                                                                    <div class="col-md-12 mt-4">
                                                                        <div class="customer-form">
                                                                            <h6>Customer Name :</h6>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control">
                                                                                    <span>First name</span>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control">
                                                                                    <span>Last name</span>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row cstm-date mt-5">
                                                                                <div class="col-md-6 cstm-date ">
                                                                                    <input class="cstm-form_input" type="date" id="date" name="date">
                                                                                    <span>Date</span>
                                                                                </div>
                                                                                <div class="col cstm-time">
                                                                                    <input class="cstm-form_input" type="time" id="time" name="time">
                                                                                    <select id="ampm" name="ampm">
                                                                                        <option value="am">AM</option>
                                                                                        <option value="pm">PM</option>
                                                                                    </select><br>
                                                                                    <span>Hours Minutes</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-4">

                                                                    <div class="col-md-12 mt-4">

                                                                        <div class="vehicle-details">
                                                                            <h6>Vehicle Details :</h6>
                                                                            <div class="row">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">Make</label>
                                                                                        <select id="cars" name="cars">
                                                                                            <option value="" selected>Please Select</option>
                                                                                            <option value="ABARTH">ABARTH</option>
                                                                                            <option value="ACURA">ACURA</option>
                                                                                            <option value="ALPINA">ALPINA</option>
                                                                                            <option value="ALPINE">ALPINE</option>
                                                                                            <option value="ASTON MARTIN">ASTON MARTIN</option>
                                                                                            <option value="AUDI">AUDI</option>
                                                                                            <option value="BENTLEY">BENTLEY</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="exampleFormControlSelect1">Model</label>
                                                                                    <input class="form-control" type="text">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-5">
                                                                                <div class="col">
                                                                                    <label for="exampleFormControlSelect1">Year</label>
                                                                                    <input class="form-control" placeholder="ex: 2024" type="text">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">Engine Size
                                                                                        </label>
                                                                                        <select id="cars" name="cars">
                                                                                            <option value="" selected>Please Select</option>
                                                                                            <option value="4-Cylinder">4-Cylinder</option>
                                                                                            <option value="6-Cylinder">6-Cylinder</option>
                                                                                            <option value="8-Cylinder">8-Cylinder</option>
                                                                                            <option value="10-Cylinder">10-Cylinder</option>
                                                                                            <option value="12-Cylinder">12-Cylinder</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-5">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">Regional Specs</label>
                                                                                        <select id="cars" name="cars">
                                                                                            <option value="" selected>Please Select</option>
                                                                                            <option value="GCC">GCC</option>
                                                                                            <option value="American">American</option>
                                                                                            <option value="Australian">Australian</option>
                                                                                            <option value="Canadian">Canadian</option>
                                                                                            <option value="European">European</option>
                                                                                            <option value="Japanese">Japanese</option>
                                                                                            <option value="Other">Other</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="exampleFormControlSelect1">Mileage (KM)</label>
                                                                                    <input class="form-control" type="number" placeholder="ex: 25">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-5">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">Transmission</label>
                                                                                        <select id="cars" name="cars">
                                                                                            <option value="" selected>Please Select</option>
                                                                                            <option value="Manual">Manual</option>
                                                                                            <option value="Automatic">Automatic</option>
                                                                                            <option value="Electric">Electric</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">Fuel Type</label>
                                                                                        <select id="cars" name="cars">
                                                                                            <option value="" selected>Please Select</option>
                                                                                            <option value="Petrol">Petrol</option>
                                                                                            <option value="Diesel">Diesel</option>
                                                                                            <option value="Electric">Electric</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-5">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">Interior</label>
                                                                                        <select id="cars" name="cars">
                                                                                            <option value="" selected>Please Select</option>
                                                                                            <option value="Leather">Leather</option>
                                                                                            <option value="Fabric">Fabric</option>
                                                                                            <option value="Suede">Suede</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <label for="exampleFormControlSelect1">VIN Number</label>
                                                                                    <input class="form-control" type="text" maxlength="17" >
                                                                                </div>
                                                                            </div>
                                                                            <div class="row mt-5">
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">Number of Keys</label>
                                                                                        <select id="cars" name="cars">
                                                                                            <option value="" selected>Please Select</option>
                                                                                            <option value="None">None</option>
                                                                                            <option value="1">1</option>
                                                                                            <option value="2">2</option>
                                                                                            <option value="3">3</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col">
                                                                                    <div class="form-group">
                                                                                        <label for="exampleFormControlSelect1">Spare Tire</label>
                                                                                        <select id="cars" name="cars">
                                                                                            <option value="" selected>Please Select</option>
                                                                                            <option value="Available">Available</option>
                                                                                            <option value="Not Available">Not Available</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                                <div class="list-inline pull-right">
                                                                    <a href="#step2"><button type="submit" class="default-btn next-step ">Continue to next step</button></a>
                                                                </div>
                                                                <!-- <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn next-step">Continue to next step</button></li>
                                                                </ul> -->
                                                                <!-- <input type="submit" value="Continue to next step"> -->
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step2">
                                                            <form action="">
                                                                <h2 class="text-center">Engine</h2>
                                                                <hr class="mt-5">
                                                                <div class="row mt-5">
                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Engine Upper Cover</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-pass" name="engine-upper" id="rb-pass" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-scratches" name="engine-upper" id="rb-scratches" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-scratches">Minor Scratches</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-major" name="engine-upper" id="rb-major" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-major">Major Scratches</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-cracked" name="engine-upper" id="rb-cracked" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-cracked">Cracked / Broken</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-components" name="engine-upper" id="rb-components" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-components">Missing Components</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-missing" name="engine-upper" id="rb-missing" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-missing">Missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-other" name="engine-upper" id="rb-other" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input other" id="other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Engine Upper Cover Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-shield_cover">
                                                                            <h6>Engine Shield Cover</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shield-pass" name="engine-shield_cover" id="rb-shield-pass" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-shield-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shield-scratches" name="engine-shield_cover" id="rb-shield-scratches" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-shield-scratches">Minor Scratches</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shield-major" name="engine-shield_cover" id="rb-shield-major" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-shield-major">Major Scratches</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shield-cracked" name="engine-shield_cover" id="rb-shield-cracked" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-shield-cracked">Cracked / Broken</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shield-components" name="engine-shield_cover" id="rb-shield-components" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-shield-components">Missing Components</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shield-missing" name="engine-shield_cover" id="rb-shield-missing" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-shield-missing">Missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shield-other" name="engine-shield_cover" id="rb-shield-other" type="radio" />
                                                                                <label class="form-check-label label radio-btn-label" for="rb-shield-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input shield-other" id="shield-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Engine Shield Cover Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper engine-mounts">
                                                                            <h6>Engine Mounts</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-mounts-pass" name="engine-mounts" id="rb-mounts-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-mounts-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-mounts-minor" name="engine-mounts" id="rb-mounts-minor" type="radio" />
                                                                                <label class="form-check-label label" for="rb-mounts-minor">Minor worn out due to wear and tear. Needs to be replaced.</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-mounts-damaged" name="engine-mounts" id="rb-mounts-damaged" type="radio" />
                                                                                <label class="form-check-label label " for="rb-mounts-damaged">Damaged (can lead to engine vibration)</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-mounts-broken" name="engine-mounts" id="rb-mounts-broken" type="radio" />
                                                                                <label class="form-check-label label" for="rb-mounts-broken">Broken (can lead to engine vibration and clunking noise)</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-mounts-other" name="engine-mounts" id="rb-mounts-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-mounts-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input mounts-other" id="mounts-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Engine Mounts Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Bonnet Hinge & Holder</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-bonnet-pass" name="bonnet-hinge" id="rb-bonnet-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-bonnet-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-bonnet-missing" name="bonnet-hinge" id="rb-bonnet-missing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-bonnet-missing">Missing/Unavailable</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-bonnet-cable" name="bonnet-hinge" id="rb-bonnet-cable" type="radio" />
                                                                                <label class="form-check-label label" for="rb-bonnet-cable">Not opening smoothly, cable and/or lock needs to be repaired.</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-bonnet-aftermarket" name="bonnet-hinge" id="rb-bonnet-aftermarket" type="radio" />
                                                                                <label class="form-check-label label" for="rb-bonnet-aftermarket">Aftermarket</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-bonnet-other" name="bonnet-hinge" id="rb-bonnet-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-bonnet-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input bonnet-other" id="bonnet-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Bonnet Holder Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Turbo / Supercharger</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-turbo-pass" name="turbo-preference" id="rb-turbo-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-turbo-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-turbo-na" name="turbo-preference" id="rb-turbo-na" type="radio" />
                                                                                <label class="form-check-label label" for="rb-turbo-na">N/A</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-turbo-fan" name="turbo-preference" id="rb-turbo-fan" type="radio" />
                                                                                <label class="form-check-label label" for="rb-turbo-fan">Fan not working properly</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-turbo-serviced" name="turbo-preference" id="rb-turbo-serviced" type="radio" />
                                                                                <label class="form-check-label label" for="rb-turbo-serviced">Needs to be serviced</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-turbo-seal" name="turbo-preference" id="rb-turbo-seal" type="radio" />
                                                                                <label class="form-check-label label" for="rb-turbo-seal">Seal(s) damaged</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-turbo-hose" name="turbo-preference" id="rb-turbo-hose" type="radio" />
                                                                                <label class="form-check-label label" for="rb-turbo-hose">Hose/clamp damaged</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-turbo-other" name="turbo-preference" id="rb-turbo-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-turbo-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input turbo-other" id="turbo-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Turbo/Supercharger Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Fender Liners</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fender-pass" name="fender-preference" id="rb-fender-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fender-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fender-scratched" name="fender-preference" id="rb-fender-scratched" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fender-scratched">Scratched</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fender-minor" name="fender-preference" id="rb-fender-minor" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fender-minor">Minor Damaged/Cracked</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fender-major" name="fender-preference" id="rb-fender-major" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fender-major">Major Damaged/Cracked</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fender-missing" name="fender-preference" id="rb-fender-missing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fender-missing">Missing clips</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fender-liners" name="fender-preference" id="rb-fender-liners" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fender-liners">Liners missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fender-other" name="fender-preference" id="rb-fender-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fender-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input fender-other" id="fender-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Fender Liners Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Drive Belt / Pulleys</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-drive-pass" name="drive-preference" id="rb-drive-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-drive-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-drive-general" name="drive-preference" id="rb-drive-general" type="radio" />
                                                                                <label class="form-check-label label" for="rb-drive-general">General wear and tear</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-drive-squeaking" name="drive-preference" id="rb-drive-squeaking" type="radio" />
                                                                                <label class="form-check-label label" for="rb-drive-squeaking">Squeaking belt sounds</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-drive-bearing" name="drive-preference" id="rb-drive-bearing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-drive-bearing">Damaged bearing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-drive-pulley" name="drive-preference" id="rb-drive-pulley" type="radio" />
                                                                                <label class="form-check-label label" for="rb-drive-pulley">Damaged pulley</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-drive-other" name="drive-preference" id="rb-drive-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-drive-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input drive-other" id="drive-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Drive Belt / Pulleys Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-12">
                                                                        <div class="engine-upper">
                                                                            <h6>Engine Idle</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-engine-pass" name="engine-preference" id="rb-engine-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-engine-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-engine-rpm" name="engine-preference" id="rb-engine-rpm" type="radio" />
                                                                                <label class="form-check-label label" for="rb-engine-rpm">RPM is fluctuating</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-engine-idling" name="engine-preference" id="rb-engine-idling" type="radio" />
                                                                                <label class="form-check-label label" for="rb-engine-idling">Idling below normal</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-engine-bouncing" name="engine-preference" id="rb-engine-bouncing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-engine-bouncing">Bouncing or shaking during idle</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-engine-stalling" name="engine-preference" id="rb-engine-stalling" type="radio" />
                                                                                <label class="form-check-label label" for="rb-engine-stalling">Engine stalling</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-engine-vehicle" name="engine-preference" id="rb-engine-vehicle" type="radio" />
                                                                                <label class="form-check-label label" for="rb-engine-vehicle">Vehicle not starting</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-engine-other" name="engine-preference" id="rb-engine-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-engine-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input engine-other" id="engine-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Engine Oil Filler Cap</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-oil-pass" name="oil-preference" id="rb-oil-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-oil-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-oil-filler" name="oil-preference" id="rb-oil-filler" type="radio" />
                                                                                <label class="form-check-label label" for="rb-oil-filler">Oil filler cap damaged/broken</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-oil-cap" name="oil-preference" id="rb-oil-cap" type="radio" />
                                                                                <label class="form-check-label label" for="rb-oil-cap">Oil filler cap missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-oil-other" name="oil-preference" id="rb-oil-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-oil-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input oil-other" id="oil-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Engine Oil Filler Cap Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-uppe radiator">
                                                                            <h6>Radiator</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-pass" name="radiator-preference" id="rb-radiator-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-external" name="radiator-preference" id="rb-radiator-external" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-external">Visible external damage</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-clogged" name="radiator-preference" id="rb-radiator-clogged" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-clogged">Symptoms of clogged radiator</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-hose" name="radiator-preference" id="rb-radiator-hose" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-hose">Hose(s) damaged, need to be replaced</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-clamps" name="radiator-preference" id="rb-radiator-clamps" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-clamps">Hose clamps missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-visible" name="radiator-preference" id="rb-radiator-visible" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-visible">Leakage visible</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-cap" name="radiator-preference" id="rb-radiator-cap" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-cap">Radiator cap damaged/broken</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-missing" name="radiator-preference" id="rb-radiator-missing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-missing">Radiator cap missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-radiator-other" name="radiator-preference" id="rb-radiator-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-radiator-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input radiator-other" id="radiator-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Radiator Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Engine Oil Leaks</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-pass" name="leaks-preference" id="rb-leaks-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-filter" name="leaks-preference" id="rb-leaks-filter" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-filter">Leak from oil filter gasket</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-pan" name="leaks-preference" id="rb-leaks-pan" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-pan">Leak from oil pan gasket</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-pump" name="leaks-preference" id="rb-leaks-pump" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-pump">Leak from oil pump gasket</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-cover" name="leaks-preference" id="rb-leaks-cover" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-cover">Leak from valve cover/camshaft gasket</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-drain" name="leaks-preference" id="rb-leaks-drain" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-drain">Leak from oil drain plug</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-seal" name="leaks-preference" id="rb-leaks-seal" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-seal">Leak from crankshaft seal</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-timing" name="leaks-preference" id="rb-leaks-timing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-timing">Leak from timing cover gasket</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-gasket" name="leaks-preference" id="rb-leaks-gasket" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-gasket">Leak from head gasket</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-leaks-other" name="leaks-preference" id="rb-leaks-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-leaks-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input leaks-other" id="leaks-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Engine Oil Leak Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Engine Oil Condition</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-condition-pass" name="condition-preference" id="rb-condition-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-condition-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-condition-black" name="condition-preference" id="rb-condition-black" type="radio" />
                                                                                <label class="form-check-label label" for="rb-condition-black">Oil is black, needs to be replaced</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-condition-low" name="condition-preference" id="rb-condition-low" type="radio" />
                                                                                <label class="form-check-label label " for="rb-condition-low">Level is low, needs to be topped up with same oil grade</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-condition-high" name="condition-preference" id="rb-condition-high" type="radio" />
                                                                                <label class="form-check-label label" for="rb-condition-high">Level is high, needs to be partially removed</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-condition-cover" name="condition-preference" id="rb-condition-cover" type="radio" />
                                                                                <label class="form-check-label label" for="rb-condition-cover">Signs of coolant in engine oil, might mean failure in one more of engine gaskets or seals</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-condition-filler" name="condition-preference" id="rb-condition-filler" type="radio" />
                                                                                <label class="form-check-label label" for="rb-condition-filler">Oil filler cap damaged/broken</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-condition-cap" name="condition-preference" id="rb-condition-cap" type="radio" />
                                                                                <label class="form-check-label label" for="rb-condition-cap">Oil filler cap missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-condition-other" name="condition-preference" id="rb-condition-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-condition-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input condition-other" id="condition-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Engine Oil Condition Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper coolant-condition">
                                                                            <h6>Coolant Condition</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-coolant-pass" name="coolant-preference" id="rb-coolant-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-coolant-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-coolant-topped" name="coolant-preference" id="rb-coolant-topped" type="radio" />
                                                                                <label class="form-check-label label" for="rb-coolant-topped">Needs to be topped up</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-coolant-flushed" name="coolant-preference" id="rb-coolant-flushed" type="radio" />
                                                                                <label class="form-check-label label label-coolant" for="rb-coolant-flushed">Needs to be flushed (Looks colorless/rusty)</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-coolant-surface" name="coolant-preference" id="rb-coolant-surface" type="radio" />
                                                                                <label class="form-check-label label label-coolant" for="rb-coolant-surface">Looks sludgy/oil surface (Might be head gasket leakage)</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-coolant-bulgy" name="coolant-preference" id="rb-coolant-bulgy" type="radio" />
                                                                                <label class="form-check-label label label-cstm" for="rb-coolant-bulgy">Coolant hose needs to be replaced (Leaking/cracked/bulgy)</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-coolant-filler" name="coolant-preference" id="rb-coolant-filler" type="radio" />
                                                                                <label class="form-check-label label" for="rb-coolant-filler">Oil filler cap damaged/broken</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-coolant-other" name="coolant-preference" id="rb-coolant-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-coolant-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input coolant-other" id="coolant-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Coolant Condition Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Coolant Cap</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-cap-pass" name="cap-preference" id="rb-cap-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-cap-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-cap-missing" name="cap-preference" id="rb-cap-missing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-cap-missing">Filler cap missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-cap-broken" name="cap-preference" id="rb-cap-broken" type="radio" />
                                                                                <label class="form-check-label label" for="rb-cap-broken">Filler cap damaged/broken</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-cap-other" name="cap-preference" id="rb-cap-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-cap-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input cap-other" id="cap-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Coolant Cap Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Hoses & Pipes</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-pipes-pass" name="pipes-preference" id="rb-pipes-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-pipes-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-pipes-other" name="pipes-preference" id="rb-pipes-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-pipes-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input pipes-other" id="pipes-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Hose Damage Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Exhaust System</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-exhaust-pass" name="exhaust-preference" id="rb-exhaust-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-exhaust-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-exhaust-leak" name="exhaust-preference" id="rb-exhaust-leak" type="radio" />
                                                                                <label class="form-check-label label" for="rb-exhaust-leak">Exhaust leak prominent</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-exhaust-prominent" name="exhaust-preference" id="rb-exhaust-prominent" type="radio" />
                                                                                <label class="form-check-label label" for="rb-exhaust-prominent">Rust on exhaust prominent</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-exhaust-gasket" name="exhaust-preference" id="rb-gasket-surface" type="radio" />
                                                                                <label class="form-check-label label" for="rb-gasket-surface">Gasket(s) needs to be replaced</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-exhaust-missing" name="exhaust-preference" id="rb-exhaust-missing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-exhaust-missing">Clamp missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-exhaust-bent" name="exhaust-preference" id="rb-exhaust-bent" type="radio" />
                                                                                <label class="form-check-label label" for="rb-exhaust-bent">Hanger bent/damaged</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-exhaust-tip" name="exhaust-preference" id="rb-exhaust-tip" type="radio" />
                                                                                <label class="form-check-label label " for="rb-exhaust-tip">Exhaust tip(s) damaged</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-exhaust-other" name="exhaust-preference" id="rb-exhaust-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-exhaust-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input exhaust-other" id="exhaust-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Exhaust Leak Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Visible Rust</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-visible-pass" name="visible-preference" id="rb-visible-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-visible-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-visible-other" name="visible-preference" id="rb-visible-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-visible-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input visible-other" id="visible-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Visible Rust Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-12">
                                                                        <div class="">
                                                                            <label>Battery Condition</label>

                                                                            <div id="projectbox">
                                                                                <!-- Start project HTML -->
                                                                                <div class='battery mt-4'>
                                                                                    <div class='bar' data-power='10'></div>
                                                                                    <div class='bar' data-power='20'></div>
                                                                                    <div class='bar' data-power='30'></div>
                                                                                    <div class='bar' data-power='40'></div>
                                                                                    <div class='bar' data-power='50'></div>
                                                                                </div>
                                                                                <!-- End Project HTML -->
                                                                                <div class="bottom-text mt-5 text-center">
                                                                                    <p>Please review the car diagnostic report at the end of this document for more information on the engine condition.</p>
                                                                                </div>

                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5">

                                                                </div>
                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step3">
                                                            <form action="">
                                                                <h2 class="text-center">Transmission</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="row">
                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Fluid Level & Condition</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fluid-pass" name="fluid-level" id="rb-fluid-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fluid-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fluid-brown" name="fluid-level" id="rb-fluid-brown" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fluid-brown">Dark brown, fluid and filter needs to be replaced</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fluid-pinkish" name="fluid-level" id="rb-fluid-pinkish" type="radio" />
                                                                                <label class="label" for="rb-fluid-pinkish">Light pinkish fluid, water or fluid contamination. Might mean damaged transmission</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fluid-low" name="fluid-level" id="rb-fluid-low" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fluid-low">Level is low, needs to be topped up with same oil grade</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fluid-high" name="fluid-level" id="rb-fluid-high" type="radio" />
                                                                                <label class="label" for="rb-fluid-high">Level is high, needs to be partially removed</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fluid-cap" name="fluid-level" id="rb-fluid-cap" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fluid-cap">Filler cap damaged/broken</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fluid-missing" name="fluid-level" id="rb-fluid-missing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fluid-missing">Filler cap missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-fluid-other" name="fluid-level" id="rb-fluid-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-fluid-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input fluid-other" id="fluid-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Fluid Level & Condition - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Transmission Fluid Leaks</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-transmission-pass" name="transmission-preference" id="rb-transmission-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-transmission-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-transmission-seal" name="transmission-preference" id="rb-transmission-seal" type="radio" />
                                                                                <label class="form-check-label label" for="rb-transmission-seal">Leak from transmission seal</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-transmission-lines" name="transmission-preference" id="rb-transmission-lines" type="radio" />
                                                                                <label class="form-check-label label" for="rb-transmission-lines">Leak from transmission lines</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-transmission-pump" name="transmission-preference" id="rb-transmission-pump" type="radio" />
                                                                                <label class="form-check-label label" for="rb-transmission-pump">Leak from transmission pump</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-transmission-pan" name="transmission-preference" id="rb-transmission-pan" type="radio" />
                                                                                <label class="form-check-label label" for="rb-transmission-pan">Leak from transmission pan</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-transmission-other" name="transmission-preference" id="rb-transmission-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-transmission-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input transmission-other" id="transmission-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Transmission Fluid Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-7">
                                                                        <div class="engine-upper">
                                                                            <h6>Gear Selector</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-gear-pass" name="gear-preference" id="rb-gear-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-gear-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-gear-scratched" name="gear-preference" id="rb-gear-scratched" type="radio" />
                                                                                <label class="form-check-label label" for="rb-gear-scratched">Scratched</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-gear-cracked" name="gear-preference" id="rb-gear-cracked" type="radio" />
                                                                                <label class="form-check-label label" for="rb-gear-cracked">Damaged/Cracked</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-gear-components" name="gear-preference" id="rb-gear-components" type="radio" />
                                                                                <label class="form-check-label label" for="rb-gear-components">Missing components</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-gear-missing" name="gear-preference" id="rb-gear-missing" type="radio" />
                                                                                <label class="form-check-label label" for="rb-gear-missing">Missing</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-gear-aftermarket" name="gear-preference" id="rb-gear-aftermarket" type="radio" />
                                                                                <label class="form-check-label label" for="rb-gear-aftermarket">Aftermarket</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-gear-other" name="gear-preference" id="rb-gear-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-gear-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input gear-other" id="gear-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="fault-photo">
                                                                            <label>Gear Selector Fault - Photo</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-12">
                                                                        <div class="engine-upper">
                                                                            <h6>Noise</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-noise-pass" name="noise-preference" id="rb-noise-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-noise-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-noise-other" name="noise-preference" id="rb-noise-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-noise-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input noise-other" id="noise-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-12">
                                                                        <div class="engine-upper">
                                                                            <h6>Gear Shifting</h6>
                                                                            <br>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shifting-pass" name="shifting-preference" id="rb-shifting-pass" type="radio" />
                                                                                <label class="form-check-label label" for="rb-shifting-pass">Pass</label>
                                                                            </div>
                                                                            <div class="form-check">
                                                                                <input class="form-check-input rb-shifting-other" name="shifting-preference" id="rb-shifting-other" type="radio" />
                                                                                <label class="form-check-label label" for="rb-shifting-other">Other</label>
                                                                                <br>
                                                                                <input class="cstm-form_input shifting-other" id="shifting-other" placeholder="Please type another option here" type="text" />
                                                                            </div>

                                                                        </div>
                                                                        <div class="bottom-text mt-5 text-center">
                                                                            <p>Please review the car diagnostic report at the end of this document for more information on the engine condition.</p>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5">

                                                                </div>
                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step4">
                                                            <form action="">
                                                                <h2 class="text-center">Brake System, Suspension & Tyres</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="engine-upper">
                                                                                <h6>Brake Pads Front</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-padsfront-pass" name="padsfront" id="rb-padsfront-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-padsfront-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-padsfront-N/A" name="padsfront" id="rb-padsfront-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-padsfront-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-padsfront-other" name="padsfront" id="rb-padsfront-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-padsfront-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input padsfront-other" id="padsfront-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="engine-upper fault-photo">
                                                                                <h6>Brake Pads Rear</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-padsrear-pass" name="padsrear" id="rb-padsrear-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-padsrear-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-padsrear-N/A" name="padsrear" id="rb-padsrear-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-padsrear-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-padsrear-other" name="padsrear" id="rb-padsrear-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-padsrear-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input padsrear-other" id="padsrear-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-6">
                                                                            <div class="engine-upper">
                                                                                <h6>Brake Discs Front</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-discsfront-pass" name="discsfront" id="rb-discsfront-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-discsfront-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-discsfront-N/A" name="discsfront" id="rb-discsfront-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-discsfront-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-discsfront-other" name="discsfront" id="rb-discsfront-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-discsfront-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input discsfront-other" id="discsfront-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="engine-upper fault-photo">
                                                                                <h6>Brake Discs Rear</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-discsrear-pass" name="discsrear" id="rb-discsrear-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-discsrear-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-discsrear-N/A" name="discsrear" id="rb-discsrear-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-discsrear-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-discsrear-other" name="discsrear" id="rb-discsrear-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-discsrear-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input discsrear-other" id="discsrear-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-6">
                                                                            <div class="engine-upper">
                                                                                <h6>ABS Sensors</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-sensors-pass" name="sensors" id="rb-sensors-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-sensors-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-sensors-N/A" name="sensors" id="rb-sensors-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-sensors-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-sensors-other" name="sensors" id="rb-sensors-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-sensors-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input sensors-other" id="sensors-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="engine-upper fault-photo">
                                                                                <h6>Handbrake</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-handbrake-pass" name="handbrake" id="rb-handbrake-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-handbrake-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-handbrake-N/A" name="handbrake" id="rb-handbrake-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-handbrake-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-handbrake-other" name="handbrake" id="rb-handbrake-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-handbrake-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input handbrake-other" id="handbrake-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Front Suspension</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-suspension-pass" name="suspension" id="rb-suspension-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-suspension-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-suspension-N/A" name="suspension" id="rb-suspension-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-suspension-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-suspension-other" name="suspension" id="rb-suspension-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-suspension-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input suspension-other" id="suspension-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Front Suspension Fault - Photo</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Rear Suspension</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearsuspension-pass" name="rearsuspension" id="rb-rearsuspension-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearsuspension-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearsuspension-N/A" name="rearsuspension" id="rb-rearsuspension-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearsuspension-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearsuspension-other" name="rearsuspension" id="rb-rearsuspension-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearsuspension-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input rearsuspension-other" id="rearsuspension-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Front Suspension Fault - Photo</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="tyres-table">
                                                                                <label>Tyres</label>
                                                                                <table class="table table-bordered mt-3">
                                                                                    <thead class="table-limegreen">
                                                                                        <tr class="tyer-head">
                                                                                            <th scope="col" style="background:#fff; border:0px"></th>
                                                                                            <th scope="col">Manufacturer</th>
                                                                                            <th scope="col">Date</th>
                                                                                            <th scope="col">Size</th>
                                                                                            <th scope="col">Condition</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 130px;">Front Left</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 130px;">Front Right</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 130px;">Rear Left</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 130px;">Rear Right</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 130px;">Spare</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>

                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="">
                                                                                <label>Front Left Tyre</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="">
                                                                                <label>Rear Left Tyre</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="">
                                                                                <label>Rear Right Tyre</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="">
                                                                                <label>Front Right Tyre</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="tyres-table">
                                                                                <label>One Rims</label>
                                                                                <table class="table table-bordered mt-3">
                                                                                    <thead class="table-limegreen">
                                                                                        <tr class="tyer-head">
                                                                                            <th scope="col" style="background:#fff; border:0px"></th>
                                                                                            <th scope="col">Brand</th>
                                                                                            <th scope="col">Condition</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 180px;">Front Left</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 180px;">Front Right</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 180px;">Rear Left</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 180px;">Rear Right</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>

                                                                                        </tr>
                                                                                        <tr>
                                                                                            <th scope="row" style="width: 180px;">Spare</th>
                                                                                            <td><input class="form-control" type="text"></td>
                                                                                            <td><input class="form-control" type="text"></td>

                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step5">
                                                            <form action="">
                                                                <h2 class="text-center">Electrical System</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Key Remote</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-remote-pass" name="remote" id="rb-remote-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-remote-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-remote-N/A" name="remote" id="rb-remote-N/A" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-remote-N/A">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-remote-other" name="remote" id="rb-remote-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-remote-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input remote-other" id="remote-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Key Remote Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Entertainment System</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-entertainment-pass" name="entertainment" id="rb-entertainment-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-entertainment-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-entertainment-other" name="entertainment" id="rb-entertainment-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-entertainment-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input entertainment-other" id="entertainment-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Entertainment System Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Windows Operation</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-windows-pass" name="windows" id="rb-windows-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-windows-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-windows-na" name="windows" id="rb-windows-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-windows-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-windows-other" name="windows" id="rb-windows-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-windows-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input windows-other" id="windows-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Windows Operation Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Seats Adjustment (Power/Manual)</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-adjustment-pass" name="adjustment" id="rb-adjustment-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-adjustment-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-adjustment-na" name="adjustment" id="rb-adjustment-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-adjustment-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-adjustment-other" name="adjustment" id="rb-adjustment-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-adjustment-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input adjustment-other" id="adjustment-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Seat Adjustment Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Door Lock / Unlock</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-door-pass" name="door" id="rb-door-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-door-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-door-other" name="door" id="rb-door-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-door-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input door-other" id="door-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Door Lock / Unlock Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>A/C Control & Cooling</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-ac-pass" name="ac" id="rb-ac-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-ac-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-ac-other" name="ac" id="rb-ac-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-ac-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input ac-other" id="ac-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>A/C Control & Cooling Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Center Console Buttons</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-center-pass" name="center" id="rb-center-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-center-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-center-other" name="center" id="rb-center-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-center-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input center-other" id="center-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Center Console Buttons Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Cameras</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-cameras-pass" name="cameras" id="rb-cameras-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-cameras-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-cameras-na" name="cameras" id="rb-cameras-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-cameras-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-cameras-other" name="cameras" id="rb-cameras-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-cameras-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input cameras-other" id="cameras-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Cameras Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Gauges</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-gauges-pass" name="gauges" id="rb-gauges-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-gauges-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-gauges-other" name="gauges" id="rb-gauges-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-gauges-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input gauges-other" id="gauges-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Gauges Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Rear View / Side Mirror Electricals</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-mirror-pass" name="mirror" id="rb-mirror-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-mirror-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-mirror-other" name="mirror" id="rb-mirror-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-mirror-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input mirror-other" id="mirror-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Rear View/ Side Mirror Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>A/C Grilles</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-grilles-pass" name="grilles" id="rb-grilles-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-grilles-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-grilles-other" name="grilles" id="rb-grilles-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-grilles-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input grilles-other" id="grilles-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>A/C Grilles Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Starting & Ignition System</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-ignition-pass" name="ignition" id="rb-ignition-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-ignition-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-ignition-other" name="ignition" id="rb-ignition-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-ignition-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input ignition-other" id="ignition-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Starting & Ignition System Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Brake Lights</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-brake-pass" name="brake" id="rb-brake-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-brake-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-brake-other" name="brake" id="rb-brake-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-brake-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input brake-other" id="brake-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Brake Lights Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Headlights</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-headlights-pass" name="headlights" id="rb-headlights-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-headlights-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-headlights-other" name="headlights" id="rb-headlights-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-headlights-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input headlights-other" id="headlights-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Headlights Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Fog Lights</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-fog-pass" name="fog" id="rb-fog-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-fog-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-fog-na" name="fog" id="rb-fog-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-fog-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-fog-other" name="fog" id="rb-fog-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-fog-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input fog-other" id="fog-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Fog Lights Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Reverse Lights</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-reverse-pass" name="reverse" id="rb-reverse-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-reverse-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-reverse-na" name="reverse" id="rb-reverse-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-reverse-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-reverse-other" name="reverse" id="rb-reverse-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-reverse-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input reverse-other" id="reverse-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Reverse Lights Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>High Beams</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-beams-pass" name="beams" id="rb-beams-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-beams-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-beams-na" name="beams" id="rb-beams-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-beams-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-beams-other" name="beams" id="rb-beams-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-beams-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input beams-other" id="beams-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>High Beams Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Number Plate Lights</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-plate-pass" name="plate" id="rb-plate-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-plate-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-plate-na" name="plate" id="rb-plate-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-plate-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-plate-other" name="plate" id="rb-plate-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-plate-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input plate-other" id="plate-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Number Plate Lights Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Indicators & Hazards</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-hazards-pass" name="hazards" id="rb-hazards-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-hazards-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-hazards-na" name="hazards" id="rb-hazards-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-hazards-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-hazards-other" name="hazards" id="rb-hazards-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-hazards-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input hazards-other" id="hazards-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Indicators & Hazards Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Wipers</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-wipers-pass" name="wipers" id="rb-wipers-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-wipers-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-wipers-na" name="wipers" id="rb-wipers-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-wipers-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-wipers-other" name="wipers" id="rb-wipers-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-wipers-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input wipers-other" id="wipers-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Wipers Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Soft Closing Doors</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-closing-pass" name="closing" id="rb-closing-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-closing-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-closing-na" name="closing" id="rb-closing-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-closing-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-closing-other" name="closing" id="rb-closing-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-closing-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input closing-other" id="closing-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Soft Closing Doors Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Sunroof / Moonroof</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-sunroof-pass" name="sunroof" id="rb-sunroof-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-sunroof-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-sunroof-na" name="sunroof" id="rb-sunroof-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-sunroof-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-sunroof-other" name="sunroof" id="rb-sunroof-other" type="radio" />
                                                                                    <label class="form-check-label  label" for="rb-sunroof-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input sunroof-other" id="sunroof-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Sunroof/Moonroof Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Interior Lights</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-interior-pass" name="interior" id="rb-interior-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-interior-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-interior-na" name="interior" id="rb-interior-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-interior-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-interior-other" name="interior" id="rb-interior-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-interior-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input interior-other" id="interior-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Interior Lights Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Cruise Control</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-cruise-pass" name="cruise" id="rb-cruise-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-cruise-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-cruise-na" name="cruise" id="rb-cruise-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-cruise-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-cruise-other" name="cruise" id="rb-cruise-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-cruise-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input cruise-other" id="cruise-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Cruise Control Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Horn</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-horn-pass" name="horn" id="rb-horn-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-horn-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-horn-na" name="horn" id="rb-horn-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-horn-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-horn-other" name="horn" id="rb-horn-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-horn-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input horn-other" id="horn-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="engine-upper fault-photo">
                                                                                <h6>Parking Sensors Fault</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-parking-pass" name="parking" id="rb-parking-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-parking-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-parking-na" name="parking" id="rb-parking-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-parking-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-parking-other" name="parking" id="rb-parking-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-parking-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input parking-other" id="parking-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5">

                                                                    </div>

                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step6">
                                                            <form action="">
                                                                <h2 class="text-center">Interior</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Roof Lining</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-lining-pass" name="lining" id="rb-lining-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-lining-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-lining-na" name="lining" id="rb-lining-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-lining-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-lining-other" name="lining" id="rb-lining-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-lining-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input lining-other" id="lining-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Roof Lining Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Rear View Mirror</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearview-pass" name="rearview" id="rb-rearview-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearview-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearview-na" name="rearview" id="rb-rearview-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearview-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearview-other" name="rearview" id="rb-rearview-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearview-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input rearview-other" id="rearview-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Rear View Mirror Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Steering Wheel Upholstery</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-steering-pass" name="steering" id="rb-steering-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-steering-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-steering-na" name="steering" id="rb-steering-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-steering-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-steering-other" name="steering" id="rb-steering-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-steering-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input steering-other" id="steering-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Steering Wheel Upholstery Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Seats Upholstery</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-upholstery-pass" name="upholstery" id="rb-upholstery-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-upholstery-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-upholstery-na" name="upholstery" id="rb-upholstery-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-upholstery-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-upholstery-other" name="upholstery" id="rb-upholstery-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-upholstery-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input upholstery-other" id="upholstery-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Seats Upholstery Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Gear Lever</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-lever-pass" name="lever" id="rb-lever-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-lever-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-lever-na" name="lever" id="rb-lever-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-lever-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-lever-other" name="lever" id="rb-lever-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-lever-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input lever-other" id="lever-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Gear Lever Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Trunk Lining</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-trunk-pass" name="trunk" id="rb-trunk-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-trunk-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-trunk-na" name="trunk" id="rb-trunk-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-trunk-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-trunk-other" name="trunk" id="rb-trunk-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-trunk-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input trunk-other" id="trunk-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Trunk Lining Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Armrest & Side Pockets</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-armrest-pass" name="armrest" id="rb-armrest-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-armrest-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-armrest-na" name="armrest" id="rb-armrest-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-armrest-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-armrest-other" name="armrest" id="rb-armrest-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-armrest-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input armrest-other" id="armrest-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Armrest & Side Pockets Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Dashboard</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-dashboard-pass" name="dashboard" id="rb-dashboard-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-dashboard-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-dashboard-na" name="dashboard" id="rb-dashboard-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-dashboard-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-dashboard-other" name="dashboard" id="rb-dashboard-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-dashboard-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input dashboard-other" id="dashboard-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Dashboard Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Floor Mats</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-mats-pass" name="mats" id="rb-mats-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-mats-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-mats-na" name="mats" id="rb-mats-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-mats-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-mats-other" name="mats" id="rb-mats-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-mats-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input mats-other" id="mats-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Floor Mats Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Doors</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-doorsfault-pass" name="doorsfault" id="rb-doorsfault-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-doorsfault-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-doorsfault-na" name="doorsfault" id="rb-doorsfault-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-doorsfault-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-doorsfault-other" name="doorsfault" id="rb-doorsfault-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-doorsfault-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input doorsfault-other" id="doorsfault-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Doors Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Front Windscreen</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-windscreen-pass" name="windscreen" id="rb-windscreen-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-windscreen-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-windscreen-na" name="windscreen" id="rb-windscreen-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-windscreen-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-windscreen-other" name="windscreen" id="rb-windscreen-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-windscreen-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input windscreen-other" id="windscreen-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Front Windscreen Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Rear Windscreen</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearwindscreen-pass" name="rearwindscreen" id="rb-rearwindscreen-pass" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearwindscreen-pass">Pass</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearwindscreen-na" name="rearwindscreen" id="rb-rearwindscreen-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearwindscreen-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-rearwindscreen-other" name="rearwindscreen" id="rb-rearwindscreen-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-rearwindscreen-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input rearwindscreen-other" id="rearwindscreen-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="fault-photo">
                                                                                <label>Rear Windscreen Fault</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5">

                                                                    </div>

                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step7">
                                                            <form action="">
                                                                <h2 class="text-center">Service History & Manuals</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">
                                                                    <div class="row">
                                                                        <div class="col-md-7">
                                                                            <div class="engine-upper">
                                                                                <h6>Service History</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-history-proof" name="history" id="rb-history-proof" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-history-proof">Available (ask seller to change ownership with agency for proof)</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-history-na" name="history" id="rb-history-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-history-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-history-other" name="history" id="rb-history-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-history-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input history-other" id="history-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-5">
                                                                            <div class="engine-upper fault-photo">
                                                                                <h6>User Manual</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-manual-available" name="manual" id="rb-manual-available" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-manual-available">Available</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-manual-na" name="manual" id="rb-manual-na" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-manual-na">N/A</label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input rb-manual-other" name="manual" id="rb-manual-other" type="radio" />
                                                                                    <label class="form-check-label label" for="rb-manual-other">Other</label>
                                                                                    <br>
                                                                                    <input class="cstm-form_input manual-other" id="manual-other" placeholder="Please type another option here" type="text" />
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="engine-upper">
                                                                                <h6>Exterior & Interior Report</h6>
                                                                                <br>
                                                                                <div class="text-center">
                                                                                    <img src="../master/assets/images/Car_Arbab.svg" alt="" class="brand-logo" width="100px">
                                                                                    <h4 class="mt-3">Chassis, Subframe & Internal Damage Report</h4>
                                                                                    <img src="../master/assets/images/chassisdamage.jpg" alt="" class="brand-logo mt-3" width="100%">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12 mt-5">
                                                                            <div class="engine-upper chassis-checkbox">
                                                                                <h6>Damage on Chassis / Subframe</h6>
                                                                                <br>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis-pass">
                                                                                    <label class="form-check-label" for="chassis-pass">
                                                                                        Pass
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis-repaired">
                                                                                    <label class="form-check-label" for="chassis-repaired">
                                                                                        Repaired
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis-damaged">
                                                                                    <label class="form-check-label" for="chassis-damaged">
                                                                                        Damaged
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis1">
                                                                                    <label class="form-check-label" for="chassis1">
                                                                                        1
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis2">
                                                                                    <label class="form-check-label" for="chassis2">
                                                                                        2
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis3">
                                                                                    <label class="form-check-label" for="chassis3">
                                                                                        3
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis4">
                                                                                    <label class="form-check-label" for="chassis4">
                                                                                        4
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis5">
                                                                                    <label class="form-check-label" for="chassis5">
                                                                                        5
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis6">
                                                                                    <label class="form-check-label" for="chassis6">
                                                                                        6
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis7">
                                                                                    <label class="form-check-label" for="chassis7">
                                                                                        7
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis8">
                                                                                    <label class="form-check-label" for="chassis8">
                                                                                        8
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis9">
                                                                                    <label class="form-check-label" for="chassis9">
                                                                                        9
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis10">
                                                                                    <label class="form-check-label" for="chassis10">
                                                                                        10
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis11">
                                                                                    <label class="form-check-label" for="chassis11">
                                                                                        11
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis12">
                                                                                    <label class="form-check-label" for="chassis12">
                                                                                        12
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis13">
                                                                                    <label class="form-check-label" for="chassis13">
                                                                                        13
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis14">
                                                                                    <label class="form-check-label" for="chassis14">
                                                                                        14
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis15">
                                                                                    <label class="form-check-label" for="chassis15">
                                                                                        15
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis16">
                                                                                    <label class="form-check-label" for="chassis16">
                                                                                        16
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis17">
                                                                                    <label class="form-check-label" for="chassis17">
                                                                                        17
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis18">
                                                                                    <label class="form-check-label" for="chassis18">
                                                                                        18
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis19">
                                                                                    <label class="form-check-label" for="chassis19">
                                                                                        19
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis20">
                                                                                    <label class="form-check-label" for="chassis20">
                                                                                        20
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis21">
                                                                                    <label class="form-check-label" for="chassis21">
                                                                                        21
                                                                                    </label>
                                                                                </div>
                                                                                <div class="form-check">
                                                                                    <input class="form-check-input" type="checkbox" value="" id="chassis22">
                                                                                    <label class="form-check-label" for="chassis22">
                                                                                        22
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="">
                                                                                <label>Photos Of Chassis/Subframe Damage</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5 mb-5">

                                                                        <div class="col-md-12">
                                                                            <div class="">
                                                                                <label>Paint Condition</label>
                                                                                <div class="form-group text-center cstm-file-upload mt-3">
                                                                                    <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                                </div>
                                                                                <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                            </div>
                                                                        </div>
                                                                        <hr class="mt-5">
                                                                    </div>

                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step8">
                                                            <form action="">
                                                                <h2 class="text-center">Exterior Photos</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">

                                                                    <div class="col-md-12">
                                                                        <div class="">
                                                                            <label>Exterior Images</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5">
                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step9">
                                                            <form action="">
                                                                <h2 class="text-center">Interior Photos</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">

                                                                    <div class="col-md-12">
                                                                        <div class="">
                                                                            <label>Interior Images</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5">
                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step10">
                                                            <form action="">
                                                                <h2 class="text-center">Engine Bay & Undercarriage</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">

                                                                    <div class="col-md-12">
                                                                        <div class="">
                                                                            <label>Engine & Undercarriage Images</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5">
                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step11">
                                                            <form action="">
                                                                <h2 class="text-center">Vehicle Diagnostic Report</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">

                                                                    <div class="col-md-12">
                                                                        <div class="">
                                                                            <label>Vehicle Diagnostic File Upload</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5">
                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="step13">
                                                            <form action="">
                                                                <h2 class="text-center">Vehicle Diagnostic Report</h2>
                                                                <hr class="mt-5 mb-5">
                                                                <div class="all-info-container">

                                                                    <div class="col-md-12">
                                                                        <div class="">
                                                                            <label>Vehicle Diagnostic File Upload</label>
                                                                            <div class="form-group text-center cstm-file-upload mt-3">
                                                                                <input type="file" class="cstm-file-upload" name="images[]" multiple id="step2-upload" />
                                                                            </div>
                                                                            <div class="img-thumbs img-thumbs-hidden" id="step2-img-preview"></div>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5">
                                                                </div>

                                                                <ul class="list-inline pull-right">
                                                                    <li><button type="button" class="default-btn prev-step">Back</button></li>
                                                                    <li><button type="button" class="default-btn next-step">Continue</button></li>
                                                                </ul>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" role="tabpanel" id="End">
                                                          <form action="">
                                                            <!-- <h5 class="text-center">Exterior Photos</h5>
                                                            <hr class="mt-5 mb-5"> -->
                                                            <div class="all-info-container">
                                                                <div class="row">
                                                                    <div class="col-md-12 mt-5">
                                                                        <label for="">Vehicle Summary</label>
                                                                        <div class="vehicle-group">
                                                                            <!-- <span class="input-group-text">With textarea</span> -->
                                                                            <textarea class="form-control" aria-label="With textarea" placeholder="What do you think about the car overall? What are the main issues to worry about? How was the test drive? Recommended questions to ask the seller?"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <hr class="mt-5 mb-5">

                                                                    <div class="col-md-12">
                                                                        <label for="">Terms of Service</label>
                                                                        <div class="terms-group mt-2">
                                                                            <p>All services from Car Arbab are provided on an "as is, with all defects" and "as available" basis without warranties of any kind, either expressed or implied, including without limitation, warranties of title, non-infringement, or implied warranties of merchantability or fitness for a particular purpose. Nothing in these terms or in any description of products or services in the services shall constitute a representation or warranty with respect to such products or services.</p>
                                                                            <p>The inspection of the vehicle described in this report is external and we are unable to accept responsibility for failure to identify defects not present or apparent at the time of the inspection. Odometer readings may have been tampered with, although we report any signs that we notice of this happening during inspection. You acknowledge, by your use of the services, that such use is at your sole risk. In the event of dissatisfaction or a complaint, we reserve the right to re-examine the vehicle prior to any rectifications to the vehicle. You agree that Car Arbab liability is limited to refunding the price you pay for the inspection in the event you are dissatisfied with Car Arbab service, or injuries occur due to an unreported defect in the vehicle. All requests should be sent to hello@Cararbab.com within 7 days notice of receiving the report.</p>
                                                                            <p>in no event shall either Car Arbab or its affiliates or agents be liable for any direct, indirect, punitive, incidental, special or consequential damages arising out of or in any way connected with the use of the services, whether based on contract, tort, strict liability or otherwise, even if advised of the possibility of any such damages.</p>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Signature -->
                                                                    <div class="col-md-12 mt-4">
                                                                        <label for="phone">Signature :</label><br>
                                                                        <div id="signature">
                                                                            <canvas width="300" height="100"></canvas>
                                                                            <div class="controls">
                                                                                <a class="btn-green" href="" id="clearSig">Clear</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <hr class="mt-5">

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
                                                          </form>
                                                        </div>

                                                        <div class="clearfix"></div>

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
    </div>
    <!-- Css Include -->
    <?php include 'include/js.php'; ?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- /Css Include -->
    <script>
        // Here goes your custom javascript

        var color = "#000000";
        var context = $("canvas")[0].getContext("2d");
        var canvas = $("canvas");
        var lastEvent;
        var mouseDown = false;
        var weight = "3";

        // //Bind weight val to selection on click
        var updateWeight = function() {
            return weight;
        };

        //Draw on the canvas on mouse events
        canvas.mousedown(function(e) {
            lastEvent = e;
            mousedown = true;
        }).mousemove(function(e) {
            if (mousedown) {
                context.beginPath();
                context.moveTo(lastEvent.offsetX, lastEvent.offsetY);
                context.lineTo(e.offsetX, e.offsetY);
                context.strokeStyle = color;
                context.lineWidth = updateWeight();
                context.stroke();
                lastEvent = e;
            }
        }).mouseup(function() {
            mousedown = false;
        }).mouseleave(function() {
            canvas.mouseup();
        });

        //Download your drawing
        var downloadImg = function() {
            var img = canvas[0].toDataURL("image/png");
            var $imgLink = $("#download").attr("href", img);
        }

        var clearSig = function() {
            context.clearRect(0, 0, 300, 200);
        }

        // Prevent default behavior of the button click event
        $("#download").click(function(e) {
            e.preventDefault();
            downloadImg();
        });

        $("#clearSig").click(function(e) {
            e.preventDefault();
            clearSig();
        });


        // ----------------------------------------------


        function download(canvas, filename) {
            var lnk = document.createElement('a'),
                e;
            lnk.download = filename;
            lnk.href = canvas.toDataURL("image/png;base64");

            if (document.createEvent) {
                e = document.createEvent("MouseEvents");
                e.initMouseEvent("click", true, true, window,
                    0, 0, 0, 0, 0, false, false, false,
                    false, 0, null);

                lnk.dispatchEvent(e);
            } else if (lnk.fireEvent) {
                lnk.fireEvent("onclick");
            }
        }

        // ------------step-wizard-------------
        $(document).ready(function() {
            $('.nav-tabs > li a[title]').tooltip();

            //Wizard
            $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {

                var target = $(e.target);

                if (target.parent().hasClass('disabled')) {
                    return false;
                }
            });

            $(".next-step").click(function(e) {

                var active = $('.wizard .nav-tabs li.active');
                active.next().removeClass('disabled');
                nextTab(active);

            });
            $(".prev-step").click(function(e) {

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