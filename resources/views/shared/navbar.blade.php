<nav class="navbar navbar-expand-lg navbar-dark bg-warning">
	<a class="navbar-brand" href="#">CookBook</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/blog">Blog</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/about">About</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/contact">Contact</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Member
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<!-- Authentication Links -->
					@if (Auth::guest())
						<a class="dropdown-item" href="{{ url('/login') }}">Login</a>
						<a class="dropdown-item" href="{{ url('/register') }}">Register</a>
					@else
						<a class="dropdown-item" href="{{ url('/logout') }}">Logout</a></li>
					@endif
				</div>
			</li>
		</ul>
	</div>
</nav>