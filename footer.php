<footer id="footer"></footer>
</div><!--Wrapper-->
<?php wp_footer(); ?>

<script>
	$(window).load(function(){
		$("#home").transition({
			opacity:1,
		});
		$("#home--loading").fadeOut();
	});
</script>

<!-- RBMH WRAPPER START -->
<script type="text/javascript">

	var edWrapperNameSpace = {};

	edWrapperNameSpace.aGTM = [
		"GTM-LVJ5", 	// hq
		"GTM-7W7M", 	// hq
		"GTM-HPZK", 	// hq
		"GTM-PJQ9GM"	// property
	];		
	
	var edWrapper = [];

</script>

<script type="text/javascript">

	edWrapperNameSpace.sVers = -1; 
	edWrapperNameSpace.aInitialInnerWrapper = [["downloads.redbull.com/webtrekk/innereWrapper/gtm/innerWrapper_gtm.js",false]];
	edWrapperNameSpace.sWrapperSrc = ["downloads.redbull.com/webtrekk/edAnalyticsWrapper.js","downloads.redbull.com/webtrekk/confWrapper.js"];

	(function (sVarName) {
		window.edWrapperNameSpace.sEdWrapperObjectName = sVarName; window[sVarName] = window[sVarName] || [];
		var script = document.createElement('script'); script.type = 'text/javascript'; script.asyn = false; 
		script.src = ('https:' == document.location.protocol ? 'https://' : 'http://')+edWrapperNameSpace.sWrapperSrc[0] + "?v=" + edWrapperNameSpace.sVers;
		var script2 = document.getElementsByTagName('script')[0]; script2.parentNode.insertBefore(script, script2);
	})("edWrapper");

</script>
<!-- RBMH WRAPPER END -->

<script type="text/javascript">
		
	edWrapper.push( [ 'trackPageView' , false , {1:'IntMS' , 2:'IntMS - int' , 3:'IntMS - int - redbullsignatureseries.com'} , true ] );

	edWrapper.push( [ 'trackPageVar' , 'Language' , 'en'] );
	edWrapper.push( [ 'trackPageVar' , 'Domain incl. Subdomain' , window.location.hostname] );
	edWrapper.push( [ 'trackPageVar' , 'Type' , 'IntMS'] );

	edWrapper.push(['submit']);		
	
</script>

</body>
</html>