<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FH PRODUCTION</title>
        <meta name="description" content="">  
        <meta name="author" content="">

        <!-- Mobile Specific Metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('/css/base.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/media-queries.css') }}">

        <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>

        <link rel="shortcut icon" src="{{ asset('favicon.png') }}" >
    </head>
    <body class="homepage">
        <div id="preloader"> 
       <div id="status">
         <img src="images/loader.gif" height="60" width="60" alt="">
         <div class="loader">Loading...</div>
      </div>
   </div>
   

   <!-- Header
   =================================================== -->
   <header id="main-header">

    <div class="row header-inner">

          <div class="logo"> <!-- logo setting di main.css -->
             <a class="smoothscroll" href="#hero">FH PRODUCTION</a>
          </div>

          <nav id="nav-wrap">         
             
             <a class="mobile-btn" href="#nav-wrap" title="Show navigation">
                <span class='menu-text'>Show Menu</span>
                <span class="menu-icon"></span>
             </a>
            <a class="mobile-btn" href="#" title="Hide navigation">
                <span class='menu-text'>Hide Menu</span>
                <span class="menu-icon"></span>
            </a>         

             <ul id="nav" class="nav">
                <li class="current"><a class="smoothscroll" href="#hero">Home.</a></li>
                 <li><a class="smoothscroll" href="#portfolio">Portfolio.</a></li>
                <li><a class="smoothscroll" href="#services">Services.</a></li>
                <li><a class="smoothscroll" href="#about">About Us.</a></li>
                <li><a class="smoothscroll" href="#journal">Blog.</a></li>              
                <li><a class="smoothscroll" href="#contact">Contact.</a></li>
             </ul> 

          </nav> <!-- /nav-wrap -->       

       </div> <!-- /header-inner -->

   </header> 


   <!-- Hero
   =================================================== -->
   <section id="hero">  
      
        <div class="row hero-content">

            <div class="twelve columns flex-container">

               <div id="hero-slider" class="flexslider">

                   <ul class="slides">

                       <!-- Slide -->
                       <li>
                           <div class="flex-caption">
                                <h1>HAY, we are puremedia. We make awesome and stunning digital stuff.</h1>   
                                <p><a class="button stroke smoothscroll" href="#about">More About Us</a></p>                                                                   
                            </div>                      
                       </li>

                       <!-- Slide -->
                       <li>                     
                            <div class="flex-caption">
                                <h1 >We imagine, craft and manage your brand in this new digital world.</h1>    
                                <p><a class="button stroke smoothscroll" href="#portfolio">See Our Works</a></p>                                       
                            </div>                  
                       </li>

                       <!-- Slide -->
                       <li>
                           <div class="flex-caption">
                                <h1 >Take a look at some of <a class="smoothscroll" href="#portfolio" title="">our works</a> or <a class="smoothscroll" href="#contact" title="">contact us</a> to discuss how we can help you.</h1>
                                <p><a class="button stroke smoothscroll" href="#contact">Get In Touch</a></p>                                          
                            </div>
                       </li>                                  

                   </ul>

               </div> <!-- .flexslider -->                 

          </div> <!-- .flex-container -->      

        </div> <!-- .hero-content -->      

   </section> <!-- #hero -->


   <!-- Portfolio
   ================================================== -->
   <section id="portfolio">

      <div class="row section-head">

        <div class="twelve columns">

             <h1>Our Latest Works<span>.</span></h1>

             <hr />

             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
             eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
             voluptatem quia voluptas sit aspernatur aut odit aut fugit.
             </p>

          </div>

      </div>

      <div class="row items">

        <div class="twelve columns">

            <div id="portfolio-wrapper" class="bgrid-fourth s-bgrid-third mob-bgrid-half group">
              @foreach($gambar as $image)
               <div class="bgrid item">
                  <div class="item-wrap">

                     <a href="portfolio.html">
                        <img src="{!!$image->image!!}" alt="Grizzly">
                        <div class="overlay"></div>                       
                        <div class="portfolio-item-meta">
                                  <h5>{!!$image->title!!}</h5>
                              <p>{!!$image->description!!}</p>
                            </div>                         
                     </a>

                  </div>
                </div> <!-- /item -->
                @endforeach
                <!-- item end -->

            </div> <!-- /portfolio-wrapper -->

         </div> <!-- /twelve -->

      </div>  <!-- /row -->
      
   </section> <!-- /Portfolio -->


   <!-- Services Section
   ================================================== -->
   <section id="services">

    <div class="row section-head">

        <div class="twelve columns">

             <h1>Our Awesome Services<span>.</span></h1>

             <hr />

             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
             eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
             voluptatem quia voluptas sit aspernatur aut odit aut fugit.
             </p>

         </div>

      </div>

      <div class="row">

        <div class="twelve columns">

            <div class="service-list bgrid-third s-bgrid-half mob-bgrid-whole">

                <div class="bgrid">

                   <div class="icon-part">
                    <span class="icon-graph"></span>
                   </div>

                   <h3>Marketing.</h3>

                   <div class="service-content">                      
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                   </div>      

                </div> <!-- /bgrid -->

                   <div class="bgrid">

                    <div class="icon-part">
                    <i class="icon-film"></i>
                   </div>

                   <h3>Videography.</h3>                  

                   <div class="service-content">                      
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventoveritatis et quasi architecto beatae vitae dicta sunt explicabo.
                        </p> 
                   </div>                                 

                </div> <!-- /bgrid -->

                   <div class="bgrid">

                    <div class="icon-part">                 
                    <i class="icon-camera"></i>
                   </div>

                   <h3>Photography.</h3>

                   <div class="service-content">                          
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                   </div>                               

                </div> <!-- /bgrid -->

                   <div class="bgrid first">

                    <div class="icon-part">
                    <i class="icon-eye"></i>                    
                   </div>
                      
                   <h3>Branding.</h3> 

                   <div class="service-content">                      
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                   </div>                                 

                </div> <!-- /bgrid -->

                   <div class="bgrid">

                    <div class="icon-part">
                    <i class="icon-screen-desktop"></i>
                   </div>
                      
                   <h3>Web Design.</h3>

                   <div class="service-content">                      
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                   </div>                                 

                 </div> <!-- /bgrid -->

                   <div class="bgrid">

                   <div class="icon-part">
                    <i class="icon-eyeglasses"></i>
                   </div>

                   <h3>Web Development.</h3>

                   <div class="service-content">
                       <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
                        </p> 
                   </div>                              

                </div> <!-- /bgrid -->

            </div> <!-- /service-list -->

          </div> <!-- /twelve -->

      </div> <!-- /row -->      

   </section> <!-- /services -->   


   <!-- About Section
   ================================================== -->
   <section id="about">

    <div class="row section-head">

        <div class="twelve columns">

             <h1>Who Are We<span>.</span></h1>

             <hr />

             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
             eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
             voluptatem quia voluptas sit aspernatur aut odit aut fugit.
             </p>

          </div>

      </div>

      <div class="row about-content"> 

        <div class="mob-whole six columns left">

            <h3>Our Process.</h3>   

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
             eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
             voluptatem quia voluptas sit aspernatur aut odit aut fugit.
             </p>

        </div> <!-- /left -->

        <div class="mob-whole six columns right">

            <h3>Our Approach.</h3>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
             eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
             voluptatem quia voluptas sit aspernatur aut odit aut fugit.
             </p>   

        </div> <!-- /right -->

      </div> <!-- /row -->    

      <div class="row about-content"> 

        <div class="mob-whole six columns left">

            <h3>Our Goal.</h3>  

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
             eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
             voluptatem quia voluptas sit aspernatur aut odit aut fugit.
             </p>

        </div> <!-- /left -->

        <div class="mob-whole six columns right">

            <h3>Our Mission.</h3>

            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
             eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
             voluptatem quia voluptas sit aspernatur aut odit aut fugit.
             </p>   

        </div> <!-- /right -->

      </div> <!-- /row -->


      <!-- team
    =================================================== -->
    <div id='team'>

          <div class="row team section-head">

            <div class="twelve columns">

                 <h1>Our Rockstar Team<span>.</span></h1>

                 <hr />

                 <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
                 eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
                 voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                 </p>            

              </div>

          </div>

        <div class="row about-content">

            <div class="twelve columns">

                 <div id="team-wrapper" class="bgrid-half mob-bgrid-whole group">

                    <div class="bgrid member">

                       <div class="member-header">

                            <div class="member-pic">
                                    <img src="images/team/member01-k.jpg" alt=""/>                                                  
                            </div>

                          <div class="member-name">
                             <h3>Naruto Uzumaki</h3>
                             <span>Creative Director</span>
                          </div>

                       </div>                           

                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                       nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                       <ul class="member-social">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-skype"></i></a></li>
                       </ul>

                    </div> <!-- /member -->

                    <div class="bgrid member">

                        <div class="member-header">
                                        
                                <div class="member-pic">
                                <img src="images/team/member02-k.jpg" alt=""/>                          
                            </div>
                        
                            <div class="member-name">
                            <h3>Sasuke Uchiha</h3>
                            <span>Lead Designer</span>
                            </div>

                       </div>

                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                       nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                       <ul class="member-social">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-skype"></i></a></li>
                       </ul>

                    </div> <!-- /member -->

                    <div class="bgrid member first">

                            <div class="member-header">
                            
                                <div class="member-pic">
                                <img src="images/team/member03-k.jpg" alt=""/>                          
                        </div>

                        <div class="member-name">
                            <h3>Sakura Haruno</h3>
                            <span>Web Designer</span>
                        </div>

                            </div>

                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                       nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                       <ul class="member-social">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-skype"></i></a></li>
                       </ul>

                    </div> <!-- /member -->

                    <div class="bgrid member">

                        <div class="member-header">
                                        
                                <div class="member-pic">
                                    <img src="images/team/member04-k.jpg" alt=""/>                                                      
                            </div>

                          <div class="member-name">
                             <h3>Shikamaru Nara</h3>
                             <span>Web Designer</span>
                          </div>

                       </div>

                       <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
                          nisi elit consequat ipsum, nec sagittis sem nibh id elit. </p>

                       <ul class="member-social">
                          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                          <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                          <li><a href="#"><i class="fa fa-skype"></i></a></li>
                       </ul>

                    </div> <!-- /member -->

                 </div> <!-- /twelve -->

             </div> <!-- /team-wrapper -->

         </div> <!-- /row -->

      </div> <!-- /team -->           

   </section> <!-- /about -->


   <!-- journal
   =================================================== -->
   <section id="journal">

       <div class="row section-head">

        <div class="twelve columns">

               <h1>Our Latest Ramblings<span>.</span></h1>

               <hr />

               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
               eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
               voluptatem quia voluptas sit aspernatur aut odit aut fugit.
              </p>           

            </div>

       </div>

      <div class="row">

        <div class="twelve columns">

             <div id="blog-wrapper" class="bgrid-third s-bgrid-half mob-bgrid-whole group">
                @foreach($blogs as $blog)
                <article class="bgrid">
                        
                        <h5>September 2, 2014</h5>
                   <h3><a href="single.html">{!!$blog->title!!}</a></h3>
                               
                   <p>{!!$blog->description!!}
                   </p>
                            
                </article>
                @endforeach

                                    

             </div> <!-- /blog-wrapper -->

          </div> <!-- /twelve -->

      </div> <!-- /row -->

   </section> <!-- /blog -->

   
   <!-- Contact Section
   ================================================== -->
   <section id="contact">

    <div class="row section-head">

        <div class="twelve columns">

             <h1>Get In Touch With Us<span>.</span></h1>

             <hr />

             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,
             eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam
             voluptatem quia voluptas sit aspernatur aut odit aut fugit.
             </p>

          </div>

      </div>

      <div class="row form-section">
        
        <div id="contact-form" class="twelve columns">

            <form name="contactForm" id="contactForm" method="post" action="">

                <fieldset>

                  <div class="row">

                      <div class="six columns mob-whole">
                        <label for="contactFname">First Name <span class="required">*</span></label>                                   
                            <input name="contactFname" type="text" id="contactFname" placeholder="First Name" value="" />                           
                      </div>

                      <div class="six columns mob-whole">   
                        <label for="contactLname">Last Name <span class="required">*</span></label>                                
                            <input name="contactLname" type="text" id="contactLname" placeholder="Last Name" value="" />                            
                      </div>                            

                  </div>

                  <div class="row">

                      <div class="six columns mob-whole">   
                        <label for="contactEmail">Email <span class="required">*</span></label>                                
                            <input name="contactEmail" type="text" id="contactEmail" placeholder="Email" value="" />                            
                      </div>

                      <div class="six columns mob-whole">    
                        <label for="contactSubject">Subject</label>                                
                            <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject"  value="" />                         
                      </div>

                  </div>

                  <div class="row">

                      <div class="twelve columns">
                         <label  for="contactMessage">Message <span class="required">*</span></label>
                         <textarea name="contactMessage"  id="contactMessage" placeholder="Your Message" rows="10" cols="50" ></textarea>
                      </div>

                  </div>

                  <div>
                     <button class="submit full-width">Send Message</button>
                     <div id="image-loader">
                        <img src="images/loader.gif" alt="" />
                     </div>
                  </div>

                </fieldset>
                    
            </form> <!-- /contactForm -->

            <!-- message box -->
            <div id="message-warning"></div>
            <div id="message-success">
               <i class="fa fa-check"></i>Your message was sent, thank you!<br />
                </div>

         </div> <!-- /contact-form -->          

      </div> <!-- /form-section -->     

   </section>  <!-- /contact-->


   <!-- Footer
   ================================================== -->
   <footer>

      <div class="row">       

         <div class="six columns tab-whole footer-about">
                
                <h3>About Puremedia</h3>
               
            <p>This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
            Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem
            nibh id elit. 
            </p>

            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua.</p>        

         </div> <!-- /footer-about -->

         <div class="six columns tab-whole right-cols">

            <div class="row">

               <div class="columns">
                  <h3 class="address">Contact Us</h3>
                  <p>
                  1600 Amphitheatre Parkway<br>
                  Mountain View, CA<br>
                  94043 US
                  </p>

                  <ul>
                    <li><a href="tel:6473438234">647.343.8234</a></li>
                    <li><a href="tel:1234567890">123.456.7890</a></li>
                    <li><a href="mailto:someone@puremedia.com">someone@puremedia.com</a></li>
                  </ul>                  
               </div> <!-- /columns -->             

               <div class="columns last">
                  <h3 class="contact">Follow Us</h3>

                  <ul>
                     <li><a href="#">Facebook</a></li>
                     <li><a href="#">Twitter</a></li>
                     <li><a href="#">GooglePlus</a></li>
                     <li><a href="#">Instagram</a></li>
                     <li><a href="#">Flickr</a></li>
                     <li><a href="#">Skype</a></li>
                  </ul>
                  
               </div> <!-- /columns --> 

            </div> <!-- /Row(nested) -->

         </div>

         <p class="copyright">&copy; Copyright 2014 Puremedia. Design by <a href="http://www.styleshout.com/">Styleshout.</a></p>        

         <div id="go-top">
            <a class="smoothscroll" title="Back to Top" href="#hero"><span>Top</span><i class="fa fa-long-arrow-up"></i></a>
         </div>

      </div> <!-- /row -->

   </footer> <!-- /footer -->


   <!-- Java Script
   ================================================== -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script>window.jQuery || document.write('<script src="js/jquery-1.10.2.min.js"><\/script>')</script>
   <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>   
   <script src="js/jquery.flexslider.js"></script>
   <script src="js/jquery.fittext.js"></script>
   <script src="js/backstretch.js"></script> 
   <script src="js/waypoints.js"></script>  
   <script src="js/main.js"></script>

    </body>
</html>
