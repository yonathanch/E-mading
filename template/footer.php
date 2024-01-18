<section class="footer-2 section-padding gray-bg pb-5">
		<div class="container">
		

			<div class="footer-btm mt-5 pt-4 border-top">
				<div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="copyright text-center">
                    @ copyright all reserved to <a href="https://themefisher.com/">themefisher.com</a>-
                    <span id="currentYear"></span> Distribution <a href="https://themewagon.com">ThemeWagon.</a>
                </div>

                <!-- Script untuk mengubah tahun secara dinamis -->
                <script>
                    function updateYear() {
                        // Get the current year
                        var currentYear = new Date().getFullYear();

                        // Set the current year in the HTML
                        document.getElementById("currentYear").innerText = currentYear;
                    }

                    // Panggil fungsi saat halaman dimuat
                    updateYear();
                </script>
            </div>
</div>
			</div>
		</div>
	</section>


	<!-- THEME JAVASCRIPT FILES
================================================== -->
	<!-- initialize jQuery Library -->
	<script src="assets/landingpage/landingpage/plugins/jquery/jquery.js"></script>
	<!-- Bootstrap jQuery -->
	<script src="assets/landingpage/landingpage/plugins/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/landingpage/landingpage/plugins/bootstrap/js/popper.min.js"></script>
	<!-- Owl caeousel -->
	<script src="assets/landingpage/landingpage/plugins/owl-carousel/owl.carousel.min.js"></script>
	<script src="assets/landingpage/landingpage/plugins/slick-carousel/slick.min.js"></script>
	<script src="assets/landingpage/landingpage/plugins/magnific-popup/magnific-popup.js"></script>
	<!-- Instagram Feed Js -->
	<script src="assets/landingpage/landingpage/plugins/instafeed-js/instafeed.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
	<script src="assets/landingpage/landingpage/plugins/google-map/gmap.js"></script>
	<!-- main js -->
	<script src="assets/landingpage/landingpage/js/custom.js"></script>

	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script>
    $(document).ready(function() {
        // Batasi tinggi maksimum artikel
        var maxHeight = 900; // Sesuaikan dengan tinggi maksimum yang diinginkan

        // Cek apakah kontennya lebih tinggi dari maksimum
        $(".article-content").each(function() {
            var articleHeight = $(this).height();

            if (articleHeight > maxHeight) {
                // Potong konten dan tambahkan read more link
                var trimmedContent = $(this).html().substr(0, maxHeight);
                $(this).html(trimmedContent );

                // Tambahkan event click pada link read more
                $(this).find(".read-more").click(function() {
                    $(this).siblings(".article-content").css("max-height", "none");
                    $(this).remove(); // Hapus link read more setelah diklik
                });
            }
        });
    });
	</script>
	
	


</body>

</html>