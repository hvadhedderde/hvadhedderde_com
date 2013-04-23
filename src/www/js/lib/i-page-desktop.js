Util.Objects["page"] = new function() {
	this.init = function(page) {
		// e = page node in dom

		if(u.hc(page, "i:page")) {

//			u.bug("page init")

			u.rc(page, "i:page");

			

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
				u.a.setOpacity(page.nN, 0);
				page.nN = page.hN.appendChild(page.nN);
			
				u.as(page.nN, "display", "block");
				u.a.transition(page.nN, "all 0.5s ease-in");
				u.a.setOpacity(page.nN, 1);

				page.nN.page = page;
			}
			// footer element
			page.fN = u.qs("#footer", page);
			page.fN.page = page;



			// NAVIGATION
			// set navigation links
			var navNodes = u.qsa("li", page.nN);
			for(i = 0; navNode = navNodes[i]; i++) {
				u.a.transition(u.qs("a", navNode), "all 0.5s ease-in");
				u.link(navNode);
				navNode.clicked = function(event) {
					location.hash = u.h.cleanHash(this.url);
				}
			}

			u.navigate(page);

			u.t.setTimer(page, page.ready, 50);

		}

	}
}

u.e.addEvent(window, "load", function(event) {u.o.page.init(u.qs("#page"), event);})
