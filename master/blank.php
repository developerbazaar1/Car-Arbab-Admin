<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Css Meta Url-css Style Include --> 
        <?php include 'include/css.php' ;?>
		<!-- /Css Include -->
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
											<h5 class="card-title">Subheading</h5>
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
            </div>
            <!-- main content div end here top -->
			
	</body>
</html>