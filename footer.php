   </div>
   </div>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> 
   <script src="/js/bootstrap.min.js"></script> 
   <script src="/js/swiper.min.js"></script> 
   <script src="/js/smooth-scroll.min.js"></script>
   <!-- Initialize Swiper -->
    <script>
    	smoothScroll.init();
    	var swiper = new Swiper('.swiper-container');

      $(function() {
          $('.toggle-menu').click(function() {
              toggleMenu();
          });
      });

      function toggleMenu() {
          if ($('#off-canvas-menu').hasClass('menu-open')) { 
              $('#off-canvas-menu').removeClass('menu-open');
              $('#off-canvas-menu').addClass('menu-closed');
          } else {                
              $('#off-canvas-menu').removeClass('menu-closed');
              $('#off-canvas-menu').addClass('menu-open');
          }            
      }
    </script>
   <script type="text/javascript" src="/js/TimeCircles.js"></script>
   </body>
</html>
