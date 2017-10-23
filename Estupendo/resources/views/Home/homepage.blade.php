@extends('main')
@section('content')
<div class="main_container">
     <section class="bannerSection">
          <div class="bannerForm">
             <p class="smTxt">Seeking for this luxurious accomodation?</p>
             <p class="lgTxt">Check availability now.</p>
             <div class="dateRow">
                <form>
                   <div class="rowleft">
                         <p>Check In Date</p>
                         <div class="form-group datetimepicker">
                            <input type='text' class="form-control dateicon" id='datetimepicker1' placeholder="12 Sep" readonly/> 
                         </div>
                   </div>
                   <div class="rowright">
                         <p>Check Out Date</p>
                         <div class="form-group datetimepicker">
                            <input type='text' class="form-control dateicon" id='datetimepicker2' placeholder="13 Sep" readonly /> 
                         </div>
                   </div>
                   <input type="submit" value="Check availability" class="checkBtn">
                </form>
             </div>
           </div>
          <div class="banner-sec">
             <ul class="banner-slider">
                <li>
                    <div class="cler">
                        <div class="bannerImg" style="background:url(images/banner.jpg)"></div>
                        <div class="banner-caption">
                            <h2>Come as you are.<br>we will take care of the rest.</h2>
                            <a href="javascript:void(0);" class="readmoreBtn bt_cm">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cler">
                        <div class="bannerImg" style="background:url(images/banner.jpg)"></div>
                        <div class="banner-caption">
                            <h2>Come as you are.<br>we will take care of the rest.</h2>
                            <a href="#" class="readmoreBtn bt_cm">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cler">
                        <div class="bannerImg" style="background:url(images/banner.jpg)"></div>
                        <div class="banner-caption">
                            <h2>Come as you are.<br>we will take care of the rest.</h2>
                            <a href="#" class="readmoreBtn bt_cm">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="cler">
                        <div class="bannerImg" style="background:url(images/banner.jpg)"></div>
                        <div class="banner-caption">
                            <h2>Come as you are.<br>we will take care of the rest.</h2>
                            <a href="#" class="readmoreBtn bt_cm">Read More <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </li>
             </ul>
         </div>
     </section>
     <section class="aboutSection">
        <div class="container">
           <div class="aboutLeft">
              <h1>About us</h1>
              <p class="itxt">There are many variations of passages of Lorem Ipsum available</p>
              <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.<br>
or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.<br><br>

It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                <a href="javascript:void(0);" class="readmoreBtn bt_cm"><span><img src="images/arrowLg.png" alt="arrow"></span> Read more</a>
           </div>
           <div class="aboutRight">
              <img src="images/aboutImg.jpg" class="img-responsive" alt="About Image">
           </div>
        </div>
     </section>
     <section class="sliderSection"> 
        <div id="wrapperSlider">
            <div id="carouselSlider">
                <a href="javascript:void(0);"><img src="images/sliderImg1.jpg" alt="Slider Image1"></a>
                <a href="javascript:void(0);"><img src="images/sliderImg2.jpg" alt="Slider Image2"></a>
                <a href="javascript:void(0);"><img src="images/sliderImg3.jpg" alt="Slider Image3"></a>
                <a href="javascript:void(0);"><img src="images/sliderImg1.jpg" alt="Slider Image4"></a>
                <a href="javascript:void(0);"><img src="images/sliderImg2.jpg" alt="Slider Image5"></a>
                <a href="javascript:void(0);"><img src="images/sliderImg3.jpg" alt="Slider Image6"></a>
            </div>
            <a href="javascript:void(0);" id="prevSlider"><img src="images/prevIcon.png" alt="Previous"></a>
            <a href="javascript:void(0);" id="nextSlider"><img src="images/nextIcon.png" alt="Next"></a>
        </div>
     </section>
     <section class="welcomeSection">
        <div class="container">
           <div class="welcontainer">
               <div class="welcomeLeft">
                  <h2>Welcome to the Estupendo</h2>
                  <p>Seeking a summer retreat where you will spend The holiday of your life? Look no further. We offer the finest selection of Ibiza properties. Here you find only ultra luxury villas with to-die-for design and the most spectacular scenery of the island. Only prime location. Whether it’s the desire for privacy, peace, family time or a party time, our villas will exceed all your expectations. Each property combines 5 stars hotel style and private-home perfection, all in one.</p>
               </div>
               <div class="welcomeRight">
                   <ul class="list-inline welcomeList">
                        <li>All our holidays are FULLY BONDED - your money is 100% safe</li>
                        <li>No built in extras - our prices are transparent so that you only pay for what you use</li>
                        <li>Nothing is too much trouble - if it's not mentioned please ask - we happy to take care of all your worries</li>
                        <li>Flexible arrival days can often be arranged to suit you and to correspond with the flights</li>
                        <li>Our properties are managed by in-house team and checked regularly to ensure the highest standards</li>
                        <li>A manager is on call and 24 hours during your stay</li>
                   </ul>
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