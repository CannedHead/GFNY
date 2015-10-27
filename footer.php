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
    <script src="/gnfy/js/jquery.easypiechart.min.js"></script>
    <script>
        $(function() {
            var options = {
              scaleColor: false,
              trackColor: 'rgba(255,255,255,0.3)',
              barColor: '#9EFF00',
              lineWidth: 6,
              lineCap: 'butt',
              size: 98
            };

            window.addEventListener('DOMContentLoaded', function() {
              var charts = [];
              [].forEach.call(document.querySelectorAll('.chart'),  function(el) {
                charts.push(new EasyPieChart(el, options));
              });
            });
        });
    </script>
    <script src="/gnfy/js/fluidvids.min.js"></script>
          <script>
            $(document).ready(function(){
              fluidvids.init({
                selector: ['iframe', 'object'], // runs querySelectorAll()
                players: ['www.youtube.com', 'player.vimeo.com'] // players to support
              });            });
          </script>
   </body>
</html>
