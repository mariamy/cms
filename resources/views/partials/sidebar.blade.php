<div class="col-2 p-0 sidebar">
	<div class="logo text-center p-3">
		CMS
	</div>
	<nav class="navbar navbar-dark bg-dark">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a href="/dashboard" class="nav-link {{Route::currentRouteName() === 'dashboard' ? 'active' : null }}">
				Dashboard
			</a>
		</li>
		<li class="nav-item">
			<a href="/categories" class="nav-link {{Route::currentRouteName() === 'categories' ? 'active' : null }}">
				Categories
			</a>
		</li>
		<li class="nav-item">
			<a href="/posts" class="nav-link {{Route::currentRouteName() === 'posts' ? 'active' : null }}">
				Posts
			</a>
		</li>
		<li class="nav-item">
			<a href="/media" class="nav-link {{Route::currentRouteName() === 'media' ? 'active' : null }}">
				Media
			</a>
		</li>
		<li class="nav-item">
			<a href="/contact" class="nav-link {{Route::currentRouteName() === 'contact' ? 'active' : null }}">
				Contact
			</a>
		</li>
	</ul>
	</nav>
</div>