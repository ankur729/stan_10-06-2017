<script>
$(".close-popup").click(function(){
	$(".otp-popup").fadeOut();
});

$(".login-btn").click(function(){
		$(".otp-popup").fadeIn();
});
	
$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});

	$(".toggle").click(function() {
		$(".nav").slideToggle();
	})

	$(".book-now-popup .style .view-more").click(function(){
		$(".book-now-popup .style .view-more").removeClass('active');
		$(this).addClass("active");
	});	

	$(".openbookpopup").click(function(){
		$('.book-now-popup').fadeIn();
	});	
	$(".book-now-popup .close-popup").click(function(){
		$(".book-now-popup").fadeOut();
	});	
</script>
<script>
	!function() {
	var t;
	if (t = window.driftt = window.drift = window.driftt || [], !t.init) return t.invoked ? void (window.console && console.error && console.error("Drift snippet included twice.")) : (t.invoked = !0,
	t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ],
	t.factory = function(e) {
	return function() {
	var n;
	return n = Array.prototype.slice.call(arguments), n.unshift(e), t.push(n), t;
	};
	}, t.methods.forEach(function(e) {
	t[e] = t.factory(e);
	}), t.load = function(t) {
	var e, n, o, i;
	e = 3e5, i = Math.ceil(new Date() / e) * e, o = document.createElement("script"),
	o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + i + "/" + t + ".js",
	n = document.getElementsByTagName("script")[0], n.parentNode.insertBefore(o, n);
	});
	}();
	drift.SNIPPET_VERSION = '0.3.1';
	drift.load('u4a5wxr8pc8n'); 

</script>
<script src="js/timejquery.min.js"></script>
<script src="js/timepicki.js"></script>
<script>
$('#timepicker1, #timepicker2, #timepicker3, #timepicker4').timepicki();
</script>
<script src="js/timebootstrap.min.js"></script>