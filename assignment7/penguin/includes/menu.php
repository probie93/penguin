<nav id ="menu_holder">
	<ul id = "menu">
		<li id = "menu_home" class = "menu_item <?if($page == 'home'){print('is-active');}?>"><a class = "menu_link" href = "">Home</a></li>
		<li id = "menu_services" class = "menu_item <?if($page == 'services'){print('is-active');}?>"><a class = "menu_link" href = "">Services</a></li>
		<li id = "menu_contact" class = "menu_item <?if($page == 'contact'){print('is-active');}?>"><a class = "menu_link" href = "">Contact Us</a></li>
		<li id = "menu_about" class = "menu_item <?if($page == 'about'){print('is-active');}?>"><a class = "menu_link" href = "">About Us</a></li>
		<li id = "menu_testimonials" class = "menu_item <?if($page == 'testimonials'){print('is-active');}?>"><a class = "menu_link" href = "">Testimonials</a></li>
		<li id = "menu_estimate" class = "menu_item <?if($page == 'estimate'){print('is-active');}?>"><a class = "menu_link" href = "">Get an Estimate</a></li>
	</ul>
</nav>