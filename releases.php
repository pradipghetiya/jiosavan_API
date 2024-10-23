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
						<li class="breadcrumb__item breadcrumb__item--active">Releases</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Releases</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<!-- releases -->
			<div class="row row--grid">
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Search...">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg></button>
						</form>

						<div class="main__filter-wrap">
							<select class="main__select select2-hidden-accessible" name="genres" data-select2-id="1" tabindex="-1" aria-hidden="true">
								<option value="all" data-select2-id="3">All artists</option>
								<option value="legacy">Legacy artists</option>
								<option value="active">Active artists</option>
							</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="2" style="width: 103px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-genres-71-container"><span class="select2-selection__rendered" id="select2-genres-71-container" role="textbox" aria-readonly="true" title="All artists">All artists</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

							<select class="main__select select2-hidden-accessible" name="years" data-select2-id="4" tabindex="-1" aria-hidden="true">
								<option value="All genres" data-select2-id="6">All genres</option>
								<option value="1">Alternative</option>
								<option value="2">Blues</option>
								<option value="3">Classical</option>
								<option value="4">Country</option>
								<option value="5">Electronic</option>
								<option value="6">Hip-Hop/Rap</option>
								<option value="7">Indie</option>
								<option value="8">Jazz</option>
								<option value="8">Latino</option>
								<option value="8">R&amp;B/Soul</option>
								<option value="8">Rock</option>
							</select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 99px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-years-8b-container"><span class="select2-selection__rendered" id="select2-years-8b-container" role="textbox" aria-readonly="true" title="All genres">All genres</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
						</div>

						<div class="slider-radio">
							<input type="radio" name="grade" id="featured" checked="checked"><label for="featured" style="">Featured</label>
							<input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
							<input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
						<div class="sliding-piece" style="position: absolute; transition: width 0.2s, height 0.2s, top 0.2s, left 0.2s; opacity: 0; left: 5px; top: 5px; width: 88.5156px; height: 30px;"></div></div>
					</div>

					<div class="row row--grid">
					<?php

// Loop to print the HTML block 5 times
for ($i = 0; $i < count($trendingData["new_albums"]); $i++) {
	echo '
<div class="col-6 col-sm-4 col-lg-2">
<div class="album">
<div class="album__cover">
<img src='.$trendingData["new_albums"][$i]["image"].'>
<a href="release.html"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.54,9,8.88,3.46a3.42,3.42,0,0,0-5.13,3V17.58A3.42,3.42,0,0,0,7.17,21a3.43,3.43,0,0,0,1.71-.46L18.54,15a3.42,3.42,0,0,0,0-5.92Zm-1,4.19L7.88,18.81a1.44,1.44,0,0,1-1.42,0,1.42,1.42,0,0,1-.71-1.23V6.42a1.42,1.42,0,0,1,.71-1.23A1.51,1.51,0,0,1,7.17,5a1.54,1.54,0,0,1,.71.19l9.66,5.58a1.42,1.42,0,0,1,0,2.46Z"></path></svg></a>
<span class="album__stat">
	<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3.71,16.29a1,1,0,0,0-.33-.21,1,1,0,0,0-.76,0,1,1,0,0,0-.33.21,1,1,0,0,0-.21.33,1,1,0,0,0,.21,1.09,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1,1,0,0,0,.21-1.09A1,1,0,0,0,3.71,16.29ZM7,8H21a1,1,0,0,0,0-2H7A1,1,0,0,0,7,8ZM3.71,11.29a1,1,0,0,0-1.09-.21,1.15,1.15,0,0,0-.33.21,1,1,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21.94.94,0,0,0,.76,0,1.15,1.15,0,0,0,.33-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1,1,0,0,0,3.71,11.29ZM21,11H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2ZM3.71,6.29a1,1,0,0,0-.33-.21,1,1,0,0,0-1.09.21,1.15,1.15,0,0,0-.21.33.94.94,0,0,0,0,.76,1.15,1.15,0,0,0,.21.33,1.15,1.15,0,0,0,.33.21,1,1,0,0,0,1.09-.21,1.15,1.15,0,0,0,.21-.33.94.94,0,0,0,0-.76A1.15,1.15,0,0,0,3.71,6.29ZM21,16H7a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"></path></svg> 22</span>
	<span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20,13.18V11A8,8,0,0,0,4,11v2.18A3,3,0,0,0,2,16v2a3,3,0,0,0,3,3H8a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1H6V11a6,6,0,0,1,12,0v2H16a1,1,0,0,0-1,1v6a1,1,0,0,0,1,1h3a3,3,0,0,0,3-3V16A3,3,0,0,0,20,13.18ZM7,15v4H5a1,1,0,0,1-1-1V16a1,1,0,0,1,1-1Zm13,3a1,1,0,0,1-1,1H17V15h2a1,1,0,0,1,1,1Z"></path></svg> 19 503</span>
</span>
</div>
<div class="album__title">
<h3><a href="release.html">'.$trendingData["new_albums"][$i]["title"].'</a></h3>
<span><a href="artist.html">VIZE</a> &amp; <a href="artist.html">Alan Walker</a> &amp; <a href="artist.html">Leony</a></span>
</div>
</div>
</div>';
}

?>
					</div>
				</div>
			</div>
			<!-- end releases -->		
		</div>
	</main>

    <?php
        include './Components/footer.php';
    ?>
</body>
</html>