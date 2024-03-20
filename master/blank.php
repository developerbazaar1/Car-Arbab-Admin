<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Css Meta Url-css Style Include --> 
        <?php include 'include/css.php' ;?>
		<!-- /Css Include -->

		<link type="text/css" href="min/styles.min.css?v=eb13ac83ab22ce2259b32817bfb7637c" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
    <script src="https://cdn.jotfor.ms/s/umd/latest/for-custom-widgets.js"></script>
    <script src="min/scripts.min.js?v=eb13ac83ab22ce2259b32817bfb7637c"></script>
	<link rel="stylesheet" href="https://cdn.jotfor.ms/fonts/?family=Inter" media="all">
	<style>
		@import url("https://fonts.googleapis.com/css?family=Open+Sans");
body {
	margin: 0;
}
* {
	box-sizing: border-box;
}
.notes {
	margin: auto;
	padding: 2rem 1.2rem 0;
	max-width: 35rem;
	font-family: Open Sans, sans serif;
	text-align: center;
}
.container {
	width: 100%;
	padding: 1em;
	display: flex;
	flex-flow: column nowrap;
	justify-content: flex-start;
	align-items: center;
}
.lg-container {
	max-width: 550px;
	position: relative;
	margin: 1rem;
	padding: 0;
}
.lg-image {
	display: block;
	height: 100%;
	width: 100%;
	object-fit: scale-down;
}
.lg-hotspot {
	position: absolute;
	margin: 0;
	padding: 0;
	transform: translate(-50%, -50%);
	z-index: 0;
}
.lg-hotspot:hover .lg-hotspot__button, .lg-hotspot:active .lg-hotspot__button {
	border-color: #ff774c;
}
.lg-hotspot:hover .lg-hotspot__button:after, .lg-hotspot:active .lg-hotspot__button:after {
	background-color: #ff774c;
}
.lg-hotspot--selected {
	z-index: 999;
}
.lg-hotspot--selected .lg-hotspot__label {
	opacity: 1;
}
.lg-hotspot__button {
	height: 48px;
	width: 48px;
	padding: 0px;
	border-radius: 100%;
	border: 1px solid #ff6000;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
	z-index: 999;
	animation: button-pulse 7s ease-in-out infinite;
	cursor: pointer;
}
.lg-hotspot__button:after {
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
	pointer-events: none;
	content: "";
	display: block;
	height: 16.8px;
	width: 16.8px;
	border-radius: 100%;
	border: 3px solid white;
	background-color: #ff6000;
	transition: border-color 1s linear;
}
.lg-hotspot__label {
	position: absolute;
	padding: 0 0 1.1em 0;
	width: 16em;
	max-width: 50vw;
	background-color: white;
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
	font-family: "Open Sans", sans-serif;
	font-size: 14.5px;
	line-height: 1.45em;
	z-index: -1;
	border-radius: 2px;
	user-select: none;
	opacity: 0;
	transition: all 0.1s linear;
}
.lg-hotspot__label h4 {
	margin: 0;
	padding: 0.65em 24px;
	background-color: #555;
	font-size: 1.1em;
	font-weight: normal;
	letter-spacing: 0.02em;
	color: white;
	border-radius: 2px 2px 0 0;
}
.lg-hotspot__label p {
	margin: 0;
	padding: 1.1em 24px 0 24px;
	color: #333;
}
.lg-hotspot--top-left .lg-hotspot__label {
	top: 24px;
	left: 24px;
}
.lg-hotspot--top-right .lg-hotspot__label {
	top: 24px;
	right: 24px;
}
.lg-hotspot--bottom-right .lg-hotspot__label {
	right: 24px;
	bottom: 24px;
}
.lg-hotspot--bottom-left .lg-hotspot__label {
	bottom: 24px;
	left: 24px;
}
@keyframes button-pulse {
	0% {
		transform: scale(1, 1);
		opacity: 1;
	}
	40% {
		transform: scale(1.15, 1.15);
		opacity: 1;
	}
	100% {
		transform: scale(1, 1);
		opacity: 1;
	}
}

	</style>
	</head>
	<body>
		<div class="app align-content-stretch d-flex flex-wrap">
			<!-- Sidebar start from here -->
             <?php include 'include/sidebar.php' ;?>
			<!-- /Sidebar end here -->
			<div class="app-container">
				<!-- Top header section start from here -->
                <?php include 'include/header.php' ;?>
				<!-- Top header section end from here -->
                <!-- main content start from here -->
				<div class="app-content">
					<div class="content-wrapper">
						<div class="container">
							<div class="row">
								<div class="col-12">
									<div class="page-description d-flex align-items-center">
										<div class="page-description-content flex-grow-1">
											<h1>Blank</h1>
										</div>
										<div class="page-description-actions">
											<a href="add-inspector.php" class="btn btn-dark">
												<i class="material-icons">add</i>Add inspector </a>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col">
									<div class="card">
										<div class="card-header">

										<!-- signatutre -->

										<canvas id="signature" width="450" height="150" style="border: 1px solid #ddd;"></canvas>
                                        <br>
                                        <button id="clear-signature">Clear</button>



											<h5 class="card-title">Subheading</h5>

											<div class="notes">New & Improved! If there are multiple images, they work independently. So you can open a label in
  both images below.</div>
  <div class="form-group text-center cstm-file-upload">
              <!-- <img src="../assets/images/cloud-computing.png" alt=""><br> -->
  <input type="file" class="cstm-file-upload" name="images[]" multiple id="upload-img" />
        </div>

