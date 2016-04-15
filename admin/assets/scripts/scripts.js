function myFunction(){
	document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

$(document).ready(function(){
	$("#users_btn").click(function(){
		$("#users").show();
		$("#teams").hide();
		$("#tournaments").hide();
		$("#tickets").hide();
	});

	$("#teams_btn").click(function(){
		$("#users").hide();
		$("#teams").show();
		$("#tournaments").hide();
		$("#tickets").hide();
	});

	$("#tournaments_btn").click(function(){
		$("#users").hide();
		$("#teams").hide();
		$("#tournaments").show();
		$("#tickets").hide();
	});

	$("#tickets_btn").click(function(){
		$("#users").hide();
		$("#teams").hide();
		$("#tournaments").hide();
		$("#tickets").show();
	});

});
