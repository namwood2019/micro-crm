<?php
/*
Template Name: Presentaion Page
*/
?>

<?php get_header(); ?>

<!-- Section A: Gallery -->
<section id="work-a" class="text-center py-3">
    <div class="container">

      <h1 class="section-title">Presentation de notre equipe</h1>
      <div class="bottom-line" ></div>


        <div class="item">
          <div class="item-image">
            <img src="<?php bloginfo('template_directory'); ?>../img/person.png" alt="">
          </div>
          <div class="item-text">
            <div class="item-text-wrap">
            <h2>Mahdi T</h2>
            <h3>Domaine: Analyste</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Commodi quos atque reprehenderit provident, ut eius laborum 
              ratione fugiat libero molestias debitis, nostrum excepturi 
              incidunt repudiandae accusantium sit quia iusto nemo.</p>
            </div>
          </div>
        </div>



        <div class="item">
          <div class="item-image">
            <img src="<?php bloginfo('template_directory'); ?>../img/person.png" alt="">
          </div>
          <div class="item-text">
            <div class="item-text-wrap">
            <h2>Quy Nan N</h2>
            <h3>Specialiste Backend </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Commodi quos atque reprehenderit provident, ut eius laborum 
              ratione fugiat libero molestias debitis, nostrum excepturi 
              incidunt repudiandae accusantium sit quia iusto nemo.</p>
            </div>
          </div>
        </div>


        <div class="item">
          <div class="item-image">
            <img src="<?php bloginfo('template_directory'); ?>../img/person.png" alt="">
          </div>
          <div class="item-text">
            <div class="item-text-wrap">
            <h2>Theodore L</h2>
            <h3>Specialiste Frentend</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Commodi quos atque reprehenderit provident, ut eius laborum 
              ratione fugiat libero molestias debitis, nostrum excepturi 
              incidunt repudiandae accusantium sit quia iusto nemo.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

<?php get_footer(); ?>
