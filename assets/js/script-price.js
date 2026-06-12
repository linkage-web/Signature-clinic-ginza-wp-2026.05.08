"use strict";

{

	if (window.matchMedia( '(min-width: 701px)' ).matches) {
		const targetBinds = document.querySelectorAll(".is-bind");

		targetBinds.forEach((target) => {
			target.innerHTML = "";
		});
	}
}
