<?php 
session_start();

	$page = "Career";

$a = $_SESSION["work"];
	include('import/head.php');
	include('import/navbar.php');
	
 ?>

<section>
	<div class="container">
	<h1 class="poppins-h3 font-weight-normal">Position</h1>
 	<h1 class="poppins-h4 font-weight-normal text-green mt-4"><?=$a; ?></h1>
 	<h1 class="poppins-h5 mt-4 font-weight-normal">Job Description & Responsibilitys:</h1>
	</div>
</section>


 	<section>
 		<div class="container mt-4">
 			<div class="row">
 				<div class="col-lg-9 col-12">
					<p class="p-text mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat, nulla eget ullamcorper congue, dui dolor viverra tellus, at scelerisque dui justo a massa. Phasellus facilisis consectetur justo, non luctus turpis fermentum a. Vivamus interdum eleifend pellentesque. Proin arcu libero, porta et ullamcorper vitae, congue quis lorem. Integer nec ornare risus, vitae aliquam est. Morbi vitae egestas lorem, vel tempor enim. Curabitur lobortis enim sed nibh euismod tempus. Fusce tincidunt velit purus, quis accumsan lectus ullamcorper vitae. Phasellus non ipsum in velit egestas volutpat cursus nec leo. Proin sed convallis enim. Curabitur dictum est nec metus congue, id posuere orci efficitur.</p>	
					<p class="p-text mt-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras placerat, nulla eget ullamcorper congue, dui dolor viverra tellus, at scelerisque dui justo a massa. Phasellus facilisis consectetur justo, non luctus turpis fermentum a. Vivamus interdum eleifend pellentesque. Proin arcu libero, porta et ullamcorper vitae, congue quis lorem. Integer nec ornare risus, vitae aliquam est. Morbi vitae egestas lorem, vel tempor enim. Curabitur lobortis enim sed nibh euismod tempus.</p>		
	 			</div>
 				

			<div class="col-lg-3 col-12">
			<div class="card card-shadow p-1" style="">
				<div class="card-body">
					<h5 class="poppins-h4 card-title text-green">Share The Job</h5>
					<p class="card-text ">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
						<div class="d-flex flex-row bd-highlight mb-3">
				                <div class="p-1 rounded-circle mr-2 ">
				                	<div class="icon text-center"><i class="fab text-black2 fa-facebook-f"></i></div>
				                </div>
				                <div class="p-1 rounded-circle mr-2">
				                	<div class="icon text-center"><i class="fab text-black2 fa-skype "></i></div>
				                </div>
				                <div class="p-1 rounded-circle mr-2">
				                	<div class="icon text-center"><i class="fab text-black2 fa-linkedin-in"></i></div>
				                </div>
				                <div class="p-1 rounded-circle">
				                	<div class="icon text-center"><i class="fab text-black2 fa-instagram"></i></div>
				                </div>
			              </div>
					<div><button type="button"  data-toggle="modal" data-target=".bd-example-modal-lg" class="btn primary-btn text-white font-12 pl-3 pr-3"><b>Apply Now</b></button></div>
					</div>
					</div>			 
				 </div>
			 </div>

<div>
	<h1 class="poppins-h3 weight-600 mt-5 ">Requirement</h1>
	<h1 class="poppins-h5 mt-4 font-weight-normal">Educational Requirements:</h1>
	<p class="p-text mt-3">Bachelor in Criminology/ International Relation/Development Stuidies/Peace and Conflict Studies/Security <br>Management of any other relevant discipline from any recognised University with minimun second class in all <br>exams/CGPA 2.5 and above or equivalent.</p>
</div>

<div>
	<h1 class="poppins-h5 mt-4 font-weight-normal">Experience Requirement:</h1>
	<p class="p-text mt-3">Minimum 3 years' experience in Security Management</p>
	<h1 class="poppins-h5 mt-4 font-weight-normal">Additional Requirements:</h1>
	<p class="p-text mt-3">Applicants having professional degree in Security Management, Risk management, Research <br>Methodology & Data Analysis will be given preference. </p>		
</div>

<div>
	<h1 class="poppins-h3 weight-600 mt-5 pt-3">Salary & Benefits</h1>
	<h1 class="poppins-h5 mt-4 font-weight-normal">Salary:</h1>
	<p class="p-text mt-3">Negotiable</p>

	<h1 class="poppins-h5 mt-4 font-weight-normal pt-3">Other Benefits:</h1>
	<p class="p-text mt-3">Festival Bonus. Contributory Compulsory Provident Fund, Gratuity, Performance Bonus. Health & Life.</p>

	<h1 class="poppins-h5 mt-4 font-weight-normal pt-3">Job Location:</h1>
	<p class="p-text mt-3">London, United Kingdom</p>

	<h1 class="poppins-h5 mt-4 font-weight-normal pt-3">Last Apply Date:</h1>
	<p class="p-text mt-3">21/Jan/2020</p>
</div>





 		</div>
 	</section>





<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
  <div class="modal-dialog modal-lg">
    <div class="modal-content" style="border: none !important;">
      

      <section class="poppins" style="border: none !important;">
   <div class="modal-header" style="border: none !important; border-bottom:none !important;">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

    
    <div class="row justify-content-center form-p" >
      <div class="col-lg-12">
          <div class="card p-5 card-shadow">
      <form>
  <div class="form-row jus">
    <div class="form-group col-md-5 mr-lg-5">
      <label for="inputEmail4">First Name</label>
      <input type="email" class="form-control text-grey1" id="inputEmail4" placeholder="Robert Lee">
    </div>
    <div class="form-group col-md-5">
      <label for="inputPassword4">Lastname</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="kevin.jones@mail.com">
    </div>
  </div>
  <div class="form-group mt-4">
    <label for="exampleFormControlInput1">Your Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="kevin.jones@mail.com">
  </div>

<div class="form-group mt-4">
    <label for="exampleFormControlInput1">Your Portofolio Website Link</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Example@yahoo.com">
  </div>

<div class="form-group mt-4">
    <label for="exampleFormControlInput1">GitHub/Stackoverflow link</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Example@com">
  </div>


<div class="form-group mt-4">
    <label for="exampleFormControlTextarea1">Write Something About You</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Lorem Ipsum is simply dummy text of the printing and........"></textarea>
  </div>
  <button class="p-2 text-white primary-btn btn mt-3"><b class="p-3">Submit</b></button>
</form>      
    </div>

      </div>
    </div>

  </div>
</section>
    </div>
  </div>
</div>
  <?php 
 include('import/reportform.php');
 include('import/footer.php');
  ?>