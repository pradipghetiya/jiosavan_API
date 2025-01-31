<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <?php
    include './Components/header.php';
    include './Components/sidebar.php';
    include './Components/player.php';
	include './Misc/Misc.php';
    include './API/api.php';
    $id = $_GET["id"];
	$type = $_GET["type"];
    
	if ($type == "playlist") {
		$songs = CallApi("__call=playlist.getDetails&listid=$id"); 
	}
	else {
		$songs = CallApi("__call=content.getAlbumDetails&albumid=$id");
	}

    ?>

<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Home</a></li>
						<li class="breadcrumb__item"><a href="releases.html">Releases</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Release</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1><?php echo $songs['title'] ?></h1>
					</div>
				</div>
				<!-- end title -->

				<div class="col-12">
					<div class="release">
						<div class="release__content">
							<div class="release__cover">
								<img src="<?php echo $songs["image"] ?>" alt="">
							</div>
							<div class="release__stat">
								<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.65,2.24a1,1,0,0,0-.8-.23l-13,2A1,1,0,0,0,7,5V15.35A3.45,3.45,0,0,0,5.5,15,3.5,3.5,0,1,0,9,18.5V10.86L20,9.17v4.18A3.45,3.45,0,0,0,18.5,13,3.5,3.5,0,1,0,22,16.5V3A1,1,0,0,0,21.65,2.24ZM5.5,20A1.5,1.5,0,1,1,7,18.5,1.5,1.5,0,0,1,5.5,20Zm13-2A1.5,1.5,0,1,1,20,16.5,1.5,1.5,0,0,1,18.5,18ZM20,7.14,9,8.83v-3L20,4.17Z"></path></svg> 10 tracks</span>
								<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path></svg> 19 503</span>
							</div>
						</div>

						<div class="release__list" data-scrollbar="true" tabindex="-1" style="overflow: auto; outline: none;"><div class="scroll-content" style="transform: translate3d(0px, 0px, 0px);">
							<ul class="main__list main__list--playlist main__list--dashbox">
								<?php 
                                
                                    for ($i=0; $i < count($songs["list"]); $i++) { 
                                        echo '
                                        <li class="single-item">
                                            <a data-playlist="" data-title="1. ' . htmlspecialchars($songs["list"][$i]['title']) . '" data-artist="" data-img="' . htmlspecialchars($songs["list"][$i]['image']) . '" href="" class="single-item__cover">
                                                <img src="' . htmlspecialchars($songs["list"][$i]['image']) . '" alt="">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path></svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M16,2a3,3,0,0,0-3,3V19a3,3,0,0,0,6,0V5A3,3,0,0,0,16,2Zm1,17a1,1,0,0,1-2,0V5a1,1,0,0,1,2,0ZM8,2A3,3,0,0,0,5,5V19a3,3,0,0,0,6,0V5A3,3,0,0,0,8,2ZM9,19a1,1,0,0,1-2,0V5A1,1,0,0,1,9,5Z"></path></svg>
                                            </a>
                                            <div class="single-item__title">
                                                <h4><a href="#">' . htmlspecialchars($songs["list"][$i]['title']) . '</a></h4>
                                                <span><a href="artist.html"></a></span>
                                            </div>
                                            <span class="single-item__time">'.convertToMinutes($songs["list"][$i]['more_info']["duration"]).'</span>
                                        </li>';
                                    }
                                
                                ?>
							</ul>
						</div><div class="scrollbar-track scrollbar-track-x show" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 658px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y show" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 228.097px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
					</div>
				</div>

				<div class="col-12 col-lg-8">
					<div class="article">
						<!-- article content -->
						
						<!-- end article content -->


					
						<!-- end comments -->
					</div>
				</div>

				<div class="col-12 col-lg-4">
					<!-- releases -->
					<div class="row row--sidebar">
						<!-- title -->
						
			</div>
		</div>
	</main>

    <?php
    include './Components/footer.php';
    ?>
</body>

</html>