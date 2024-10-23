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
			<!-- artists -->
			<div class="row row--grid">
				<!-- breadcrumb -->
				<div class="col-12">
					<ul class="breadcrumb">
						<li class="breadcrumb__item"><a href="index.html">Home</a></li>
						<li class="breadcrumb__item breadcrumb__item--active">Artists</li>
					</ul>
				</div>
				<!-- end breadcrumb -->

				<!-- title -->
				<div class="col-12">
					<div class="main__title main__title--page">
						<h1>Artists</h1>
					</div>
				</div>
				<!-- end title -->
			</div>

			<div class="row row--grid">
				<div class="col-12">
					<div class="main__filter">
						<form action="#" class="main__filter-search">
							<input type="text" placeholder="Search...">
							<button type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
									<path
										d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z">
									</path>
								</svg></button>
						</form>

						<div class="main__filter-wrap">
							<select class="main__select select2-hidden-accessible" name="genres" data-select2-id="1"
								tabindex="-1" aria-hidden="true">
								<option value="all" data-select2-id="3">All artists</option>
								<option value="legacy">Legacy artists</option>
								<option value="active">Active artists</option>
							</select><span class="select2 select2-container select2-container--default" dir="ltr"
								data-select2-id="2" style="width: 103px;"><span class="selection"><span
										class="select2-selection select2-selection--single" role="combobox"
										aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
										aria-labelledby="select2-genres-0j-container"><span
											class="select2-selection__rendered" id="select2-genres-0j-container"
											role="textbox" aria-readonly="true" title="All artists">All
											artists</span><span class="select2-selection__arrow" role="presentation"><b
												role="presentation"></b></span></span></span><span
									class="dropdown-wrapper" aria-hidden="true"></span></span>

							<select class="main__select select2-hidden-accessible" name="years" data-select2-id="4"
								tabindex="-1" aria-hidden="true">
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
							</select><span class="select2 select2-container select2-container--default" dir="ltr"
								data-select2-id="5" style="width: 99px;"><span class="selection"><span
										class="select2-selection select2-selection--single" role="combobox"
										aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
										aria-labelledby="select2-years-2e-container"><span
											class="select2-selection__rendered" id="select2-years-2e-container"
											role="textbox" aria-readonly="true" title="All genres">All
											genres</span><span class="select2-selection__arrow" role="presentation"><b
												role="presentation"></b></span></span></span><span
									class="dropdown-wrapper" aria-hidden="true"></span></span>
						</div>

						<div class="slider-radio">
							<input type="radio" name="grade" id="featured" checked="checked"><label for="featured"
								style="">Featured</label>
							<input type="radio" name="grade" id="popular"><label for="popular">Popular</label>
							<input type="radio" name="grade" id="newest"><label for="newest">Newest</label>
							<div class="sliding-piece"
								style="position: absolute; transition: width 0.2s, height 0.2s, top 0.2s, left 0.2s; opacity: 0; left: 5px; top: 5px; width: 88.5156px; height: 30px;">
							</div>
						</div>
					</div>

					<div class="row row--grid">
						<?php
						for ($i = 0; $i < count($trendingData["artist_recos"]); $i++) {
							echo '
    <div class="col-6 col-sm-4 col-md-3 col-xl-2">
        <a href="artist.html" class="artist">
            <div class="artist__cover">
                <img src='.$trendingData["artist_recos"][$i]["image"].' alt="">
            </div>
            <h3 class="artist__title">'.$trendingData["artist_recos"][$i]["title"].'</h3>
        </a>
    </div>';
						}
						?>

					</div>

					<button class="main__load" type="button">Load more</button>
				</div>
			</div>
			<!-- end artists -->

			<!-- events -->
			<section class="row row--grid">
				<!-- title -->
				<div class="col-12">
					<div class="main__title">
						<h2>Upcoming Events</h2>

						<a href="events.html" class="main__link">See all <svg xmlns="http://www.w3.org/2000/svg"
								viewBox="0 0 24 24">
								<path
									d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
								</path>
							</svg></a>
					</div>
				</div>
				<!-- end title -->

				<div class="col-12">
					<div class="main__carousel-wrap">
						<div class="main__carousel main__carousel--events owl-carousel owl-loaded" id="events">











							<div class="owl-stage-outer owl-height" style="height: 320px;">
								<div class="owl-stage"
									style="transform: translate3d(-1092px, 0px, 0px); transition: all; width: 4368px;">
									<div class="owl-item cloned" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event4.jpg"
											style="background: url(&quot;img/events/event4.jpg&quot;) center center / cover no-repeat;">
											<a href="#modal-ticket" class="event__ticket open-modal"><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<path
														d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z">
													</path>
												</svg> Buy ticket</a>
											<span class="event__date">March 30, 2021</span>
											<span class="event__time">6:00 pm</span>
											<h3 class="event__title"><a href="event.html">Big Club</a></h3>
											<p class="event__address">123 6th St. Melbourne, FL 32904</p>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event5.jpg"
											style="background: url(&quot;img/events/event5.jpg&quot;) center center / cover no-repeat;">
											<span class="event__out">Sold out</span>
											<span class="event__date">March 30, 2021</span>
											<span class="event__time">10:00 pm</span>
											<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
											<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event6.jpg"
											style="background: url(&quot;img/events/event6.jpg&quot;) center center / cover no-repeat;">
											<a href="#modal-ticket" class="event__ticket open-modal"><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<path
														d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z">
													</path>
												</svg> Buy ticket</a>
											<span class="event__date">March 31, 2021</span>
											<span class="event__time">6:30 pm</span>
											<h3 class="event__title"><a href="event.html">Rocky Pub</a></h3>
											<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
										</div>
									</div>
									<div class="owl-item active" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event1.jpg"
											style="background: url(&quot;img/events/event1.jpg&quot;) center center / cover no-repeat;">
											<a href="#modal-ticket" class="event__ticket open-modal"><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<path
														d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z">
													</path>
												</svg> Buy ticket</a>
											<span class="event__date">March 14, 2021</span>
											<span class="event__time">8:00 pm</span>
											<h3 class="event__title"><a href="event.html">Sorry Babushka</a></h3>
											<p class="event__address">1 East Plumb Branch St.Saint Petersburg, FL 33702
											</p>
										</div>
									</div>
									<div class="owl-item" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event2.jpg"
											style="background: url(&quot;img/events/event2.jpg&quot;) center center / cover no-repeat;">
											<a href="#modal-ticket" class="event__ticket open-modal"><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<path
														d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z">
													</path>
												</svg> Buy ticket</a>
											<span class="event__date">March 16, 2021</span>
											<span class="event__time">7:00 pm</span>
											<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
											<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
										</div>
									</div>
									<div class="owl-item" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event3.jpg"
											style="background: url(&quot;img/events/event3.jpg&quot;) center center / cover no-repeat;">
											<span class="event__out">Sold out</span>
											<span class="event__date">March 23, 2021</span>
											<span class="event__time">9:30 pm</span>
											<h3 class="event__title"><a href="event.html">Rocky Pub</a></h3>
											<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
										</div>
									</div>
									<div class="owl-item" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event4.jpg"
											style="background: url(&quot;img/events/event4.jpg&quot;) center center / cover no-repeat;">
											<a href="#modal-ticket" class="event__ticket open-modal"><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<path
														d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z">
													</path>
												</svg> Buy ticket</a>
											<span class="event__date">March 30, 2021</span>
											<span class="event__time">6:00 pm</span>
											<h3 class="event__title"><a href="event.html">Big Club</a></h3>
											<p class="event__address">123 6th St. Melbourne, FL 32904</p>
										</div>
									</div>
									<div class="owl-item" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event5.jpg"
											style="background: url(&quot;img/events/event5.jpg&quot;) center center / cover no-repeat;">
											<span class="event__out">Sold out</span>
											<span class="event__date">March 30, 2021</span>
											<span class="event__time">10:00 pm</span>
											<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
											<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
										</div>
									</div>
									<div class="owl-item" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event6.jpg"
											style="background: url(&quot;img/events/event6.jpg&quot;) center center / cover no-repeat;">
											<a href="#modal-ticket" class="event__ticket open-modal"><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<path
														d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z">
													</path>
												</svg> Buy ticket</a>
											<span class="event__date">March 31, 2021</span>
											<span class="event__time">6:30 pm</span>
											<h3 class="event__title"><a href="event.html">Rocky Pub</a></h3>
											<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event1.jpg"
											style="background: url(&quot;img/events/event1.jpg&quot;) center center / cover no-repeat;">
											<a href="#modal-ticket" class="event__ticket open-modal"><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<path
														d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z">
													</path>
												</svg> Buy ticket</a>
											<span class="event__date">March 14, 2021</span>
											<span class="event__time">8:00 pm</span>
											<h3 class="event__title"><a href="event.html">Sorry Babushka</a></h3>
											<p class="event__address">1 East Plumb Branch St.Saint Petersburg, FL 33702
											</p>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event2.jpg"
											style="background: url(&quot;img/events/event2.jpg&quot;) center center / cover no-repeat;">
											<a href="#modal-ticket" class="event__ticket open-modal"><svg
													xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
													<path
														d="M9,10a1,1,0,0,0-1,1v2a1,1,0,0,0,2,0V11A1,1,0,0,0,9,10Zm12,1a1,1,0,0,0,1-1V6a1,1,0,0,0-1-1H3A1,1,0,0,0,2,6v4a1,1,0,0,0,1,1,1,1,0,0,1,0,2,1,1,0,0,0-1,1v4a1,1,0,0,0,1,1H21a1,1,0,0,0,1-1V14a1,1,0,0,0-1-1,1,1,0,0,1,0-2ZM20,9.18a3,3,0,0,0,0,5.64V17H10a1,1,0,0,0-2,0H4V14.82A3,3,0,0,0,4,9.18V7H8a1,1,0,0,0,2,0H20Z">
													</path>
												</svg> Buy ticket</a>
											<span class="event__date">March 16, 2021</span>
											<span class="event__time">7:00 pm</span>
											<h3 class="event__title"><a href="event.html">Big Daddy</a></h3>
											<p class="event__address">71 Pilgrim Avenue Chevy Chase, MD 20815</p>
										</div>
									</div>
									<div class="owl-item cloned" style="width: 344px; margin-right: 20px;">
										<div class="event" data-bg="img/events/event3.jpg"
											style="background: url(&quot;img/events/event3.jpg&quot;) center center / cover no-repeat;">
											<span class="event__out">Sold out</span>
											<span class="event__date">March 23, 2021</span>
											<span class="event__time">9:30 pm</span>
											<h3 class="event__title"><a href="event.html">Rocky Pub</a></h3>
											<p class="event__address">514 S. Magnolia St. Orlando, FL 32806</p>
										</div>
									</div>
								</div>
							</div>
							<div class="owl-nav disabled"><button type="button" role="presentation"
									class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button"
									role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
							<div class="owl-dots"><button role="button"
									class="owl-dot active"><span></span></button><button role="button"
									class="owl-dot"><span></span></button><button role="button"
									class="owl-dot"><span></span></button><button role="button"
									class="owl-dot"><span></span></button><button role="button"
									class="owl-dot"><span></span></button><button role="button"
									class="owl-dot"><span></span></button></div>
						</div>

						<button class="main__nav main__nav--prev" data-nav="#events" type="button"><svg
								xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M17,11H9.41l3.3-3.29a1,1,0,1,0-1.42-1.42l-5,5a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l5,5a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L9.41,13H17a1,1,0,0,0,0-2Z">
								</path>
							</svg></button>
						<button class="main__nav main__nav--next" data-nav="#events" type="button"><svg
								xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path
									d="M17.92,11.62a1,1,0,0,0-.21-.33l-5-5a1,1,0,0,0-1.42,1.42L14.59,11H7a1,1,0,0,0,0,2h7.59l-3.3,3.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0l5-5a1,1,0,0,0,.21-.33A1,1,0,0,0,17.92,11.62Z">
								</path>
							</svg></button>
					</div>
				</div>
			</section>
			<!-- end events -->
		</div>
	</main>
	<?php
	include './Components/footer.php';
	?>
</body>

</html>