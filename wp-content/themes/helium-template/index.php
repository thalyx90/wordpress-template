<?php get_header(); ?>
    <!-- light slider -->
    <div id="light-slider" class="carousel slide">
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/slider/bg-1.jpg" alt="">
              <div class="carousel-caption">
                <h3 class="slide-title animated fadeInDown"><span class="text-primary">Helium </span> - Bootstrap 4 UI Kit</h3>
                <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                <a href="#" class="btn btn-lg btn-default-filled animated fadeInUp">Get Started</a>
                <a href="#" class="btn btn-lg btn-common animated fadeInUp">Learn More</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/slider/bg-2.jpg" alt="">
              <div class="carousel-caption">
                <h3 class="slide-title animated fadeInDown"><span class="text-primary">Cutting-edge</span> Features</h3>
                <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                <a href="#" class="btn btn-lg btn-default-filled animated fadeInUp">Download Now</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/slider/bg-3.jpg" alt="">
              <div class="carousel-caption">
                <h3 class="slide-title animated fadeInDown"><span class="text-primary">100+ </span> UI Blocks & Components</h3>
                <h5 class="slide-text animated fadeIn">Lorem ipsum dolor sit amet, consectetuer adipiscing elit<br> Curabitur ultricies nisi Nam eget dui. Etiam rhoncus</h5>
                <a href="#" class="btn btn-lg btn-default-filled animated fadeInUp">Get Started</a>
                <a href="#" class="btn btn-lg btn-common animated fadeInUp">Download</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>

    <!-- Features -->
    <div class="container features">
      
      <div class="page-header-title">
        <h2 class="heading-title text-center">Features</h2>
      </div>

      <div class="features-wrap">
        <div class="row">
          <!-- Start featured -->
          <div class="col-md-4 col-sm-6">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="fa fa-cubes"></i>
              </div>
              <div class="featured-content">
                <h4>100+ Components</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->

          <!-- Start featured -->
          <div class="col-md-4 col-sm-6">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="fa fa-diamond"></i>
              </div>
              <div class="featured-content">
                <h4>Clean Design</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->

          <!-- Start featured -->
          <div class="col-md-4 col-sm-6">
            <div class="featured-box">
              <div class="featured-icon">
                <i class="fa fa-cogs"></i>
              </div>
              <div class="featured-content">
                <h4>Easy to Customize</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua.</p>
              </div>
            </div>
          </div>
          <!-- End featured -->
        </div>
      </div>

    </div>

    <!-- Team -->
    <div class="container team">
      <div class="page-header-title">
        <h2 class="heading-title text-center">Team Members</h2>
      </div>
      <div class="team-members mtb-50">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <!-- Team Item Starts -->
            <div class="team-item">
              <figure class="team-profile">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/team/team-01.jpg" alt="">
                <figcaption class="our-team">
                  <div class="details">
                    <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <hr class="small-divider border-white">
                    <div class="social">
                      <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                      <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                      <a class="google-plus" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
                </figcaption>
              </figure>
              <div class="info">
                <h2>
                  Sara smith
                </h2>
                <p>
                  Founder And ceo
                </p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
          <div class="col-sm-6 col-md-3">
            <!-- Team Item Starts -->
            <div class="team-item">
              <figure class="team-profile">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/team/team-02.jpg" alt="">
                <figcaption class="our-team">
                  <div class="details">
                    <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <hr class="small-divider border-white">
                    <div class="social">
                      <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                      <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                      <a class="google-plus" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
                </figcaption>
              </figure>
              <div class="info">
                <h2>
                  Sommer Christian
                </h2>
                <p>
                  creative studio head
                </p>
              </div>
            </div>
            <!-- Team Item Starts -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Team Item Starts -->
            <div class="team-item">
              <figure class="team-profile">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/team/team-03.jpg" alt="">
                <figcaption class="our-team">
                  <div class="details">
                    <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <hr class="small-divider border-white">
                    <div class="social">
                      <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                      <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                      <a class="google-plus" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
                </figcaption>
              </figure>
              <div class="info">
                <h2>
                  Jane lupkin
                </h2>
                <p>
                  magento developer
                </p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>

          <div class="col-sm-6 col-md-3">
            <!-- Team Item Starts -->
            <div class="team-item">
              <figure class="team-profile">
                <img src="<?php echo get_bloginfo( 'template_directory' );?>/img/team/team-04.jpg" alt="">
                <figcaption class="our-team">
                  <div class="details">
                    <p class="content-white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    <hr class="small-divider border-white">
                    <div class="social">
                      <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                      <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                      <a class="google-plus" href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                  </div>
                </figcaption>
              </figure>
              <div class="info">
                <h2>
                  Jane lupkin
                </h2>
                <p>
                  magento developer
                </p>
              </div>
            </div>
            <!-- Team Item Ends -->
          </div>
        </div>
      </div> 
    </div>
 <?php get_footer(); ?>