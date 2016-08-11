<?php get_header(); ?>
<?php
while(have_posts()): the_post();
?>
	<section class="bg-parallax bg-parallax-3 block-top">
		<div class="container">
			<h1>Blog</h1>
			<ol class="breadcrumb">
				<li><a href="#">Home</a></li>
				<li><a href="#">Blog</a></li>
				<li class="active">The Newest Hair Cuts To Try This Fall!</li>
			</ol>
		</div>
	</section>
	<section class="main main-1 container">
		<div class="row">
			<section class="content col-md-8">
				<article class="fck">

					<header>
						<p class="fck-img">
							<img src="<?= get_the_post_thumbnail_url() ?>">
						</p>
						<h1><?= get_the_title() ?></h1>
						<ol class="breadcrumb breadcrumb-style">
							<li>By <?= get_the_author() ?> </li>
							<li><?= get_the_date() ?></li>
							<li>03 Comments</li>
							<li>52 Views</li>
						</ol>
						<ul class="list-social-style">
							<li><a href="#" title=""><i class="fa fa-facebook"></i> <span>100</span></a></li>
							<li><a href="#" title=""><i class="fa fa-twitter"></i> <span>245</span></a></li>
							<li><a href="#" title=""><i class="fa fa-google-plus"></i> <span>300</span></a></li>
							<li><a href="#" title=""><i class="fa fa-envelope"></i></a></li>
						</ul>
						<section>
							<?= get_the_content() ?>
						</section>
						<footer>
							<ul class="list-tag">
								<li><a href="#" title="Uncategorized">Uncategorized</a></li>
								<li><a href="#" title="putamus ">putamus</a></li>
								<li><a href="#" title="claram">claram</a></li>
								<li><a href="#" title="lectores ">lectores</a></li>
								<li><a href="#" title="Claritas">Claritas</a></li>
								<li><a href="#" title="nostrud ">nostrud</a></li>
							</ul>
						</footer>
				</article>
				<div class="block-style">
					<h2>Related Articles</h2>
					<div class="row">
						<div class="col-sm-4">
							<article class="blog-box sr-contact">
								<a href="#" title=""><img src="images/photo/photo-1.jpg"></a>
								<h3><a href="#" title="">The First Simple post</a></h3>
								<p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in  esse cillum dolorem ipsum ...</p>
							</article>
						</div>
						<div class="col-sm-4">
							<article class="blog-box sr-contact">
								<a href="#" title=""><img src="images/photo/photo-2.jpg"></a>
								<h3><a href="#" title="">Consectetur Adipiscing Elit</a></h3>
								<p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in  esse cillum dolorem ipsum ...</p>
							</article>
						</div>
						<div class="col-sm-4">
							<article class="blog-box sr-contact">
								<a href="#" title=""><img src="images/photo/photo-3.jpg"></a>
								<h3><a href="#" title="">Diam Nonum My Euismod</a></h3>
								<p>Nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in  esse cillum dolorem ipsum ...</p>
							</article>
						</div>
					</div>
				</div>
				<div class="block-style">
					<h2>04 Comments</h2>
					<div class="comment-outer">
						<div class="comment">
							<a class="avatar"><img src="images/per-1.png"></a>
							<div class="ctn-comment">
								<a class="author">Charlotte Colon</a>
								<div class="text">
									Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi corporis suscipit consequatur?
								</div>
								<a class="aws" href="#" title=""><i class="fa fa-reply" aria-hidden="true"></i> 2 answers</a>
								<div class="actions">
									<span class="time">15 min ago </span>
									<a class="reply">Reply</a>
								</div>
							</div>
						</div>
						<div class="comment">
							<a class="avatar"><img src="images/per-1.png"></a>
							<div class="ctn-comment">
								<a class="author">Charlotte Colon</a>
								<div class="text">
									Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi corporis suscipit consequatur?
								</div>
								<a class="aws" href="#" title=""><i class="fa fa-reply" aria-hidden="true"></i> 2 answers</a>
								<div class="actions">
									<span class="time">15 min ago </span>
									<a class="reply">Reply</a>
								</div>
							</div>
							<div class="comments">
								<div class="comment">
									<a class="avatar"><img src="images/per-1.png"></a>
									<div class="ctn-comment">
										<a class="author">Charlotte Colon</a>
										<div class="text">
											Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi corporis suscipit consequatur?
										</div>
										<a class="aws" href="#" title=""><i class="fa fa-reply" aria-hidden="true"></i> 2 answers</a>
										<div class="actions">
											<span class="time">15 min ago </span>
											<a class="reply">Reply</a>
										</div>
									</div>
								</div>
							</div>
							<div class="comments">
								<div class="comment">
									<a class="avatar"><img src="images/per-1.png"></a>
									<div class="ctn-comment">
										<a class="author">Charlotte Colon</a>
										<div class="text">
											Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi corporis suscipit consequatur?
										</div>
										<a class="aws" href="#" title=""><i class="fa fa-reply" aria-hidden="true"></i> 2 answers</a>
										<div class="actions">
											<span class="time">15 min ago </span>
											<a class="reply">Reply</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="comment">
							<a class="avatar"><img src="images/per-1.png"></a>
							<div class="ctn-comment">
								<a class="author">Charlotte Colon</a>
								<div class="text">
									Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi corporis suscipit consequatur?
								</div>
								<a class="aws" href="#" title=""><i class="fa fa-reply" aria-hidden="true"></i> 2 answers</a>
								<div class="actions">
									<span class="time">15 min ago </span>
									<a class="reply">Reply</a>
								</div>
							</div>
						</div>
						<div class="comment">
							<a class="avatar"><img src="images/per-1.png"></a>
							<div class="ctn-comment">
								<a class="author">Charlotte Colon</a>
								<div class="text">
									Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi corporis suscipit consequatur?
								</div>
								<a class="aws" href="#" title=""><i class="fa fa-reply" aria-hidden="true"></i> 2 answers</a>
								<div class="actions">
									<span class="time">15 min ago </span>
									<a class="reply">Reply</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="block-style">
					<h2>Leave a Comments</h2>
					<form class="frm-comment">
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Full Name">
								</div>
								<div class="form-group">
									<input class="form-control" type="email" placeholder="Email Address">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" placeholder="Subject">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<textarea class="form-control" rows="3" placeholder="Write a comment"></textarea>
								</div>
								<button class="btn-style btn-style-1">Post Comment</button>
							</div>
						</div>
					</form>
				</div>
			</section>
			<aside class="sidebar col-md-4">
				<div class="block-bar">
					<form class="search-frm">
						<div class="form-group">
							<input class="form-control" type="text" placeholder="Subject">
						</div>
						<button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
					</form>
				</div>
				<div class="block-bar">
					<h3>Categories</h3>
					<article class="price-box price-box-1">
						<section>
							<ul>
								<li><a href="#" title="">All <span>264</span> </a></li>
								<li><a href="#" title="">Sleek & Shiny <span>24</span> </a></li>
								<li><a href="#" title="">Sleek & Shiny <span>24</span> </a></li>
								<li><a href="#" title="">Sleek & Shiny <span>24</span> </a></li>
								<li><a href="#" title="">Sleek & Shiny <span>24</span> </a></li>
								<li><a href="#" title="">Sleek & Shiny <span>24</span> </a></li>
								<li><a href="#" title="">Sleek & Shiny <span>24</span> </a></li>
								<li><a href="#" title="">Sleek & Shiny <span>24</span> </a></li>
							</ul>
						</section>
					</article>
				</div>

				<div class="block-bar">
					<h3>Recent Posts</h3>
					<article class="art-post">
						<a href="#" title=""> <img src="images/per-1.png" alt=""></a>
						<div class="ctn-post">
							<h4><a href="#" title="">Quis Autem Vel Eum Ture Quis Occae Feugiat</a></h4>
							<span class="date">June 28, 2016</span>
						</div>
					</article>
					<article class="art-post">
						<a href="#" title=""> <img src="images/per-1.png" alt=""></a>
						<div class="ctn-post">
							<h4><a href="#" title="">Quis Autem Vel Eum Ture Quis Occae Feugiat</a></h4>
							<span class="date">June 28, 2016</span>
						</div>
					</article>
					<article class="art-post">
						<a href="#" title=""> <img src="images/per-1.png" alt=""></a>
						<div class="ctn-post">
							<h4><a href="#" title="">Quis Autem Vel Eum Ture Quis Occae Feugiat</a></h4>
							<span class="date">June 28, 2016</span>
						</div>
					</article>
					<article class="art-post">
						<a href="#" title=""> <img src="images/per-1.png" alt=""></a>
						<div class="ctn-post">
							<h4><a href="#" title="">Quis Autem Vel Eum Ture Quis Occae Feugiat</a></h4>
							<span class="date">June 28, 2016</span>
						</div>
					</article>
					<article class="art-post">
						<a href="#" title=""> <img src="images/per-1.png" alt=""></a>
						<div class="ctn-post">
							<h4><a href="#" title="">Quis Autem Vel Eum Ture Quis Occae Feugiat</a></h4>
							<span class="date">June 28, 2016</span>
						</div>
					</article>
				</div>

				<div class="block-bar">
					<h3>Categories</h3>
					<article class="price-box price-box-1">
						<section>
							<ul>
								<li><a href="#" title="">July, 2016 <span>26</span> </a></li>
								<li><a href="#" title="">July, 2016 <span>26</span> </a></li>
								<li><a href="#" title="">July, 2016 <span>26</span> </a></li>
								<li><a href="#" title="">July, 2016 <span>26</span> </a></li>
								<li><a href="#" title="">July, 2016 <span>26</span> </a></li>

							</ul>
						</section>
					</article>
				</div>

				<div class="block-bar">
					<h3>Instagram</h3>
					<ul class="list-flickr row">
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
						<li class="col-xs-4"><a href="#" title=""><img src="images/per-1.png"></a></li>
					</ul>
				</div>


			</aside>
		</div>
	</section>

	<?php
endwhile;
?>
<?php get_footer(); ?>
