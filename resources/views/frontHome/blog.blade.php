@extends($frontTheme)

@section('content')
	<div class="container">
		<div class="blog">
			
		<div class="blog-content">
					<div class="blog-content-left">
						<div class="blog-articals">
					 	@foreach( $blog as $blog)
						<div class="blog-artical">
							<div class="blog-artical-info">
								<div class="blog-artical-info-img">
									<a href="single.html"><img height="700px" src="data:image/jpeg;base64,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{{-- {{ asset('frontTheme/images/7.jpg') }} --}}" title="post-name"></a>
								</div>
								<div class="blog-artical-info-head">
									<h2><a href="single.html">{{ $blog->title }}</a></h2>
									<h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>
									
								</div>
								<div class="blog-artical-info-text">
									<p>{{ $blog->description }}</p>
								</div>
								<div class="artical-links">
		  						 	<ul>
		  						 		<li><small> </small><span>june 14, 2013</span></li>
		  						 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
		  						 		<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
		  						 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
		  						 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						 @endforeach
						<div class="blog-artical">
							
							<div class="blog-artical-info">
								<div class="blog-artical-info-img">
									<a href="single.html"><img src="{{ asset('frontTheme/images/8.jpg') }}" title="post-name"></a>
									
								</div>
								<div class="blog-artical-info-head">
									<h2><a href="single.html">Simply dummy text of the</a></h2>
									<h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>
									
								</div>
								<div class="blog-artical-info-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy has been the industry's standard dummy has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<a href="#">[...]</a></p>
								</div>
								<div class="artical-links">
		  						 	<ul>
		  						 		<li><small> </small><span>june 14, 2013</span></li>
		  						 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
		  						 		<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
		  						 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
		  						 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-artical">
						
							<div class="blog-artical-info">
								<div class="blog-artical-info-img">
									<a href="single.html"><img src="{{ asset('frontTheme/images/9.jpg') }}" title="post-name"></a>
								</div>
								<div class="blog-artical-info-head">
									<h2><a href="single.html">Lorem Ipsum has been the</a></h2>
									<h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>
									
								</div>
								<div class="blog-artical-info-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy has been the industry's standard dummy has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<a href="#">[...]</a></p>
								</div>
								<div class="artical-links">
		  						 	<ul>
		  						 		<li><small> </small><span>june 14, 2013</span></li>
		  						 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
		  						 		<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
		  						 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
		  						 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--start-blog-pagenate-->
							<nav>
										  <ul class="pagination">
											<li>
											  <a href="#" aria-label="Previous">
												<span aria-hidden="true">«</span>
											  </a>
											</li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li>
											  <a href="#" aria-label="Next">
												<span aria-hidden="true">»</span>
											  </a>
											</li>
										  </ul>
										</nav>
				<!--//End-blog-pagenate-->
					</div>
					<div class="blog-content-right">
						<div class="b-search">
							<form>
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
								<input type="submit" value="">
							</form>
						</div>
						<!--start-twitter-weight-->
						<div class="twitter-weights">
							<h3>Tweet Widget</h3>
							<div class="twitter-weight-grid">
								<h4><span> </span>John Doe</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
								<i><a href="#">2 days ago</a></i>
							</div>
							<div class="twitter-weight-grid">
								<h4><span> </span>John Doe</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
								<i><a href="#">2 days ago</a></i>
							</div>
							<a class="twittbtn" href="#">See all Tweets</a>
						</div>
						<!--//End-twitter-weight-->
						<!-- start-tag-weight-->
						<div class="b-tag-weight">
							<h3>Tags Weight</h3>
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">consectetur</a></li>
								<li><a href="#">dolore</a></li>
								<li><a href="#">aliqua</a></li>
								<li><a href="#">sit amet</a></li>
								<li><a href="#">ipsum</a></li>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">consectetur</a></li>
								<li><a href="#">dolore</a></li>
								<li><a href="#">aliqua</a></li>
								<li><a href="#">sit amet</a></li>
								<li><a href="#">ipsum</a></li>
							</ul>
						</div>
						<!---- //End-tag-weight---->
					</div>
					<div class="clearfix"> </div>
				
				</div>
		</div>
		<!-- /Blog -->
@endsection