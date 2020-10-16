 <?php
 /*
  Template Name: Contact Page
 */
 ?>
 
 <?php get_header(); ?>

 <!-- Section A: Contact Form -->
 <section id="contact-a" class="text-center py-3">
    <div class="container">
      <h1 class="section-title">Contact</h1>
      <div class="bottom-line"></div>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit 
      Lorem ipsum dolor sit amet, 
      </p>
  
      <div class="mapouter">
        <div class="gmap_canvas">
          <iframe width="700" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=cegep%20garneau&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
          </iframe>
        </div>
        <style>
          .mapouter{position:relative;text-align:right;height:300px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
        </style>
      </div>

      <h2>Nous contacter</h2>
      <form>
        <div class="text-fields">
          <input type="text" class="text-input name-input" placeholder="Nom">
          <input type="text" class="text-input subject-input" placeholder="Sujet">
          <input type="text" class="text-input email-input" placeholder="Courriel">
          <input type="text" class="text-input phone-input" placeholder="Phone">
          <textarea class="text-input message-input" placeholder="Message"  rows="7"></textarea>
        </div>
        <button type="submit" class="btn-dark">Submit</button>
      </form>
    </div>
  </section>

  <!-- Section B: Contact Info -->
  <section id="contact-b" class="py-3">
    <div class="container">
      <div class="contact-info">
        <div>
          <a href="tel:555-555-5555">
            <i class="fa fa-phone fa-2x"></i>
            <h3>Phone</h3>
            555-555-5555
          </a>
        </div>

        <div>
          <a href="mailto:name@email.com">
            <i class="fa fa-envelope fa-2x"></i>
            <h3>Email</h3>
            send email
          </a>
        </div>

        <div>
          <i class="fa fa-address-card fa-2x"></i>
          <h3>Address</h3>
          <p>Québec (QC), Canada</p>
        </div>
      </div>
    </div>
  </section>


  <?php get_footer(); ?>
