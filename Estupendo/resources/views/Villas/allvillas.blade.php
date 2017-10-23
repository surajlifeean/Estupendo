@extends('main')

@section("content")

<div class="main_container">
     <section class="villadateSection">
         <div class="container">
          	 <div class="dateForm">
                 <form>
                       <div class="rowdate">
                             <div class="form-group datetimepicker">
                                <input type='text' class="form-control dateicon" id='datetimepicker3' placeholder="12 Sep" readonly/> 
                                <label>Check In Date</label>
                             </div>
                       </div>
                       <div class="rowdate">
                             <div class="form-group datetimepicker">
                                <input type='text' class="form-control dateicon" id='datetimepicker4' placeholder="15 Sep" readonly /> 
                                <label>Check Out Date</label>
                             </div>
                       </div>
                       <div class="rowdate">
                           <input type="submit" value="Find Villa" class="checkBtn">
                       </div>
                 </form>
           </div>
         </div>
     </section>
     <section class="villaGallerySection">
          <div class="container">
        	  <div class="galleryContainer">
             <div class="villaThumb wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="200ms">
                <img class="img-responsive" src="images/villaImg1.jpg" alt="Villa Image" >
                <div class="card-body">
                    <div class="cardLeft">
                        <img src="images/villaLogo.jpg" alt="Villa Logo">
                        <h3><a href="villa_details.html">Villa Name One</a></h3>
                        <p>located in the countryside with views to the sea and amazing sunset</p>
                    </div>
                    <div class="cardRight">
                        <ul class="list-inline">
                           <li><img src="images/userIcon.png" alt="User Icon"> 10 People</li>
                           <li><img src="images/bedIcon.png" alt="Bed Icon"> 6 Bedrooms</li>
                        </ul>
                    </div>
                </div>
            </div>
            
             <div class="villaThumb wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="200ms">
                <img class="img-responsive" src="images/villaImg2.jpg" alt="Villa Image" >
                <div class="card-body">
                    <div class="cardLeft">
                        <img src="images/villaLogo.jpg" alt="Villa Logo">
                        <h3><a href="villa_details.html">Villa Name One</a></h3>
                        <p>located in the countryside with views to the sea and amazing sunset</p>
                    </div>
                    <div class="cardRight">
                        <ul class="list-inline">
                           <li><img src="images/userIcon.png" alt="User Icon"> 10 People</li>
                           <li><img src="images/bedIcon.png" alt="Bed Icon"> 6 Bedrooms</li>
                        </ul>
                    </div>
                </div>
            </div>
            
             <div class="villaThumb wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="200ms">
                <img class="img-responsive" src="images/villaImg3.jpg" alt="Villa Image" >
                <div class="card-body">
                    <div class="cardLeft">
                        <img src="images/villaLogo.jpg" alt="Villa Logo">
                        <h3><a href="villa_details.html">Villa Name One</a></h3>
                        <p>located in the countryside with views to the sea and amazing sunset</p>
                    </div>
                    <div class="cardRight">
                        <ul class="list-inline">
                           <li><img src="images/userIcon.png" alt="User Icon"> 10 People</li>
                           <li><img src="images/bedIcon.png" alt="Bed Icon"> 6 Bedrooms</li>
                        </ul>
                    </div>
                </div>
            </div>
            
             <div class="villaThumb wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="200ms">
                <img class="img-responsive" src="images/villaImg4.jpg" alt="Villa Image" >
                <div class="card-body">
                    <div class="cardLeft">
                        <img src="images/villaLogo.jpg" alt="Villa Logo">
                        <h3><a href="villa_details.html">Villa Name One</a></h3>
                        <p>located in the countryside with views to the sea and amazing sunset</p>
                    </div>
                    <div class="cardRight">
                        <ul class="list-inline">
                           <li><img src="images/userIcon.png" alt="User Icon"> 10 People</li>
                           <li><img src="images/bedIcon.png" alt="Bed Icon"> 6 Bedrooms</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          </div>
     </section>
</div>   
@endsection

@section('scripts')
  
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/moment-with-locales.min.js"></script>
<script src="js/bootstrap-datetimepicker.min.js"></script>  
<script src="js/jquery.bxslider.min.js"></script>
<script src="js/jquery.carouFredSel-5.6.1.js"></script>
<script src="js/custom.js"></script>

<script type="text/javascript">
$(function() {
  $('#carouselSlider').carouFredSel({
    width: '100%',
    items: 3,
    scroll: {
      items: 1,
      duration: 1000,
      pauseDuration: 3000
    },
    prev: '#prevSlider',
    next: '#nextSlider'
  });
});
</script>
@endsection