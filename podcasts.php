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
    include './API/api.php';
    
    $trendingData = getHomePageData();
?>
<main class="main">
		<div class="container-fluid">
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Podcasts</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Podcasts</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row row--grid">
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Search...">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
						</form>

						<div class="main__filter-wrap">
							<select class="main__select select2-hidden-accessible" name="genres" data-select2-id="1" tabindex="-1" aria-hidden="true">
								<option value="popular" data-select2-id="3">Popular</option>
								<option value="live">Live</option>
								<option value="newest">Newest</option>
							</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 61px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-genres-n6-container"><span class="select2-selection__rendered" id="select2-genres-n6-container" role="textbox" aria-readonly="true" title="Popular">Popular</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
						</div>

						<div class="slider-radio">
							<input type="radio" name="grade" id="live" checked="checked"><label for="live" style="">Live</label>
							<input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
							<input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
						<div class="sliding-piece" style="position: absolute; transition: width 0.2s, height 0.2s, top 0.2s, left 0.2s; opacity: 0; left: 5px; top: 5px; width: 57.0781px; height: 30px;"></div></div>
					</div>

					<div class="row row--grid">
                    <?php
for ($i = 0; $i < count($trendingData["promo:vx:data:107"]); $i++) {
    echo '
    <div class="col-12 col-sm-6 col-lg-4">
        <div class="live">
            <a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="live__cover open-video">
                <img src='.$trendingData["promo:vx:data:107"][$i]["image"].' alt="">
                <span class="live__status">live</span>
                <span class="live__value">6.5K viewers</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path></svg>
            </a>
            <h3 class="live__title"><a href="http://www.youtube.com/watch?v=0O2aH4XLbto" class="open-video">'.$trendingData["promo:vx:data:107"][$i]["title"].'</a></h3>
        </div>
    </div>';
}
?>


						
					</div>

					<div class="row row--grid">
						<div class="col-12">
							<button class="main__load" type="button">Load more</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

    <?php
        include './Components/footer.php';
    ?>
</body>
</html>