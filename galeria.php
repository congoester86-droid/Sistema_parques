<?php 
require_once '_Config/conexao.php';
date_default_timezone_set('Africa/Luanda'); 
?>  
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- basic -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- mobile metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="initial-scale=1, maximum-scale=1">
	<!-- site metas -->
	<title>Projects</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- Responsive-->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- fevicon -->
	<link rel="icon" href="images/fevicon.png" type="image/gif" />
	<!-- Scrollbar Custom CSS -->
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
	<!-- Tweaks for older IEs-->
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;800&family=Sen:wght@400;700;800&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header top section start -->
	<div class="header_top_section">
		<div class="container">
			<div class="row">
            <div class="col-sm-12">
               <div class="header_top_main">
                  <div class="call_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i> +000 000 000</a></div>
                  <div class="call_text_2"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i> contacto@example.com</a></div>
                  <div class="call_text_1"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i>Angola/Huambo</a></div>
               </div>
            </div>
         </div>
		</div>
	</div>
	<!-- header top section start -->
	<!-- header section start -->
	<div class="header_section header_bg">
		<div class="container-fluid">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="index.php">Início</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="services.html">Serviços</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="about.html">Sobre</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="projects.html">Parceiros</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="parques.php">Parques</a>
                  </li>
                   <li class="nav-item">
                     <a class="nav-link" href="eventos.php">Eventos</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="galeria.php">Galeria</a>
                  </li>
                 
                  <li class="nav-item">
                     <a class="nav-link" href="contact.html">Contactos</a>
                  </li>
               </ul>
               <div class="quote_btn">
                  <a href="login.php">LOGIN</a></div>
               </div>
				</div>
			</nav>
		</div>
	</div>
	<!-- header section end -->
	
		<div class="projects_section_2 layout_padding">
			<div class="container">
				<div class="pets_section">
					<div class="pets_section_2">
						<div class="row">
							<div class="col-md-12">
								<div class="nav-tabs-navigation">
									<div class="nav-tabs-wrapper">
										<ul class="nav " data-tabs="tabs">
											<?php 
											$sqli=mysqli_query($connect, "SELECT * FROM  area_parq ");
											while ($information= mysqli_fetch_array($sqli)) {?>
												<li class="nav-item"><a href="">
													<img style="border-radius: 1px; padding: 1px; width: 350px; height: 310px;" src="_imgParq/<?php echo ($information['Imagem']); ?>">
												</a>
												</li>

											<?php }  echo"<br>".""; ?>
										</ul>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
</div>
<!-- projects section end -->
<!-- footer section start -->
<div class="footer_section layout_padding">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
			</div>
		</div>
	
		<div class="social_icon">
			<ul>
				<li>
					<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</li>
			</ul>
		</div>
	</div>
</div>
<!-- footer section end -->
<!-- copyright section start -->
<div class="copyright_section">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<p class="copyright_text">Feito<a href="https://html.design" rel="nofollow">Por</a> Distribution by <a href="https://themewagon.com">pobaexcelencia</a></p>
			</div>
		</div>
	</div>
</div>
<!-- copyright section end -->
<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
</body>
</html>