@extends('layouts.master')


@section('title')
Pizza Roko
@endsection('title')

@section('styles')
 <link rel="stylesheet" href="css/responsee.css">
@endsection('styles')

@section('content')

         
         <!-- FIRST BLOCK -->
         <div id="first-block">
            <div class="line">
               <div class="panel panel-default">
                  <div class="panel-body">
               <img class="title" src="/storage/images/logo1.png" ;"> 
               
            </div>
         </div>
         </div>
         </div>
         

         
         <!-- ABOUT US -->
         <div id="about-us">
            <div class="s-12 m-12 l-6">
               <img src="/storage/images/restaurant.png" alt="">
            </div>
            <article class="s-12 m-12 l-6">
               <h2>Upoznajte nas</h2>
               <p>Pizzerija Roko započela je s radom 2017. godine u Zadru.</p>
               <p>Uz veliku ponudu pizza i sendviča svakodnevno osmišljavamo, probavamo te stavljamo u ponudu nešto novo.</p>
               <p>Naš krajnji cilj je da zadovoljimo najzahtjevnije nepce, te postati sinonim vrhunske hrane, te brze i efikasne dostave!</p>
               <p>Iskreno se nadamo da ćemo uspjeli u tome, a to potvrđuju i svi naši zadovoljni klijenti kojih je iz dana u dan sve više i više. Na tome smo vam jako zahvalni, jer je to potvrda naše konstantne kvalitete.</p>
               <p>Očekujemo vaš poziv, te vam želimo dobar tek!</p>
               <p>Vaša pizzerija <strong>Roko</strong> </p>
               
            </article>
         </div>



         <!-- FEATURES -->
         <div id="features">
            <div class="line">
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i><div class="features_img1"><img src="/storage/images/stopwatch.png"></div></i>
                     <h2>Brza dostava 30-40 min</h2>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                      <i><div class="features_img2"><img src="/storage/images/internet.png"></div></i>
                     <h2>Online narudžba</h2>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                      <i><div class="features_img3"><img src="/storage/images/home1.png"></div></i>
                     <h2>Domaći proizvodi</h2>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                      <i><div class="features_img4"><img src="/storage/images/clock.png"></div></i>
                    <h2> PON-SUB 10-23 h</h2><h2>
                      NED 17-23 h</h2>
                  </div>

               </div>
            </div>
         </div>




   
         <!-- CONTACT -->
         <div id="contact">
            <div class="line">
               <h2 class="section-title">Kontakt</h2>
               <div class="margin">
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align"></div>
                  <div class="s-12 m-12 l-6 margin-bottom right-align">
                     <address>       
                        <p><strong><i class="fa fa-map-marker" aria-hidden="true"></i>Adresa:</strong> Zadar</p>
                        <p><strong><i class="fa fa-phone" aria-hidden="true"></i>Tel:</strong>   023/14-71-47</p>
                        <p><strong><i class="fa fa-phone" aria-hidden="true"></i>Mob:</strong>  095/14-71-47-7</p>
                        <p><strong> <i class="fa fa-clock-o" aria-hidden="true"></i>Ponedjeljak-subota:</strong> 10:00-23:00</p>
                        <p><strong><i class="fa fa-clock-o" aria-hidden="true"></i>Nedjelja:</strong>   13:00-23:00</p>
                        <p><strong><i class="fa fa-envelope" aria-hidden="true"></i>E-mail:</strong> pizzaroko@gmail.com</p>
                     </address>
                  </div>
                  <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align"></div>         
               </div>
            </div>
         </div>

         
         <!-- MAP -->

         <div id="map-block">      
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d91632.00016806804!2d15.178864294461462!3d44.134934255146284!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4761fa62d2c0b88f%3A0x12323e1c13f40784!2sZadar!5e0!3m2!1shr!2shr!4v1503595655292" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

         </div>

@endsection