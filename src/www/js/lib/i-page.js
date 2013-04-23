Util.Objects["page"] = new function() {
	this.init = function(page) {

		// MAIN ELEMENTS
		// header element
		page.hN = u.qs("#header", page);
		page.hN.page = page;
		// content element
		page.cN = u.qs("#content", page);
		page.cN.page = page;
		
		// navigation element
		page.nN = u.qs("#navigation", page);
		if(page.nN) {
			// move Navigation into Header and fade-in
			page.nN = page.hN.appendChild(page.nN);
			
			u.as(page.nN, "display", "block");
			page.nN.page = page;
		}
		// footer element
		page.fN = u.qs("#footer", page);
		page.fN.page = page;


		// page is ready
		u.ac(page, "ready");
	}
}