<section class="poppins" style="background-image: url('img/bg.png'); width: 100%; height: 180px !important;background-position: center;background-size: cover;">
	<div class="text-center mt-5">
		<?php if ($page == "About"):?>
		<h1 class="poppins-h2 font-weight-normal"><b class="weight-600">About</b> Us</h1>
		<h1 class="poppins-h5 mt-4 mb-5 font-weight-normal">Home / <?=$page;  ?></h1>
		<?php endif ?>
		
		<?php if ($page == "Product"):?>
		<h1 class="poppins-h2 font-weight-normal">All <b class="weight-600">Product</b></h1>
		<h1 class="poppins-h5 mt-4 mb-5 font-weight-normal">Home / <?=$page;  ?></h1>
		<?php endif ?>

		<?php if ($page == "Portofolio"):?>
		<h1 class="poppins-h2 font-weight-normal">Our <b class="weight-600">Portofolio</b></h1>
		<h1 class="poppins-h5 mt-4 mb-5 font-weight-normal">Home / <?=$page;  ?></h1>
		<?php endif ?>

		<?php if ($page == "Blog"):?>
		<h1 class="poppins-h2 font-weight-normal"><b class="weight-600">Blog</b></h1>
		<h1 class="poppins-h5 mt-4 mb-5 font-weight-normal">Home / <?=$page;  ?></h1>
		<?php endif ?>

		<?php if ($page == "Career"):?>
		<h1 class="poppins-h2 font-weight-normal"><b class="weight-600">Career</b></h1>
		<h1 class="poppins-h5 mt-4 mb-5 font-weight-normal">Home / <?=$page;  ?></h1>
		<?php endif ?>

	</div>
</section>