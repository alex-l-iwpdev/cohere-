<?php
/**
 * Index theme file template.
 *
 * @package iwpdev/cohere
 */

get_header();

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();

		the_content();
	}
}
?>

	<section class="description brown">
		<div class="container">
			<div class="row">
				<div class="col">
					<hr class="sline">
					<h2>Every site has a story.<br>We find its best chapter. </h2>
					<p>Cohere projects is founded on a simple belief: development should create value for everyone -
						residents, investors, and the neighbourhoods they call home.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<h5>Over 20 years, we’ve brought this philosophy to sought-after locations across South-East
						Queensland
						and beyond. We embody strategic masterplanning and design-led development. </h5>
					<h5>We see the neighbourhood before it exists</h5><a class="readmore" href="#">READ MORE</a>
				</div>
				<div class="col-lg-6"><img src="images/img.png" alt=""></div>
			</div>
			<div class="row">
				<div class="col">
					<hr class="sline">
				</div>
			</div>
		</div>
	</section>
	<section class="project-section brown-light">
		<div class="container">
			<div class="row">
				<div class="col">
					<hr class="sline">
					<h5>LATEST PROJECTS</h5>
					<h3>Each project begins with a question: What does this place want to be?</h3>
					<div class="project-items grid">
						<div class="project-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">COMING SOON</p>
							</div>
							<div class="project-info">
								<h4>WOODVALE VILLAGE</h4>
								<h6>150 Lots, Forest Lake</h6>
							</div>
						</div>
						<div class="project-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-2.png" alt="">
								<p class="tag">COMING SOON</p>
							</div>
							<div class="project-info">
								<h4>GREENTREE CRESENT</h4>
								<h6>119 Lots, Forest Lake</h6>
							</div>
						</div>
						<div class="project-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-3.png" alt="">
								<p class="tag">COMING SOON</p>
							</div>
							<div class="project-info">
								<h4>Kiome Residences</h4>
								<h6>7 luxury apartments, Highgate Hill</h6>
								<p>(Project delivered by our team before before Cohere, defining the experience we bring
									today)</p>
							</div>
						</div>
						<div class="project-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-4.png" alt="">
								<p class="tag">COMING SOON</p>
							</div>
							<div class="project-info">
								<h4>Emmeline on Elizabeth</h4>
								<h6>7 apartments, Paddington</h6>
								<p>(Project delivered by our team before before Cohere, defining the experience we bring
									today)</p>
							</div>
						</div>
					</div>
					<hr class="sline">
				</div>
			</div>
		</div>
	</section>
	<section class="blue about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<hr class="sline">
					<h3>Most developers sell units. <br>We create chapters in the story of a place.</h3>
					<p>With over two decades in property development, Claire founded Cohere Projects to challenge the
						industry's short-term thinking. Her approach is strategic, design-led, and deeply rooted in
						creating
						community value that lasts beyond the final inspection.</p>
					<p>Where others see land, we see potential for connection, for community, for buildings that respect
						their context while elevating it. The best developments don't announce themselves. They
						belong.</p>
					<a class="about-cohere" href="#">ABOUT COHERE </a>
					<hr class="sline">
				</div>
				<div class="col-lg-5"><img src="images/about.png" alt=""></div>
			</div>
		</div>
	</section>
	<section class="news-section">
		<div class="container">
			<div class="row">
				<div class="col">
					<hr class="sline">
					<h5>UPDATES, NEWS & INSIGHTS</h5>
					<div class="news-items">
						<div class="news-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">DEVELOPMENT</p>
							</div>
							<div class="news-info">
								<p class="date">01/01/01</p>
								<h5>Woodvale Village | December 2025 Construction Update.</h5>
							</div>
						</div>
						<div class="news-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">INSIGHTS</p>
							</div>
							<div class="news-info">
								<p class="date">01/01/01</p>
								<h5>Woodvale Village | December 2025 Construction Update.</h5>
							</div>
						</div>
						<div class="news-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">NEWS</p>
							</div>
							<div class="news-info">
								<p class="date">01/01/01</p>
								<h5>Woodvale Village | December 2025 Construction Update.</h5>
							</div>
						</div>
						<div class="news-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">DEVELOPMENT</p>
							</div>
							<div class="news-info">
								<p class="date">01/01/01</p>
								<h5>Woodvale Village | December 2025 Construction Update.</h5>
							</div>
						</div>
						<div class="news-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">DEVELOPMENT</p>
							</div>
							<div class="news-info">
								<p class="date">01/01/01</p>
								<h5>Woodvale Village | December 2025 Construction Update.</h5>
							</div>
						</div>
						<div class="news-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">INSIGHTS</p>
							</div>
							<div class="news-info">
								<p class="date">01/01/01</p>
								<h5>Woodvale Village | December 2025 Construction Update.</h5>
							</div>
						</div>
						<div class="news-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">NEWS</p>
							</div>
							<div class="news-info">
								<p class="date">01/01/01</p>
								<h5>Woodvale Village | December 2025 Construction Update.</h5>
							</div>
						</div>
						<div class="news-item"><a class="link" href="#"></a>
							<div class="img"><img src="images/project-1.png" alt="">
								<p class="tag">DEVELOPMENT</p>
							</div>
							<div class="news-info">
								<p class="date">01/01/01</p>
								<h5>Woodvale Village | December 2025 Construction Update.</h5>
							</div>
						</div>
					</div>
					<hr class="sline">
				</div>
			</div>
		</div>
	</section>
<?php
get_footer();
