<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12 middle">
						<div class="sosmed">
						<a class="box box-fb" href="#">
							<i class="fab fa-facebook-f icon"></i>
						</a>
						<a class="box box-twitter" href="#">
							<i class="fab fa-twitter icon"></i>
						</a>
						<a class="box box-ig" href="https://www.instagram.com/acehfarmschool/" target="_blank">
							<i class="fab fa-instagram icon"></i>
						</a>
						<a class="box box-yt" href="#">
							<i class="fab fa-youtube icon"></i>
						</a>
					</div>
						<p>Made with <i class="fas fa-heart"></i> in Banda Aceh</p>
						<p>&copy; 2018 <span>Aceh Farm School.</span> All Rights Reserved.</p>
					</div>
				</div>
			</div>
		</footer>

<!-- js -->
<script type="text/javascript" src="<?= base_url('assets/js/aos.js');?>"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
	 //animasi the-team
	 	AOS.init();

	 //responsive menu
		$(document).ready(function(){
			$(".btn-hamburger .fa-times").hide();

			$(".btn-hamburger .fa-bars").click(function(){
				$(this).hide();
				$(".btn-hamburger .fa-times").show();
				$(".mobile ul").addClass("active");
			});

			$(".btn-hamburger .fa-times").click(function(){
				$(this).hide();
				$(".btn-hamburger .fa-bars").show();
				$(".mobile ul").removeClass("active");
			});
		});
	 	

		$(document).ready(function(){

				zero = 0;

				$(window).on('scroll', function(){

					if ($(window).scrollTop() > zero){
						$('header').addClass('hide');
						$('header').removeClass('show');

					} else {
						$('header').removeClass('hide');
						$('header').addClass('show');
					};
					
					zero = $(window).scrollTop()

					if ($(window).scrollTop()==0) {
						$('header').removeClass('show');
					}

				});

			});

</script>

</body>
</html>