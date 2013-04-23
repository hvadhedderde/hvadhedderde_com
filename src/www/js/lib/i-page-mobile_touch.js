Util.Objects["page"] = new function() {
	this.init = function(page, event) {
		// e = page node in dom

		u.ac(page, ("standalone" in window.navigator) && navigator.standalone ? "standalone" : "");
		page.offset = u.hc(page, "standalone") ? (52 - 20) : 52;

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
			// inject Navigation into Header
			page.nN = page.hN.appendChild(page.nN);
			page.nN.page = page;
		}
		// footer element
		page.fN = u.qs("#footer", page);
		page.fN.page = page;


		// scrollhandler - add dropshadow when page is scrolled
		page._scrollHandler = function(event) {
			var page = u.qs("#page");

//			u.bug(u.listObjectContent(event))
//			u.bug("scroll:" + page.is_scrolling + ":" +u.scrollY() + ":" + event.type);

			if(!page.is_scrolling || event.type != "scroll") {
//				u.bug("p i s:" + u.scrollY());
				if(u.scrollY() >= page.offset) {
//					u.bug("more than 52:" + u.hc(page, "scrolled"))
					if(!u.hc(page, "scrolled")) {
//						u.bug("add scrolled")

						// page.nN.transitioned = function() {
						// 	this.transitioned = null;
						// 	u.a.transition(this, "none");
						// }
						u.a.transition(page.nN, "none");
						u.as(page.nN, "top", "-" + page.offset + "px");
						u.as(page.nN, "position", "fixed");
						u.ac(page, "scrolled")
	//					u.a.setOpacity(page.nN, 1);

	//					u.as(page.nN, "top", -u.scrollY()+"px");
	//					u.a.transition(page.nN, "all 0.3s ease-out");

					}
				}
				else {
					if(u.hc(page, "scrolled")) {
	//					u.bug("remove scrolled")
						u.rc(page, "scrolled");

						u.a.transition(page.nN, "none");

						page.nN.transitioned = function() {
							this.transitioned = null;
							u.a.transition(this, "none");
						}
						u.as(page.nN, "position", "absolute");
	//					u.a.setOpacity(page.nN, 1);
	//					u.as(page.nN, "top", page.nN.offsetHeight + "px");

						u.as(page.nN, "top", (u.scrollY() - page.offset)+"px");
						u.a.transition(page.nN, "all 0.3s ease-in");

						u.as(page.nN, "top", "0");

					}
				}
			}
		}
		// update on page scroll
		u.e.addEvent(window, "scroll", page._scrollHandler);
		// run on initialization
		page._scrollHandler(event);

		// iphone scoll addressbar out of view
		window.scrollTo(0, 0);

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

		page.picked = function() {
			this.is_scrolling = true;
		}
		page.moved = function(event) {
//			u.bug("moved")
			this._scrollHandler(event);
		}
		page.dropped = function() {
			this.is_scrolling = false;
		}
		u.e.scroll(page);


		u.navigate(page);

		page.cN.scrollToTop = function() {
			if(u.scrollY() > page.offset) {
				var new_pos = u.scrollY()*0.9;
				if(new_pos > page.offset) {
					window.scrollTo(0, new_pos);
					this.t_scroll = u.t.setTimer(this, this.scrollToTop, 50);
				}
				else {
					window.scrollTo(0, page.offset);
					this.changeContent();
				}
			}
			else {
				this.changeContent();
			}
		}

		u.t.setTimer(page, page.ready, 50);

	}
}
u.e.addEvent(window, "load", function(event) {u.o.page.init(u.qs("#page"), event);})
