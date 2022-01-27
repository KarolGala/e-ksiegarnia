$(document).ready(function() { //jezeli strona bedzie juz załadowania, wykonaj ten kod ponizej w {}
  
	$("#hideLogin").click(function() { //jeżeli zostanie nacisniety element html z id hide login wykonaj funkcje 
		$("#loginForm").hide();
		$("#registerForm").show();
	});

	$("#hideRegister").click(function() {
		$("#loginForm").show();
		$("#registerForm").hide();
	});
});