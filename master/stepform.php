<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Css Meta Url-css Style Include --> 
        <?php include 'include/css.php' ;?>
		<!-- /Css Include -->
        <!-- custom css for progress bar -->
        <style>
            .progress-step-bar {
                display: flex;
                margin: 40px 0;
                user-select: none;
            }
            .progress-step-bar .step {
                text-align: center;
                width: 100%;
                position: relative;
            }
            .progres-step-bar .step p {
                font-weight: 500;
                font-size: 18px;
                color: #000;
                margin-bottom: 8px;
            }
            .progress-step-bar .step .bullet {
                height: 25px;
                width: 25px;
                border: 2px solid #000;
                display: inline-block;
                border-radius: 50%;
                position: relative;
                transition: 0.2s;
                font-weight: 500;
                font-size: 17px;
                line-height: 25px;
            }
            .progress-step-bar .step .bullet.active {
                border-color: var(--primary);
                background: var(--primary);
            }
            .progress-step-bar .step .bullet span {
                position: absolute;
                left: 50%;
                transform: translateX(-50%);
            }
            .progress-step-bar .step .bullet.active span {
                display: none;
            }
            .progress-step-bar .step .bullet:before,
            .progress-step-bar .step .bullet:after {
                position: absolute;
                content: "";
                bottom: 11px;
                right: -51px;
                height: 3px;
                width: 44px;
                background: #262626;
            }
            .progress-step-bar .step .bullet.active:after {
                background: var(--primary);
                transform: scaleX(0);
                transform-origin: left;
                animation: animate 0.3s linear forwards;
            }
            @keyframes animate {
                100% {
                transform: scaleX(1);
                }
            }
            .progress-step-bar .step:last-child .bullet:before,
            .progress-step-bar .step:last-child .bullet:after {
                display: none;
            } 
            .progress-step-bar .step p.active {
                color: var(--primary);
                transition: 0.2s linear;
            }
            .progress-step-bar .step .check {
                position: absolute;
                left: 50%;
                top: 70%;
                font-size: 15px;
                transform: translate(-50%, -50%);
                display: none;
            }
            .progress-step-bar .step .check.active {
                display: block;
                color: #fff;
            }
            @media screen and (max-width: 660px) {
            :root {
                --containerWidth: 400px;
            }
            .progress-step-bar .step p {
                display: none;
            }
            .progress-step-bar .step .bullet::after,
            .progress-step-bar .step .bullet::before {
                display: none;
            }
            .progress-step-bar .step .bullet {
                display: flex;
                align-items: center;
                justify-content: center;
            }
            .progress-step-bar .step .check {
                position: absolute;
                left: 50%;
                top: 50%;
                font-size: 15px;
                transform: translate(-50%, -50%);
                display: none;
            }
            .step {
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
        /* for step form field  */
         .form-outer {
    width: 100%;
    overflow: hidden;
}
 .form-outer form {
    display: flex;
    width: calc(100% * var(--stepNumber));
}
.form-outer form .page {
    width: calc(100% / var(--stepNumber));
    transition: margin-left 0.3s ease-in-out;
}
.form-outer form .page .title {
    text-align: left;
    font-size: 25px;
    font-weight: 500;
}
.form-outer form .page .field {
    width: var(--containerWidth);
    height: 45px;
    margin: 45px 0;
    display: flex;
    position: relative;
}
form .page .field .label {
    position: absolute;
    top: -30px;
    font-weight: 500;
}
/* form .page .field input {
    box-sizing: border-box;
    height: 100%;
    width: 100%;
    border: 1px solid ;
    border-radius: 5px;
    padding-left: 15px;
    margin: 0 1px;
    font-size: 18px;
    transition: border-color 150ms ease;
} */
form .page .field input.invalid-input {
    border-color: var(--errorColor);
}
form .page .field select {
    width: 100%;
    padding-left: 10px;
    font-size: 17px;
    font-weight: 500;
}
form .page .field button {
    width: 100%;
    height: calc(100% + 5px);
    border: none;
    background: var(--secondary);
    margin-top: -20px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: 0.5s ease;
}
form .page .field button:hover {
    background: #000;
}
form .page .btns button {
    margin-top: -20px !important;
}
form .page .btns button.prev {
    margin-right: 3px;
    font-size: 17px;
}
form .page .btns button.next {
    margin-left: 3px;
}

        </style>
        <!-- custom css for progress bar -->

	</head>
	<body>
	<div class="app align-content-stretch d-flex flex-wrap">
		<!-- Sidebar start from here --> <?php include 'include/sidebar.php' ;?>
		<!-- /Sidebar end here -->
		<div class="app-container">
			<!-- Top header section start from here --> <?php include 'include/header.php' ;?>
			<!-- Top header section end from here -->
			<!-- main content start from here -->
			<div class="app-content">
				<div class="content-wrapper">
					<!--::  main container start  -->
					<div class="container">
						<!--:: row for page heading -->
						<div class="row">
							<div class="col-12">
								<div class="page-description d-flex align-items-center">
									<div class="page-description-content flex-grow-1">
										<h1>Add Car</h1>
									</div>
									<!-- <div class="page-description-actions"><a href="add-inspector.php" class="btn btn-dark"><i class="material-icons">add</i>Add inspector </a></div> -->
								</div>
							</div>
						</div>
						<!-- row for page heading end here -->
						<!-- row for main card content start from here -->
						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-header">
										<!-- step form progress bar start from here -->
										<div class="progress-step-bar">
											<div class="step">
												<div class="bullet">
													<span>1</span>
												</div>
												<div class="check fas fa-check"></div>
											</div>
											<div class="step">
												<div class="bullet">
													<span>2</span>
												</div>
												<div class="check fas fa-check"></div>
											</div>
											<div class="step">
												<div class="bullet">
													<span>3</span>
												</div>
												<div class="check fas fa-check"></div>
											</div>
											<div class="step">
												<div class="bullet">
													<span>4</span>
												</div>
												<div class="check fas fa-check"></div>
											</div>
											<div class="step">
												<div class="bullet">
													<span>5</span>
												</div>
												<div class="check fas fa-check"></div>
											</div>
											<div class="step">
												<div class="bullet">
													<span>6</span>
												</div>
												<div class="check fas fa-check"></div>
											</div>
                                            <div class="step">
												<div class="bullet">
													<span>7</span>
												</div>
												<div class="check fas fa-check"></div>
											</div>
                                            <div class="step">
												<div class="bullet">
													<span>8</span>
												</div>
												<div class="check fas fa-check"></div>
											</div>
										</div>
										<!-- progress bar end -->
										<!-- step form field start from here -->
										<div class="form-outer">
											<form action="#">
												<div class="page slide-page">
													<div class="row">
                                                    <div class="col-md-6">
                                                    <div class="field">
														<div class="label"><label for="">Condition</label></div>
                                                        <input type="text" class="form-control" id="">
													</div>
                                                    </div>
													<div class="col-md-6">
                                                    <div class="field">
														<div class="label">Last Name</div>
														<input type="text" required />
													</div>
                                                    </div>
                                                    </div>
													<div class="field">
														<button class="firstNext next">Next</button>
													</div>
												</div>
												<div class="page">
													<div class="title">Contact Info:</div>
													<div class="field">
														<div class="label">Email Address</div>
														<input type="text" required />
													</div>
													<div class="field">
														<div class="label">Phone Number</div>
														<input type="Number" required />
													</div>
													<div class="field btns">
														<button class="prev-1 prev">Previous</button>
														<button class="next-1 next">Next</button>
													</div>
												</div>
												<div class="page">
													<div class="title">Contact Info 2:</div>
													<div class="field">
														<div class="label">Email Address</div>
														<input type="text" required />
													</div>
													<div class="field">
														<div class="label">Phone Number</div>
														<input type="Number" required />
													</div>
													<div class="field btns">
														<button class="prev-2 prev">Previous</button>
														<button class="next-2 next">Next</button>
													</div>
												</div>
												<div class="page">
													<div class="title">Contact Info 3:</div>
													<div class="field">
														<div class="label">Email Address</div>
														<input type="text" required />
													</div>
													<div class="field">
														<div class="label">Phone Number</div>
														<input type="Number" required />
													</div>
													<div class="field btns">
														<button class="prev-3 prev">Previous</button>
														<button class="next-3 next">Next</button>
													</div>
												</div>
												<div class="page">
													<div class="title">Date of Birth:</div>
													<div class="field">
														<div class="label">Date</div>
														<input type="text" required />
													</div>
													<div class="field">
														<div class="label">Gender</div>
														<select required>
															<option>Male</option>
															<option>Female</option>
															<option>Other</option>
														</select>
													</div>
													<div class="field btns">
														<button class="prev-4 prev">Previous</button>
														<button class="next-4 next">Next</button>
													</div>
												</div>
												<div class="page">
													<div class="title">Login Details:</div>
													<div class="field">
														<div class="label">Username</div>
														<input type="text" required />
													</div>
													<div class="field">
														<div class="label">Password</div>
														<input type="password" required />
													</div>
													<div class="field btns">
														<button class="prev-5 prev">Previous</button>
														<button class="submit">Submit</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- row for main card content end  from here -->
					</div>
					<!-- main container end  -->
				</div>
			</div>
			<!-- js file  Include here --> <?php include 'include/js.php' ;?>
			<!-- /js file end here -->
		</div>
		<!-- main content div end here top -->
        <script>
            initMultiStepForm();

function initMultiStepForm() {
    const progressNumber = document.querySelectorAll(".step").length;
    const slidePage = document.querySelector(".slide-page");
    const submitBtn = document.querySelector(".submit");
    const progressText = document.querySelectorAll(".step p");
    const progressCheck = document.querySelectorAll(".step .check");
    const bullet = document.querySelectorAll(".step .bullet");
    const pages = document.querySelectorAll(".page");
    const nextButtons = document.querySelectorAll(".next");
    const prevButtons = document.querySelectorAll(".prev");
    const stepsNumber = pages.length;

    if (progressNumber !== stepsNumber) {
        console.warn(
            "Error, number of steps in progress bar do not match number of pages"
        );
    }

    document.documentElement.style.setProperty("--stepNumber", stepsNumber);

    let current = 1;

    for (let i = 0; i < nextButtons.length; i++) {
        nextButtons[i].addEventListener("click", function (event) {
            event.preventDefault();

            inputsValid = validateInputs(this);
            // inputsValid = true;

            if (inputsValid) {
                slidePage.style.marginLeft = `-${
                    (100 / stepsNumber) * current
                }%`;
                bullet[current - 1].classList.add("active");
                progressCheck[current - 1].classList.add("active");
                progressText[current - 1].classList.add("active");
                current += 1;
            }
        });
    }

    for (let i = 0; i < prevButtons.length; i++) {
        prevButtons[i].addEventListener("click", function (event) {
            event.preventDefault();
            slidePage.style.marginLeft = `-${
                (100 / stepsNumber) * (current - 2)
            }%`;
            bullet[current - 2].classList.remove("active");
            progressCheck[current - 2].classList.remove("active");
            progressText[current - 2].classList.remove("active");
            current -= 1;
        });
    }
    submitBtn.addEventListener("click", function () {
        bullet[current - 1].classList.add("active");
        progressCheck[current - 1].classList.add("active");
        progressText[current - 1].classList.add("active");
        current += 1;
        setTimeout(function () {
            alert("Your Form Successfully Signed up");
            location.reload();
        }, 800);
    });

    function validateInputs(ths) {
        let inputsValid = true;

        const inputs =
            ths.parentElement.parentElement.querySelectorAll("input");
        for (let i = 0; i < inputs.length; i++) {
            const valid = inputs[i].checkValidity();
            if (!valid) {
                inputsValid = false;
                inputs[i].classList.add("invalid-input");
            } else {
                inputs[i].classList.remove("invalid-input");
            }
        }
        return inputsValid;
    }
}

        </script>
</body>
</html>