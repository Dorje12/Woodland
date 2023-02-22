
<footer>
<div class = "footer">
	<div class="Header">
		<h>Transform yourself with WoodLands College</h>
	</div>

	<!-- This Ending section is for find us, contact us and follow -->
	<div class="Ending">
		<div class="Find_Us">
			<h>Find Us..</h>
			<p>Woodland college</p>
			<i class="fa-solid fa-map-location"></i>

			<!-- Disclaimer is here -->

			<div class="Disclaimer">
				<p>Disclaimer  | Accessibility  | Privacy</p>
			</div>	
		</div>

		<div class="enquirie">
			<i class="fa-solid fa-phone"></i>
			<h>Contact us </h>
			<p>Main 0123456789 | Enquirie 010203040506070</p>
			<p>example@gmail.com</p>

		</div>

		<div class="Follow">
			<h>Follow us</h>
			<div class="i">
				<i class="fa-brands fa-youtube"></i>
				<i class="fa-brands fa-facebook-square"></i>
				<i class="fa-brands fa-instagram"></i>
				<i class="fa-brands fa-twitter"></i>
				<i class="fa-brands fa-linkedin"></i>

				<!-- Copyright is here -->
				<div class="copyright">
					<p>Copyright <i class="fa-regular fa-copyright"></i> 2022 WoodLands University and College</p>
				</div>
			</div>	
				
		</div>
		
		
	</div>
</div>
</footer>
<script src="<?= base_url('public/js/index.js'); ?>"></script>
<script src="https://kit.fontawesome.com/f5d7b5ca64.js" ></script>
<style>
	footer{
	position: relative;
	width: 100%;
	background-color: #115740;
	height:240px;
}
.Header{
	color:gold;
	text-align: center;
	color: white;
	padding:20px ;
	font-size: 20px;
}
.Ending{
	display: grid;
	color: white;
	grid-template-columns: 33% 33% 33%;
	height: 70px;	

}

.Find_Us{
	text-align: center;
	font-size: 15px;
	padding-top: 10%;
	
}
.Find_Us h, .fa-map-location{
	font-size: 15px;
}
.Disclaimer{

	font-size: 15px;
}
.enquirie{
	text-align: center;
	padding-top: 10%;
}
.enquirie h, .fa-phone{
	font-size:15px;
}


.Follow{
	text-align: center;
	font-size: 15px;
	padding-top: 10%;
	
}
.Follow i{
	padding: 2%;
}

.copyright{
	font-size: 15px;
	
}
</style>
</body>
</html>


