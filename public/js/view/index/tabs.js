function openTab(evt, folder, tab) {

	var i, tabcontent, tablinks;
	tabcontent = $(folder).find('.content__inner');
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}

	tablinks = $(folder).find('.tab');
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	document.getElementById(tab).style.display = "block";
	evt.currentTarget.className += " active";
}


//Horizontal scroll for the tabs on mousewheel. If tabs are longer than the content section, there's a scroll bar but it's hidden to retain the design.
if (window.innerWidth > 800) {
	const scrollContainer = document.querySelector("#folder-video > .tabs");
	if (scrollContainer) {
		scrollContainer.addEventListener("wheel", (evt) => {
			evt.preventDefault();
			scrollContainer.scrollLeft += evt.deltaY;
		});
	}

}

if (window.innerWidth > 800) {
	const scrollContainer = document.querySelector("#folder-mapas > .tabs");
	if (scrollContainer) {
		scrollContainer.addEventListener("wheel", (evt) => {
			evt.preventDefault();
			scrollContainer.scrollLeft += evt.deltaY;
		});
	}
}

// Paw Wow
if (window.innerWidth > 800) {
	const scrollContainer = document.querySelector("#folder-apacionado > .tabs");
	if (scrollContainer) {
		scrollContainer.addEventListener("wheel", (evt) => {
			evt.preventDefault();
			scrollContainer.scrollLeft += evt.deltaY;
		});
	}

}