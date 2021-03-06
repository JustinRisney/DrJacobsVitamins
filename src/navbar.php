<?php 
	$url = $_SERVER['REQUEST_URI'];
	
	function setnavactive($base, $testurl){
		if($base == $testurl || $base == $testurl . "/"){
			echo "active";
		}
	}
?>
<script type="text/javascript">
	function navCollapse(id) {
		let x = document.getElementById(id);
		x.style.transition = 'all .5s'
		x.style.opacity = '.25';
		x.style.height = '5%';
	}
	function navExpand(id) {
		let x = document.getElementById(id);
		x.style.opacity = '.75';
		x.style.maxHeight = '200px';
		x.style.height = '10%';
	}

</script>
<style>
	.dropdown-item{
		font-weight: 300;
	}
	.nav-link{
		font-weight: 300;	
	} 
	nav {
		max-height: 200px;
	}

	</style>
<nav onload="navCollapse('OUR-navbar');" class="navbar navbar-expand-sm navbar-light fixed-top" style="background-color: rgba(84, 150, 84, .75)" id="OUR-navbar" onmouseenter="navExpand('OUR-navbar');" onmouseleave='navCollapse("OUR-navbar");'>
	<!--<a class="navbar-brand" href="/">
		<img src="/images/FCSTAC-Logo.png" height="20px" width="25px" style="filter: grayscale(.0000000000000000000000000000000000000000000000000000000000000000000000000000000001%);"/>
	</a>-->
	<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon">
			
		</span>
	</button>
	-->
	<div class="collapse navbar-collapse" id="nav-content">   
		<ul class="navbar-nav">
			<li class="nav-item ">
				<a class="nav-link" href="/">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/about">About</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="/contact">Contact</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/shop">Shop</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="/testimonials">Testimonials</a>
			</li>
		</ul>

	</div>
	<a class="navbar-brand" href="/cart">
		<img src="/images/shoppingcart.png" height="20px" width="25px" style="filter: grayscale(.0000000000000000000000000000000000000000000000000000000000000000000000000000000001%);"/>
	</a>
</nav>
