"use strict";
$(function () {
	// author badge :)
	$("input[type='password'][data-eye]").each(function (i) {
		var $this = $(this),
			id = "eye-password-" + i,
			el = $("#" + id);

		$this.wrap(
			$("<div/>", {
				style: "position:relative",
				id: id,
			})
		);

		$this.css({
			paddingLeft: 40,
		});
		$this.after(
			$("<div/>", {
				html: "Show",
				class: "btn btn-sm",
				id: "passeye-toggle-" + i,
			}).css({
				position: "absolute",
				left: 10,
				top: $this.outerHeight() / 2 - 12,
				padding: "2px 7px",
				fontSize: 12,
				cursor: "pointer",
				background: "#ad0101",
				color: "#ffff",
			})
		);

		$this.after(
			$("<input/>", {
				type: "hidden",
				id: "passeye-" + i,
			})
		);

		var invalid_feedback = $this.parent().parent().find(".invalid-feedback");

		if (invalid_feedback.length) {
			$this.after(invalid_feedback.clone());
		}

		$this.on("keyup paste", function () {
			$("#passeye-" + i).val($(this).val());
		});
		$("#passeye-toggle-" + i).on("click", function () {
			if ($this.hasClass("show")) {
				$this.attr("type", "password");
				$this.removeClass("show");
				$(this).removeClass("btn-outline-danger");
			} else {
				$this.attr("type", "text");
				$this.val($("#passeye-" + i).val());
				$this.addClass("show");
				$(this).addClass("btn-outline-danger");
			}
		});
	});

	$(".my-login-validation").submit(function () {
		var form = $(this);
		if (form[0].checkValidity() === false) {
			event.preventDefault();
			event.stopPropagation();
		}
		form.addClass("was-validated");
	});
});

/* Start Get Users Locations */
let locationButton = document.getElementById("get-location");
let locationDiv = document.getElementById("location-details");
let longitude = document.getElementById("longitude");
let latitude = document.getElementById("latitude");

locationButton.addEventListener("click", () => {
	//Geolocation APU is used to get geographical position of a user and is available inside the navigator object
	if (navigator.geolocation) {
		//returns position(latitude and longitude) or error
		navigator.geolocation.getCurrentPosition(showLocation, checkError);
	} else {
		//For old browser i.e IE
		locationDiv.innerText = "The browser does not support geolocation";
	}
});

//Error Checks
const checkError = (error) => {
	switch (error.code) {
		case error.PERMISSION_DENIED:
			locationDiv.innerText = "Please allow access to location";
			break;
		case error.POSITION_UNAVAILABLE:
			//usually fired for firefox
			locationDiv.innerText = "Location Information unavailable";
			break;
		case error.TIMEOUT:
			locationDiv.innerText = "The request to get user location timed out";
	}
};

const showLocation = async (position) => {
	//We user the NOminatim API for getting actual addres from latitude and longitude
	let response = await fetch(
		`https://nominatim.openstreetmap.org/reverse?lat=${position.coords.latitude}&lon=${position.coords.longitude}&format=json`
	);
	//store response object
	let data = await response.json();
	locationDiv.innerText = `${data.address.city}, ${data.address.country}`;
	latitude.value=position.coords.latitude;
	longitude.value=position.coords.longitude;
};
/* End Get Users Locations */