<section class="  bg-primary">
        <div class="container">
           <div class="row">
               <div class="col-md-4 hou">
               <?php dynamic_sidebar('footer-1');?>
               </div>
               <div class="col-md-4 hou">
              <?php dynamic_sidebar('footer-2');?>
               </div>
               <div class="col-md-4 hou">
              <?php dynamic_sidebar('footer-3');?>
               </div>
             
           </div>
        </div>
    </section>

    <script src="<?php echo get_template_directory_uri();?>./https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 2000, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    </script>


<?php wp_footer ();?>
</body>

</html>