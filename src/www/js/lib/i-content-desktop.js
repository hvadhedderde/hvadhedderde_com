Util.Objects["scene"] = new function() {
	this.init = function(scene) {

//		u.bug("scene init");

		scene.cN = u.qs("#content");

		// list items ready - enable drag
		scene.ready = function() {
			u.ac(this.cN, "ready");
			this.cN.ready();
		}

		// do what ever is needed 

		// use HASH for local links 
		var links = u.qsa("a", scene);
		var i, link;
		for(i = 0; link = links[i]; i++) {
			if(link.href.match(document.domain) && !u.hc(link, "hardlink")) {
				u.link(link);
				link.clicked = function(event) {
					location.hash = u.h.cleanHash(this.url);
				}
			}
		}



		// call content ready class
		scene.ready();
	}
}
