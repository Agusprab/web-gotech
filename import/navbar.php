

  <section id="Navbar" class="sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light bg-white poppins p-4">
          <div class="container">
            <a href="index.php"><img src="img/Logo.png"  class="img-fluid"></a>
            
<div class="no-gutters rm-mp">
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#searchnav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:none !important;">
        <i class="fas fa-search text-ungu"></i>
              
            </button>
          <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="border:none !important;">
                        <i class="fas fa-bars text-ungu poppins-h3"></i>
            </button>
</div>

            <div class="collapse navbar-collapse " id="searchnav">
              <ul class="navbar-nav ml-auto mt-4 mt-lg-0 mt-md-4 ">
                <li class="nav-link ">
              <form class="form-inline font-12 text-cente d-block d-lg-none">
                <div class="outline-ungu search" >
                  <input class="pl-2 float-left outline-none text-grey1 font-12  poppins" type="search" placeholder=" Search Here" aria-label="Search" > 
                            
                <button class="bg-transparent outline-none float-right mr-2"><a href="" class="nav-link"><i class="fas fa-search text-ungu"></i></a></button>
                </div>
              </form>

                </li>
              </ul>
            </div>


            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto mt-4 mt-lg-0 mt-md-4 ">
                <li class="nav-item mr-2 text-grey1">
                  <a <?php if($page == "home") echo "class='nav-link text-ungu'"; ?> 
                  class="nav-link" href="./">Home</a>
                  <div class="d-none d-lg-block">
                    <div <?php if($page == "home") echo "class='iconbulet text-center position-absolute ml-lg-4'"; ?> style="margin-top: -6px !important;"></div>
                  </div>
                  
                </li>
                <li class="nav-item mr-2">
                  <a <?php if($page == "About") echo "class='nav-link text-ungu'"; ?> class="nav-link" href="About"   >About</a>
                  <div class="d-none d-lg-block">
                    <div <?php if($page == "About") echo "class='iconbulet text-center position-absolute ml-lg-4'"; ?> style="margin-top: -6px !important;"></div>
                  </div>
                  
                </li>
                <li class="nav-item mr-2">
                  <a <?php if($page == "Portofolio") echo "class='nav-link text-ungu'"; ?> class="nav-link" href="Portofolio">Portfolio</a>
                  <div class="d-none d-lg-block">
                    <div <?php if($page == "Portofolio") echo "class='iconbulet text-center position-absolute ml-lg-4'"; ?> style="margin-top: -6px !important;margin-left: 35px !important;"></div>
                  </div>
                  
                </li>
                <li class="nav-item mr-2">
                  <a <?php if($page == "Product") echo "class='nav-link text-ungu'"; ?> class="nav-link" href="Product">Product</a>
                  <div class="d-none d-lg-block">
                    <div <?php if($page == "Product") echo "class='iconbulet text-center position-absolute ml-lg-4'"; ?> style="margin-top: -6px !important;margin-left: 30px !important;"></div>
                  </div>
                  
                </li>
                <li class="nav-item mr-2">
                  <a <?php if($page == "Career") echo "class='nav-link text-ungu'"; ?> class="nav-link" href="Career">Career</a>
                  <div class="d-none d-lg-block">
                    <div <?php if($page == "Career") echo "class='iconbulet text-center position-absolute ml-lg-4'"; ?> style="margin-top: -6px !important;margin-left: 30px !important;"></div>
                  </div>
                  
                </li>
                <li class="nav-item mr-3">
                  <a <?php if($page == "Blog") echo "class='nav-link text-ungu'"; ?> class="nav-link" href="Blog">Blog</a>
                  <div class="d-none d-lg-block">
                    <div <?php if($page == "Blog") echo "class='iconbulet text-center position-absolute ml-lg-4'"; ?> style="margin-top: -6px !important;margin-left: 20px !important;"></div>
                  </div>
                  
                </li>

            <li class="nav-item d-none d-lg-block"> 
                <form class="form-inline my-2 my-lg-0 font-12 navbar-input">
                <div class="outline-ungu searchboxnav"> 
                  <input class="float-left outline-none text-grey1 mr-sm-2 font-14 p-2 poppins" type="search" placeholder=" Search Here" aria-label="Search"> 
                            
                <button class="bg-transparent outline-none float-right"><a href="" class="nav-link"><i class="fas fa-search text-ungu"></i></a></button>
                </div>
              </form>
            </li>

                <li class="nav-item ml-lg-3 "><button class="form-control primary-btn btn text-white my-2 my-sm-0" type="submit">Contact Us</button></li>
              </ul>
              
            
  </div>
</div>
</nav>
    </section>
   