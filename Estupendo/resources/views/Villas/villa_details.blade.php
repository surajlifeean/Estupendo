@extends("main")

@section("content")

<div class="main_container">
     <section class="villabannerSection">
          <div class="banner-sec villaBanner">
             <ul class="villa-slider">
                <li>
                    <div class="cler">
                        <div class="bannerImg" style="background:url(images/villadetailsImg.jpg)"></div>
                    </div>
                </li>
                <li>
                    <div class="cler">
                        <div class="bannerImg" style="background:url(images/villadetailsImg.jpg)"></div>
                    </div>
                </li>
                <li>
                    <div class="cler">
                        <div class="bannerImg" style="background:url(images/villadetailsImg.jpg)"></div>
                    </div>
                </li>
                <li>
                    <div class="cler">
                        <div class="bannerImg" style="background:url(images/villadetailsImg.jpg)"></div>
                    </div>
                </li>
             </ul>
         </div>
     </section>
     <section class="villaDetailSection">
        <div class="container">
           <div class="villaDetailContainer">
               <div class="aboutLeft">
                  <h1>Villa Name One</h1>
                  <p class="itxt">located in the countryside with views to the sea and amazing sunset</p>
                  <ul class="list-inline detailList">
                     <li><img src="images/userIcon.png" alt="User Icon"> 10 People</li>
                     <li><img src="images/bedIcon.png" alt="Bed Icon"> 6 Bedrooms</li>
                  </ul>
                  <ul class="list-inline featuresList">
                     <li><img src="images/featureIcon1.png" alt="Feature Icon1"><br>Sea View</li>
                     <li><img src="images/featureIcon2.png" alt="Feature Icon2"><br>jaccuzi</li>
                     <li><img src="images/featureIcon3.png" alt="Feature Icon3"><br>Gym</li>
                     <li><img src="images/featureIcon4.png" alt="Feature Icon4"><br>Tennis Court</li>
                     <li><img src="images/featureIcon5.png" alt="Feature Icon5"><br>cinema</li>
                     <li><img src="images/featureIcon6.png" alt="Feature Icon6"><br>Outdoor bar</li>
                     <li><img src="images/featureIcon7.png" alt="Feature Icon7"><br>For events</li>
                     <li><img src="images/featureIcon8.png" alt="Feature Icon8"><br>volley</li>
                     <li><img src="images/featureIcon9.png" alt="Feature Icon9"><br>Heated pool</li>
                     <li><img src="images/featureIcon10.png" alt="Feature Icon10"><br>bikes</li>
                     <li><img src="images/featureIcon11.png" alt="Feature Icon11"><br>petanque</li>
                     <li><img src="images/featureIcon12.png" alt="Feature Icon12"><br>Child Friendly</li>
                     <li><img src="images/featureIcon13.png" alt="Feature Icon13"><br>Pet friendly</li>
                  </ul>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam non tortor orci. Ut in interdum metus. Mauris purus arcu, fringilla vel ex ac, egestas porttitor arcu. Aenean tortor tellus, malesuada sit amet nibh vitae, vestibulum pellentesque dui. Fusce id ligula in augue egestas eleifend vitae at dolor. Cras metus lectus, fermentum eu maximus vel, commodo id nibh. Ut sit amet velit id diam maximus egestas. <br><br>

Sed vitae massa erat. Nam in nisl at odio sollicitudin convallis nec ac ex. Duis fringilla velit sed orci blandit finibus. Vestibulum posuere vulputate nisl vitae porttitor. Pellentesque eget nunc eget nisi commodo auctor non non arcu. Vestibulum dictum suscipit ligula, eget tincidunt odio tincidunt ac. Nunc in euismod tellus.<br><br>

Mauris efficitur est ac maximus iaculis. Maecenas ac risus sapien. Fusce eu velit lectus. Morbi at fringilla odio. Donec tempus risus magna, id faucibus ipsum scelerisque et. Sed elementum ac nunc quis eleifend. Duis pretium magna id velit fermentum, sed imperdiet odio blandit. <br><br>

Curabitur in rutrum felis. Duis eu libero sit amet sapien euismod viverra. Vestibulum eu erat a odio fringilla viverra. Nunc id odio orci. Donec mi urna, consequat quis ex ut, molestie porta mauris. In justo ex, molestie in diam ac, gravida commodo magna. Aliquam diam justo, tempor nec congue sed, malesuada id augue.</p>
                   
               </div>
               <div class="aboutRight">
                  <div class="enquireBlock">
                      <h2>Are you looking for more information?</h2>
                      <h3>Enquire now</h3>
                      <form>
                         <div class="formRow">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input class="form-control" placeholder="First Name" type="text">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <input class="form-control" placeholder="Last Name" type="text">
                            </div>
                         </div>
                         <div class="formRow">
                            <div class="col-sm-6 col-xs-12">
                                <input class="form-control" placeholder="Phone no" type="text">
                            </div>
                            <div class="col-sm-6 col-xs-12">
                                <input class="form-control" placeholder="Email" type="text">
                            </div>
                         </div>
                         <div class="formRow">
                             <input class="form-control" placeholder="Tell us what do you want to know" type="text">
                         </div>
                         <div class="formRow">
                         	<input class="checkBtn" value="Send Enquiry" type="submit">
                         </div>
                      </form>
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