<div class="container">
  <div class="lg-container">
    <img class="lg-image"
      src="https://images.empgautos.com/car-skeleton2.png" height="350" width="360" />

    <div style="top: 20%; left: 19.9%;" class="lg-hotspot lg-hotspot--top-left">
      <div class="lg-hotspot__button"></div>
      <div class="lg-hotspot__label">
        <h4>This is the title</h4>
        <p>This is some text that goes in the label. It describes the item. Here is a <a href="/abcretrograde/pens/showcase" target="_blank">link</a> to another page.</p>
           <form>
              <label for="myfile">Select a file:</label>
              <input type="file" id="myfile" name="myfile">
          </form>
      </div>
    </div>

    <div style="top: 25%; left: 88%;" class="lg-hotspot lg-hotspot--top-right">
      <div class="lg-hotspot__button"></div>
      <div class="lg-hotspot__label">
        <h4>Keyboard</h4>
       
		<div class="img-thumbs img-thumbs-hidden" id="img-preview"></div>
      </div>
    </div>

    <div style="top: 15.5%; left: 66%;" class="lg-hotspot lg-hotspot--top-right">
      <div class="lg-hotspot__button"></div>
      <div class="lg-hotspot__label">
        <h4>Envelopes</h4>
        <p>These can hold letters, bills, and junk mail.</p>
      </div>
    </div>

    <div style="top: 62%; left: 15%;" class="lg-hotspot lg-hotspot--bottom-left">
      <div class="lg-hotspot__button"></div>
      <div class="lg-hotspot__label">
        <h4>Coffee</h4>
        <p>Yay coffee!</p>
      </div>
    </div>

    <div style="top: 85%; left: 73%;" class="lg-hotspot lg-hotspot--bottom-right">
      <div class="lg-hotspot__button"></div>
      <div class="lg-hotspot__label">
        <p>This is a label without a title.</p>
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
				<!-- js file  Include here -->
                 <?php include 'include/js.php' ;?>
				<!-- /js file end here -->
				<script>
					const selectHotspot = (e) => {
  const clickedHotspot = e.target.parentElement;
  const container = clickedHotspot.parentElement;
  
  // only include hotspots within same image to allow one open hotspot per image; change "container" to "document" to allow only one open hotspot for entire page:
  const hotspots = container.querySelectorAll(".lg-hotspot"); 
  hotspots.forEach(hotspot => {
    if (hotspot === clickedHotspot) {
      hotspot.classList.toggle("lg-hotspot--selected");
    } else {
      hotspot.classList.remove("lg-hotspot--selected");
    }
  });
}

(() => {
  const buttons = document.querySelectorAll(".lg-hotspot__button");
  buttons.forEach(button => {
    button.addEventListener("click", selectHotspot);
  });
})();

				</script>
				<script>
					jQuery(document).ready(function($){
    
    var canvas = document.getElementById("signature");
    var signaturePad = new SignaturePad(canvas);
    
    $('#clear-signature').on('click', function(){
        signaturePad.clear();
    });
    
});
				</script>
				<script src="//code.jquery.com/jquery-2.2.3.min.js"></script>
				<script src="//cdnjs.cloudflare.com/ajax/libs/signature_pad/1.5.3/signature_pad.min.js"></script>
            </div>
            <!-- main content div end here top -->
			
	</body>
</html>