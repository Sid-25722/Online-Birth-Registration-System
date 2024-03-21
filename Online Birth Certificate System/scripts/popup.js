let popup = document.querySelector("#popup");


function openPopup(){
		popup.classList.add("open-popup");
        document.getElementById('contact_us_cont').style.display = 'none';
        document.getElementById('footer').style.display = 'none';
}
function closePopup(){
	popup.classList.remove("open-popup");
}

