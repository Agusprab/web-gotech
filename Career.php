<?php 
session_start();


	if (isset($_POST["submit"])) {

		 
		$_SESSION["work"] = $_POST["work"];
		header("Location: Details");
	}


	$page = "Career";

	include('import/head.php');
	include('import/navbar.php');
	include('import/titleWeb.php');


	 ?>
<section>
	<div class="text-center">
		<h1 class="poppins-h2 font-weight-normal">Why <b class="weight-600" >GOtech??</b></h1>
		<p class="p-text pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex aspernatur,<br> commodi, beatae impedit, possimus eum esse rem vitae nostrum animi rerum. <br>Magnam provident est rem totam, nesciunt consequuntur. Earum, eveniet!</p>
	</div>
	<div class="row justify-content-center pt-4">
		<div class="col-lg-8 col-11">
			<div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XG1M4iBMqt0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</section>

<section>
	<div class="text-center mt-5 mb-5">
		<h1 class="poppins-h2 font-weight-normal"><b class="weight-600">Life At</b> GOtech</h1>
	</div>
</section>
<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-12">
					<img src="img/cr-1.jpg" class="img-fluid" style="">
				</div>

				<div class="col-lg-6 mt-3 mt-lg-0">
					<div class="row">
						<div class="col-6">
							<img src="img/cr-2.jpg" class="img-fluid" >
							<img src="img/cr-4.jpg" class="mt-3 img-fluid" >
						</div>
						<div class="col-6"><img src="img/cr-3.jpg" class="imgp img-fluid " style=""></div>
					</div>
				</div>
			</div>

			<div class="row mt-3">
				<div class="col-lg-6 ">
					<div class="row">
						<div class="col-6">
							<img src="img/cr-7.jpg" class="img-fluid" >
							<img src="img/cr-8.jpg" class="mt-3 img-fluid" >
						</div>
						<div class="col-6"><img src="img/cr-6.jpg" class="imgp img-fluid " style=""></div>
					</div> 
				</div>

				<div class="col-lg-6 col-12 mt-3 mt-lg-0">
					<img src="img/cr-5.jpg" class="img-fluid" style="height: 89%;width: 100%;">
				</div>

			</div>
		</div>
</section>

<section>
	<div class="container">
		<div class="text-center poppins-h2 font-weight-normal">
			<b class="weight-600">Find your seat</b> at our table
		</div>

		<div class="text-center mt-2">
			<button class="p-2 text-white primary-btn btn "><b class="p-3">All Together</b></button>
			<button class="p-2 outline-ungu btn ml-3 bg-transparent"><b class="p-3 font-weight-normal text-ungu">Designer</b></button>
			<button class="p-2 outline-ungu btn ml-3 bg-transparent"><b class="p-3 font-weight-normal text-ungu">Developer</b></button>
			<button class="p-2 outline-ungu btn ml-3 bg-transparent mt-3 mt-md-0 mt-lg-0"><b class="p-3 font-weight-normal text-ungu ">Know More</b></button>
		</div>
	</div>
</section>

<section>
	<div class="container mt-3">
		<div class="row">
			<div class="col-lg-4 col-12 mb-3">
				<form method="POST" action="">
				<div class="card card-shadow">
					<div class="card-body">
						<input type="hidden" name="work" value="PHP Developer">
						<h1 class="poppins-h3 font-weight-normal">PHP Developer</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</form>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-12 mb-3">
				<div class="card card-shadow">
					<form method="POST" action="">
					<div class="card-body">
						<input type="hidden" name="work" value="Laravel Developer">
						<h1 class="poppins-h3 font-weight-normal">Laravel Developer</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</form>
					</div>
				</div>
			</div>

			<div class="col-lg-4 col-12 mb-3">
				<div class="card card-shadow">
					<form method="POST" action="">
					<div class="card-body">
						<input type="hidden" name="work" value="UI/UX Designer">
						<h1 class="poppins-h3 font-weight-normal">UI/UX Designer</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-12 mb-3">
				<div class="card card-shadow">
					<form method="POST" action="">
						<div class="card-body">
							<input type="hidden" name="work" value="Project Manager">
						<h1 class="poppins-h3 font-weight-normal">Project Manager</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-12 mb-3">
				<div class="card card-shadow">
					<form method="POST" action="">
						<div class="card-body">
							<input type="hidden" name="work" value="HR Manager">
						<h1 class="poppins-h3 font-weight-normal">HR Manager</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-12 mb-3">
				<div class="card card-shadow">
					<form method="POST" action="">
						<div class="card-body">
							<input type="hidden" name="work" value="UX Designer">
						<h1 class="poppins-h3 font-weight-normal">UX Designer</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</div>
					</form>
				</div>
			</div>

			<div class="col-lg-4 col-12 mb-3">
				<div class="card card-shadow">
					<form method="POST" action="">
						<div class="card-body">
							<input type="hidden" name="work" value="QA Officer">
						<h1 class="poppins-h3 font-weight-normal">QA Officer</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-12 mb-3">
				<div class="card card-shadow">
				<form> method="POST" action=""
						<div class="card-body">
							<input type="hidden" name="work" value="JavaScript Developer">
						<h1 class="poppins-h3 font-weight-normal">JavaScript Developer</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</div>
				</form>
				</div>
			</div>
			<div class="col-lg-4 col-12 mb-3">
				<div class="card card-shadow">
					<form method="POST" action="">
						<div class="card-body">
							<input type="hidden" name="work" value="UI Designer">
						<h1 class="poppins-h3 font-weight-normal">UI Designer</h1>
						<p class="short-desc pt-2">London, United Kingdom</p>
						<p class="p-text pt-4">Lorem ipsum dolor, sit amet consectetur sadipisicing elit. Et voluptatibus velit unde pariatur ut! Voluptate ab nostrum</p>
						<p class="text-grey2"><i class="far fa-clock text-green"></i>&nbsp;11 hours ago</p>
						<button class="btnhvr btn text-ungu p-2 bg-transparent" name="submit" type="submit"><b class="p-3 font-weight-normal ">View Details</b></button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>



 <?php 
 include('import/reportform.php');
 include('import/footer.php');
  ?>