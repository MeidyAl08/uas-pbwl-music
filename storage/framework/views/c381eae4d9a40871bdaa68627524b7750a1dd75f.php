<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('../resources/js/app.js')); ?>"></script>
    <!-- Javascript files -->
		<!-- jQuery -->
		<script src="<?php echo e(asset('../resources/js/jquery.js')); ?>"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo e(asset('../resources/js/bootstrap.min.js')); ?>"></script>
		<!-- WayPoints JS -->
		<script src="<?php echo e(asset('../resources/js/waypoints.min.js')); ?>"></script>
		<!-- Include js plugin -->
		<script src="<?php echo e(asset('../resources/js/owl.carousel.min.js')); ?>"></script>
		<!-- One Page Nav -->
		<script src="<?php echo e(asset('../resources/js/jquery.nav.js')); ?>"></script>
		<!-- Respond JS for IE8 -->
		<script src="<?php echo e(asset('../resources/js/respond.min.js')); ?>"></script>
		<!-- HTML5 Support for IE -->
		<script src="<?php echo e(asset('../resources/js/html5shiv.js')); ?>"></script>
		<!-- Custom JS -->
		<script src="<?php echo e(asset('../resources/js/custom.js')); ?>"></script>
   
    <!-- Styles -->
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/bootstrap.min.css')); ?>">
    <!-- style css -->
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/animate.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/owl.carousel.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('../resources/css/style-color.css')); ?>">
    <!-- fevicon -->
    <link rel="icon" href="<?php echo e(asset('../resources/images/logo/favicon.ico')); ?>" type="image/gif" />
    <!-- Scrollbar Custom CSS -->

<body>
<!-- header area -->
<header>
<nav class="secondary-menu">
					<div class="container">
						<!-- secondary menu left link area -->
						<div class="sm-left">
							<strong>E-mail</strong>:&nbsp; <a href="#">meidy.lubis08@gmail.com</a>
						</div>
						<!-- secondary menu right link area -->
						<div class="sm-right">
							<!-- social link -->
							<div class="sm-social-link">
								<a class="h-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="h-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="h-google" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="h-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</nav>
<nav class="navbar navbar-fixed-top navbar-default">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<!-- logo area -->
							<a class="navbar-brand" href="#home">
								<!-- logo image -->
								<img class="img-responsive" src="<?php echo e(asset('../resources/images/logo/logo.png')); ?>" alt="" />
							</a>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?php echo e(url('/track')); ?>">Track</a></li>
								<li><a href="<?php echo e(url('/album')); ?>">Album</a></li>
								<li><a href="<?php echo e(url('/artist')); ?>">Artist</a></li>
								<li><a href="<?php echo e(url('/played')); ?>">Played</a></li>
								<?php if(auth()->guard()->guest()): ?>
                            <?php if(Route::has('login')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</header>
			<!--/ header end -->
			<!-- banner area -->
			<div class="banner">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<img src="<?php echo e(asset('../resources/images/banner/b1.jpg')); ?>" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-one">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-music"></i>UAS Meidy Alfarazi Lubis</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Sistem Informasi - 4</h3>
									
								</div>
							</div>
						</div>
						<div class="item">
							<img src="<?php echo e(asset('../resources/images/banner/b2.jpg')); ?>" alt="...">
							<div class="container">
								<!-- banner caption -->
								<div class="carousel-caption slide-two">
									<!-- heading -->
									<h2 class="animated fadeInLeftBig"><i class="fa fa-headphones"></i> Selamat Menikmati..</h2>
									<!-- paragraph -->
									<h3 class="animated fadeInRightBig">Semua Lagu Kesukaan Kamu Ada Disini</h3>
									<!-- button -->
									<a href="<?php echo e(url('track/create')); ?>" class="animated fadeIn btn btn-theme">Tambah Music Sekarang !</a>
								</div>
							</div>
						</div>
					</div>

					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="fa fa-arrow-left" aria-hidden="true"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="fa fa-arrow-right" aria-hidden="true"></span>
					</a>
				</div>
			</div>
			<!--/ banner end -->
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\laravel_meidy_uas\resources\views/layouts/header.blade.php ENDPATH**/ ?>