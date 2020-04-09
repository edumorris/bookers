function nonePage() {
	alert('This link will be working soon');
}

function buyButton() {
	window.location.assign('shop.php')
}

function openMenu() {
	document.getElementById("side-menu").style.display = "block";
	document.getElementById("menu-btn").style.display = "none";
	document.getElementById("close-btn").style.display = "block";
}

function closeMenu() {
	document.getElementById("side-menu").style.display = "none";
	document.getElementById("menu-btn").style.display = "block";
	document.getElementById("close-btn").style.display = "none";
}

function shopMessage {
	confirm("This site is underconstruction and will be available soon");
}