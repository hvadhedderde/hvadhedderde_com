u.navigate = function(page) {
	
	
	page.ready = function() {
//		u.bug("page ready")
		u.h.catchEvent(this.cN.navigate, this.cN);

		// page is ready
		u.addClass(this, "ready");

		// in case content loads faster than page, call content ready controller (content ready does not execute until both content and page is ready)
		this.cN.ready();
	}

	// content state controller
	page.cN.ready = function() {
//		u.bug("page ready:" + u.hc(this.page, "ready") + "content ready:" + u.hc(this, "ready"));
		// if all is good and ready to go
		if(u.hc(this.page, "ready") && u.hc(this, "ready")) {
//			u.bug("fade content up");

			u.a.transition(this, "opacity 0.5s ease-in");
			u.a.setOpacity(this, 1);
		}
	}

	page.cN.scrollToTop = function() {
		if(u.scrollY() > 1) {
			window.scrollTo(0, u.scrollY()/8);
			this.t_scroll = u.t.setTimer(this, this.scrollToTop, 100);
		}
		else {
			window.scrollTo(0, 0);
			this.changeContent();
		}
	}

	page.cN.changeContent = function() {
		this.Response = function(response) {
//			u.bug("navigate response:" + this.url)

			// stats
			u.stats.pageView(this.paths[0]);

			// set body class
			u.setClass(document.body, response.body_class);

			// replace content
			this.innerHTML = u.qs("#content", response).innerHTML;

			// set title
			document.title = response.head_title;

			// init content - will callback to ready, when done
			u.init(this);
		}

		// capture transition event and load new content, when fadeout is done
		this.transitioned = function(event) {
			this.paths = new Array();
			this.paths[0] = u.h.getCleanHash(location.hash, 1);


//			u.bug("navigate request:" + this.paths[0]);
			this.transitioned = null;

			// Firefox prefers if I reset transition - otherwise fadeup flickers
			u.a.transition(this, "none");

			// request new content
			u.Request(this, this.paths[0]);
		}


		// if element is already faded out
		if(u.gcs(this, "opacity") == 0) {
//		if(this._opacity == 0) {
//			u.bug("quick transition");
			this.transitioned();
		}
		// start fade out transition
		else {
//			u.bug("fade out")
			u.a.setOpacity(this, 0);
		}
	}

	page.cN.navigate = function() {
//		u.bug("navigate:" + u.h.getCleanHash(location.hash) + "("+ (this.paths ? this.paths[0] : "") + ")")


		// cancel scroll handler
//		window.onscroll = null;

		// execute navigation only if first level changes
		if(!this.paths || this.paths[0] != u.h.getCleanHash(location.hash, 1)) {

//			u.bug("base url:" + u.h.getCleanHash(location.hash));
			
			// content is no longer ready
			u.rc(this, "ready");
			
			this.scrollToTop();

			// handle oad-response when returned after load and fade back in


		}
		else {
//			u.bug("2. level url:" + u.h.getCleanHash(location.hash));

			// forward navigation event to scene
			if(this.scene && this.scene.parentNode && typeof(this.scene.navigate) == "function") {
				this.scene.navigate();
			}

		}

	}


	// set default hash if no hash value is present
	// no furter navigation - initialize content
	if(location.hash.length < 2) {
//		u.bug("set hash + init content")
		location.hash = u.h.getCleanUrl(location.href);
		u.init(page.cN);
	}
	// if different hash and url, load content based on hash
	else if(u.h.getCleanHash(location.hash) != u.h.getCleanUrl(location.href)) {
//		u.bug("init navigate")
		page.cN.navigate();
	}
	// hash and url is aligned - init existing content
	else {
//		u.bug("init content")
		u.init(page.cN);
	}

	
}