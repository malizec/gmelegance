window.onload = SubMenuFunction;

function SubMenuFunction(){

			document.getElementById("nav-link").onmouseover = displayYes;
			document.getElementById("nav-link").onmouseout = displayNo;
						function displayYes(){
							var menu1 = document.getElementById("menu-ul-2");
							menu1.style.display = "block";
						}
						function displayNo(){
							var menu1 = document.getElementById("menu-ul-2");
							menu1.style.display = "none";
						}


			document.getElementById("nav-link-zenke").onmouseover = displayYesZenke;
			document.getElementById("nav-link-zenke").onmouseout = displayNoZenke;
						function displayYesZenke(){
							var menu2 = document.getElementById("menu-ul-2-zenke");
							menu2.style.display = "block";
						}
						function displayNoZenke(){
							var menu2 = document.getElementById("menu-ul-2-zenke");
							menu2.style.display = "none";
						}
						
			document.getElementById("nav-link-stenci").onmouseover = displayYesStenci;
			document.getElementById("nav-link-stenci").onmouseout = displayNoStenci;
						function displayYesStenci(){
							var menu3 = document.getElementById("menu-ul-2-stenci");
							menu3.style.display = "block";
						}
						function displayNoStenci(){
							var menu3 = document.getElementById("menu-ul-2-stenci");
							menu3.style.display = "none";
						}

			document.getElementById("nav-link-muzjaci").onmouseover = displayYesMuzjaci;
			document.getElementById("nav-link-muzjaci").onmouseout = displayNoMuzjaci;
						function displayYesMuzjaci(){
							var menu4 = document.getElementById("menu-ul-2-muzjaci");
							menu4.style.display = "block";
						}
						function displayNoMuzjaci(){
							var menu4 = document.getElementById("menu-ul-2-muzjaci");
							menu4.style.display = "none";
						}
						
//-----------------------This is for header-submenu----------------------------------//

			document.getElementById("header-menu").onmouseover = displayYesHeaderMenu;
			document.getElementById("header-menu").onmouseout = displayNoHeaderMenu;
						function displayYesHeaderMenu(){
							var menu5 = document.getElementById("header-submenu");
							menu5.style.display = "block";
						}
						function displayNoHeaderMenu(){
							var menu5 = document.getElementById("header-submenu");
							menu5.style.display = "none";
						}
		}

//-----------------------------------------------------------------------------//

 