<div style="flex-grow:1"></div>

<footer>
  <div class="container">
   	<div class="row">
        <div class="col-12 col-md">
        	<a href="{{ URL::asset('/') }}"><img class="mb-2" src="{{ URL::asset('img/logo.png') }}" alt="FlipTop Battle League" title="FlipTop Battle League"></a>
        	<small class="d-block mb-3">The First Filipino Rap Battle League</small>
          <p class="d-block mb-3 text-muted">&copy; {{ now()->year }} FlipTop Kru Corp.</p>
        </div>
        <div class="col-6 col-md">
          <h5>Explore</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-warning text-decoration-none" href="/articles">Articles</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="/emcees">Emcees</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="/videos">Videos</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="/promos">Promos</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="/lyrics">Lyrics</a></li>
          </ul>
        </div>
        <div class="col-6 col-md">
          <h5>About</h5>
          <ul class="list-unstyled text-small">
            <li class="mb-1"><a class="link-warning text-decoration-none" href="/about">The League</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="https://tryouts.fliptop.com.ph">Tryouts</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="#">Privacy</a></li>
            <li class="mb-1"><a class="link-warning text-decoration-none" href="#">Terms</a></li>
          </ul>
        </div>
        <div class="col-12 col-md mt-2">
          <div class="ft-soc">
  				  <a href="https://www.facebook.com/fliptop.battleleague" target="_blank"> <i class="fab fa-facebook fa-lg me-2"></i></a>
  				  <a href="https://www.twitter.com/FlipTop_Battles" target="_blank"> <i class="fab fa-twitter fa-lg me-2"></i></a>
  				  <a href="https://www.youtube.com/fliptopbattles" target="_blank"> <i class="fab fa-youtube fa-lg me-2"></i></a>
  				  <a href="https://www.instagram.com/fliptopbattles" target="_blank"> <i class="fab fa-instagram fa-lg me-2"></i></a>
  				  <a href="https://www.patreon.com/fliptop" target="_blank"> <i class="fab fa-patreon fa-lg me-2"></i></a>
          </div>
    			<hr>
    			<small class="d-block">Become a partner:</small>
    			<h5 class="ft-part">partner@fliptop.com.ph</h5>
        </div>
    </div>
  </div>
</footer>

	<script src="{{ URL::asset('/js/custom.js') }}"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

  <script>
  $('.owl-carousel').owlCarousel({
    stagePadding: 20,
    loop:true,
    margin:10,
    dots:false,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
      }
  })
  </script>
	
	</body>
</html>