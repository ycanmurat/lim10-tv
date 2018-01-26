function againCounting() {
	jQuery(function(t) {
		t(".count-number").data("countToOptions", {
			formatter: function(e, a) {
				return e.toFixed(a.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, "")
			}
		}), t(".timer").each(function(e) {
			var a = t(this);
			e = t.extend({}, e || {}, a.data("countToOptions") || {}), a.countTo(e)
		})
	})
}

function labnolThumb(e) {
	return '<img src="https://i.ytimg.com/vi/ID/hqdefault.jpg">'.replace("ID", e) + '<div class="play"></div>'
}

function labnolIframe() {
	var e = document.createElement("iframe");
	e.setAttribute("src", "https://www.youtube.com/embed/ID?autoplay=1".replace("ID", this.dataset.id)), e.setAttribute("frameborder", "0"), e.setAttribute("allowfullscreen", "1"), this.parentNode.replaceChild(e, this)
}
$(document).ready(function() {
	-1 < window.location.href.indexOf("about") ? ($("header a.active").removeClass("active"), $('header a[href="about.php"]').addClass("active"), $(".idc").remove(), $("header a.active").prepend('<div class="idc"></div>')) : -1 < window.location.href.indexOf("diziler") ? ($("header a.active").removeClass("active"), $('header a[href="diziler.php"]').addClass("active"), $(".idc").remove(), $("header a.active").prepend('<div class="idc"></div>')) : -1 < window.location.href.indexOf("detail") ? ($("header a.active").removeClass("active"), $('header a[href="diziler.php"]').addClass("active"), $(".idc").remove(), $("header a.active").prepend('<div class="idc"></div>')) : -1 < window.location.href.indexOf("filmler") ? ($("header a.active").removeClass("active"), $('header a[href="filmler.php"]').addClass("active"), $(".idc").remove(), $("header a.active").prepend('<div class="idc"></div>')) : -1 < window.location.href.indexOf("programlar") ? ($("header a.active").removeClass("active"), $('header a[href="programlar.php"]').addClass("active"), $(".idc").remove(), $("header a.active").prepend('<div class="idc"></div>')) : -1 < window.location.href.indexOf("press") ? ($("header a.active").removeClass("active"), $('header a[href="press.php"]').addClass("active"), $(".idc").remove(), $("header a.active").prepend('<div class="idc"></div>')) : -1 < window.location.href.indexOf("contact") && ($("header a.active").removeClass("active"), $('header a[href="contact.php"]').addClass("active"), $(".idc").remove(), $("header a.active").prepend('<div class="idc"></div>')), $(window).on("load resize", function() {
		var t = $("div.nav-area ul.nav > li.menu-link > a.active").offset().left;
		$("div.nav-area ul.nav > li.menu-link").hover(function() {
			var e = $(this).offset().left - t,
			a = $(this).outerWidth();
			$(".idc").css({
				left: e,
				width: a
			})
		}, function() {
			var e = $("div.nav-area ul.nav").width();
			$(".idc").css({
				left: "0",
				width: e
			})
		})
	}), $("ul.nav li.mega-menu").hover(function() {
		$(this).addClass("active")
	}, function() {
		$(this).removeClass("active")
	}), $(".hamburger").click(function() {
		$("ul.nav").toggleClass("show")
	}), $(".lang-select").click(function() {
		$(this).toggleClass("show")
	}), $(".owl-newvideos").owlCarousel({
		navText: ['<img src="images/left-arrow.svg">', '<img src="images/right-arrow.svg">'],
		loop: !0,
		margin: 20,
		smartSpeed: 600,
		video: !0,
		nav: !0,
		responsive: {
			0: {
				stagePadding: 20,
				items: 1
			},
			1e3: {
				stagePadding: 70,
				items: 2
			},
			1300: {
				stagePadding: 120,
				items: 3
			}
		}
	}), $(".owl-news").owlCarousel({
		autoplay: !1,
		autoplayTimeout: 4e3,
		autoplayHoverPause: !0,
		smartSpeed: 700,
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		navText: ['<img src="images/left-arrow.svg">', '<img src="images/right-arrow.svg">'],
		loop: !0,
		margin: 10,
		nav: !1,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1e3: {
				items: 1
			}
		}
	}), $(".owl-slider").owlCarousel({
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: false,
		navText: ['<img src="images/left-arrow.svg">', '<img src="images/right-arrow.svg">'],
		loop: !0,
		margin: 0,
		nav: !0,
		animateOut: "fadeOut",
		animateIn: "fadeIn",
		mouseDrag: !1,
		touchDrag: !1,
		pullDrag: !1,
		responsive: {
			0: {
				items: 1
			},
			600: {
				items: 1
			},
			1e3: {
				items: 1
			}
		}
	}).on("changed.owl.carousel", function() {
		againCounting()
	}), $(window).scroll(function() {
		80 <= $(window).scrollTop() ? $("body").addClass("is-onpage") : $("body").removeClass("is-onpage")
	})
}),
function(l) {
	l.fn.countTo = function(c) {
		return c = c || {}, l(this).each(function() {
			var t = l.extend({}, l.fn.countTo.defaults, {
				from: l(this).data("from"),
				to: l(this).data("to"),
				speed: l(this).data("speed"),
				refreshInterval: l(this).data("refresh-interval"),
				decimals: l(this).data("decimals")
			}, c),
			e = Math.ceil(t.speed / t.refreshInterval),
			a = (t.to - t.from) / e,
			i = this,
			n = l(this),
			o = 0,
			r = t.from,
			d = n.data("countTo") || {};

			function s(e) {
				var a = t.formatter.call(i, e, t);
				n.html(a)
			}
			n.data("countTo", d), d.interval && clearInterval(d.interval), d.interval = setInterval(function() {
				o++, s(r += a), "function" == typeof t.onUpdate && t.onUpdate.call(i, r);
				e <= o && (n.removeData("countTo"), clearInterval(d.interval), r = t.to, "function" == typeof t.onComplete && t.onComplete.call(i, r))
			}, t.refreshInterval), s(r)
		})
	}, l.fn.countTo.defaults = {
		from: 0,
		to: 0,
		speed: 1e3,
		refreshInterval: 10,
		decimals: 0,
		formatter: function(e, a) {
			return e.toFixed(a.decimals)
		},
		onUpdate: null,
		onComplete: null
	}
}(jQuery), jQuery(function(t) {
	t(".count-number").data("countToOptions", {
		formatter: function(e, a) {
			return e.toFixed(a.decimals).replace(/\B(?=(?:\d{3})+(?!\d))/g, "")
		}
	}), t(".timer").each(function(e) {
		var a = t(this);
		e = t.extend({}, e || {}, a.data("countToOptions") || {}), a.countTo(e)
	})
}), document.addEventListener("DOMContentLoaded", function() {
	var e, a, t = document.getElementsByClassName("youtube-player");
	for (a = 0; a < t.length; a++)(e = document.createElement("div")).setAttribute("data-id", t[a].dataset.id), e.innerHTML = labnolThumb(t[a].dataset.id), e.onclick = labnolIframe, t[a].appendChild(e)
});


$( window ).resize(function() {
	if(screen.width < 768){
		$('.owl-slider .desktop-image').hide();
		$('.owl-slider .mobile-image').show();
	}else{
		$('.owl-slider .desktop-image').show();
		$('.owl-slider .mobile-image').hide();
	}
});

$('.social-timeline a.nav-link').click(function() {
	p_scT = $(window).scrollTop();
	$(window).scrollTop(p_scT + 2);
	$(window).scrollTop(p_scT- 2);
});


