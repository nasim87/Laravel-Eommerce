<div id="navigation">
		<!-- container -->
		<div class="container">
			<div id="responsive-nav">
				<!-- category nav -->
				<div class="category-nav show-on-click">
					<span class="category-header">Categories <i class="fa fa-list"></i></span>
					<ul class="category-list">
						@if($categories)
                        @foreach ($categories as $category ) 
						<li><a href="">{{$category->name}}</a></li>
						@endforeach
						@endif
						
						<li><a href="#">View All</a></li>
					</ul>
				</div>
				<!-- /category nav -->

				<!-- menu nav -->
				<div class="menu-nav">
					<span class="menu-header">Menu <i class="fa fa-bars"></i></span>
					<ul class="menu-list">
						@if($categories)
						@foreach ($categories as $category)  
						<li><a href="#">{{$category->name}}</a></li>
						@endforeach
						@endif
					</ul>
				</div>
				<!-- menu nav -->
			</div>
		</div>
		<!-- /container -->
	</div>