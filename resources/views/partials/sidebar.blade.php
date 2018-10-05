
<!-- Sidebar -->
<div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="#">
                    CMS
                </a>
            </li>
            <li>
				<a href="/dashboard" class="nav-link {{Route::currentRouteName() === 'dashboard' ? 'active' : null }}">
					Dashboard
				</a>
            </li>
            <li>
				<a href="/categories" class="nav-link {{Route::currentRouteName() === 'categories' ? 'active' : null }}">
					Categories
				</a>
            </li>
            <li>
				<a href="/posts" class="nav-link {{Route::currentRouteName() === 'posts' ? 'active' : null }}">
					Posts
				</a>
            </li>
            <li>
				<a href="/voices" class="nav-link {{Route::currentRouteName() === 'voices' ? 'active' : null }}">
					Voices
				</a>
            </li>
            <li>
				<a href="/contact" class="nav-link {{Route::currentRouteName() === 'contact' ? 'active' : null }}">
					Contact
				</a>
            </li>
        </ul>
</div>
<!-- /#sidebar-wrapper -->