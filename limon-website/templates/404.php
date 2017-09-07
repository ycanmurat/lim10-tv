<?include("header.php");?>

<section class="page-not-found">
	<div class="area" style="background-image: url('images/404img.jpg');">
		<h2>404</h2>
		<p>Aradığın sayfayı bulamadım. Gel anasayfaya kadar eşlik edeyim sana.</p>
		<a href="index.php">Anasayfa</a>
	</div>
</section>
<style>

	section.page-not-found div.area {height: 100vh;z-index: 2;align-items: center;text-align: center;width: 100%;background-position: center;padding-top: 20vh;}	
	section.page-not-found div.area h2 {font-size: 30rem;color: white;text-shadow: 2px 2px black;}
	section.page-not-found div.area p {text-align: center;font-size: 24px;color: white;text-shadow: 1px 1px black;}
	section.page-not-found div.area a {border: 1px solid;margin-top: 25px;display: inline-block;padding: 12px 30px;font-size: 15px;color: white;border-bottom-left-radius: 15px;border-top-right-radius: 15px;transition: all ease .4s;}
	section.page-not-found div.area a:hover {background: black;text-decoration: none;}
	@media only screen and (max-width: 991px){
		section.page-not-found div.area h2 {font-size: 10rem;}

		section.page-not-found div.area p {
			font-size: 19px;
			padding: 40px;
		}
	}
	@media only screen and (max-width: 991px){

		section.page-not-found div.area p {
			font-size: 16px;
			padding: 10px;
		}
	}
</style>
<?include("footer.php");?>