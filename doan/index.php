<?php session_start();
	require_once("inculdes/connection.php");
	include("inculdes/header.php");
?>

		
		<div class="hero-wrap js-fullheight" style="background-image: url('https://scontent.fdad2-1.fna.fbcdn.net/v/t1.0-9/83990000_633790650522394_1509960963397255168_n.jpg?_nc_cat=110&ccb=2&_nc_sid=19026a&_nc_ohc=sAYdAw74rw4AX_A19LZ&_nc_oc=AQlDxu34-U3BipJOGtBCTT0QoRAmihu-OjCFA-82rTnT_hg2Bg7PX-JglPSO20BfZYQ&_nc_ht=scontent.fdad2-1.fna&oh=888e269c7092c851ae5265538c683c44&oe=5FF69F74');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
        	<h3 class="v">Le Stylist</h3>
        	<h3 class="vr">Since - 2020</h3>
          <div class="col-md-11 ftco-animate text-center">
            <h1>Le Stylist</h1>
            <h2><span>Cập nhật các bộ áo mới của các câu lạc bộ</span></h2>
          </div>
          <div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
						</a>
					</div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
    <section class="ftco-section ftco-product">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Trending</h1>
            <h2 class="mb-4">Trending</h2>
          </div>
        </div>
    		<div class="row">
    			<div class="col-md-12">
    				<div class="row">
    					<!--------PHP------->
    					<?php 
    							$sql 	= "select * from sanpham order by maSanPham desc limit 10 ";
    							$query  = mysqli_query($con, $sql);
    							?>
    					<?php 
    					while($data = mysqli_fetch_array($query)) {	?>
    						<?php
		    					echo '<div class="item">
    						<div class="product">
		    
    					<div class="text pt-3 px-3">
		    						<a href="#" class="img-prod"><img class="img-fluid"  src="images/'.$data["hinh"].'" alt="Colorlib Template" width="250" height="150">
		    						<span class="status">30%</span>
		    					</a>
		    						<h3><a href="#">'.$data["tenSanPham"].'</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							<p class="price"><span class="mr-2 price-dc">'.$data["gia"].'</span><span class="price-sale">'.$data["giamGia"].'</span></p>
			    						</div>
			    						<div class="rating">
			    							<p class="text-right">
			    								<span class="ion-ios-star-outline"></span>
			    								<span class="ion-ios-star-outline"></span>
			    								<span class="ion-ios-star-outline"></span>
			    								<span class="ion-ios-star-outline"></span>
			    								<span class="ion-ios-star-outline"></span>
			    							</p>
			    						</div>
			    						
		    						</div>
		    						<a style="color:black;font-weight:bold;" href="detail_product.php?page=detail_pro&id='.$data["maSanPham"].'">Chi tiết</a>
		    						
		    				
	    				</div>
	    				<!-----------end product---->
	    			</div>
	    				<!----------->
    				
    			</div>' ?><?php } ?>
    		</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Products</h1>
            <h2 class="mb-4">Our Products</h2>
          </div>
        </div>    		
    	</div>
    	<div class="container">

    		<div class="row">
    			
    			<div class="col-md-12">
    				<div class="row">
    					<!--------PHP------->
    					<?php 
    							$sql 	= "select * from sanpham order by maSanPham asc limit 10 ";
    							$query  = mysqli_query($con, $sql);
    							?>
    					<?php 
    					while($data = mysqli_fetch_array($query)) {	?>
    						<?php
		    					echo '<div class="item">
    						<div class="product">
		    
    					<div class="text pt-3 px-3">
		    						<a href="#" class="img-prod"><img class="img-fluid"  src="images/'.$data["hinh"].'" alt="Colorlib Template" width="250" height="150">
		    						<span class="status">30%</span>
		    					</a>
		    						<h3><a href="#">'.$data["tenSanPham"].'</a></h3>
		    						<div class="d-flex">
		    							<div class="pricing">
			    							<p class="price"><span class="mr-2 price-dc">'.$data["gia"].'</span><span class="price-sale">'.$data["giamGia"].'</span></p>
			    						</div>
			    						<div class="rating">
			    							<p class="text-right">
			    								<span class="ion-ios-star-outline"></span>
			    								<span class="ion-ios-star-outline"></span>
			    								<span class="ion-ios-star-outline"></span>
			    								<span class="ion-ios-star-outline"></span>
			    								<span class="ion-ios-star-outline"></span>
			    							</p>
			    						</div>
		    						</div>
		    						<a style="color:black;font-weight:bold;" href="detail_product.php?page=detail_pro&id='.$data["maSanPham"].'">Chi tiết</a>
		    				
	    				</div>
	    				<!-----------end product---->
	    			</div>
	    				<!----------->
    				
    			</div>' ?><?php } ?>
    		</div>
    		</div>
    	</div>
    	</div>
    </section>

    <section class="ftco-section ftco-section-more img" style="background-image: url(images/bg_5.jpg);">
    	<div class="container" style="height:200px ">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section ftco-animate">
          	<img src="https://i.imgur.com/0jaMYsw.jpg" width="100%" style="margin-top: -100px">
          	<h2>Summer Sale</h2>

          </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
				<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
          	<h1 class="big">Testimony</h1>
          </div>
        </div>    		
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Customer</span>
		                  </div>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>


  

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_4.jpg);">
    	<div class="container">
    		<div class="row justify-content-center py-5">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="10000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Branches</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="1000">0</strong>
		                <span>Partner</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Awards</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light ftco-services">
    	<div class="container">
    		<div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Services</h1>
            <h2>We want you to express yourself</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-002-recommended"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Refund Policy</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-001-box"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Premium Packaging</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
            		<span class="flaticon-003-medal"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Superior Quality</h3>
                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
              </div>
            </div>      
          </div>
        </div>
    	</div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
            	<h1 class="big">Subscribe</h1>
              <h2>Subcribe to our Newsletter</h2>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
<?php
	include("inculdes/footer.php");
?>
    