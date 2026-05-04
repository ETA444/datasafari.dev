<!DOCTYPE html>
<html lang="en">
<head>
	<script type="text/javascript">
			</script>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title><?php echo htmlspecialchars((isset($seoTitle) && $seoTitle !== "") ? $seoTitle : "Custom 404 page"); ?></title>
	<base href="{{base_url}}" />
	<?php echo isset($sitemapUrls) ? (generateCanonicalUrl($sitemapUrls)."\n") : ""; ?>	
	
						<meta name="viewport" content="width=device-width, initial-scale=1" />
							<meta name="robots" content="noindex" />
		
	<!-- Facebook Open Graph -->
						<!-- Facebook Open Graph end -->

		<meta name="generator" content="Website Builder" />
			<script src="js/common-bundle.js?ts=20260504164721" type="text/javascript"></script>
	<script src="js/a188dd9cfa970054082e97d0725cb93a-bundle.js?ts=20260504164721" type="text/javascript"></script>
	<link href="css/common-bundle.css?ts=20260504164721" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Exo+2:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,latin,latin-ext,vietnamese" rel="stylesheet" type="text/css" />
	<link href="css/a188dd9cfa970054082e97d0725cb93a-bundle.css?ts=20260504164721" rel="stylesheet" type="text/css" id="wb-page-stylesheet" />
	<ga-code/><meta charset="UTF-8">

<!-- Primary Meta Tags -->
<title>DataSafari Official Website</title>
<meta name="description" content="DataSafari simplifies complex data science tasks into straightforward, powerful one-liners.">
<meta name="keywords" content="DataSafari, Python data analysis, machine learning, data preprocessing, data transformation, statistical analysis, hypothesis testing, data encoding, data cleaning, model selection, model tuning, predictive modeling, statistical inference, DataFrame manipulation, data visualization, exploratory data analysis, data science, advanced data processing, documentation, user guide">
<meta name="author" content="George Dreemer">
<meta name="robots" content="index, follow">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://www.datasafari.dev/">
<meta property="og:title" content="DataSafari Official Website">
<meta property="og:description" content="DataSafari simplifies complex data science tasks into straightforward, powerful one-liners.">
<meta property="og:image" content="https://www.datasafari.dev/docs/_static/thumbs/ds-branding-thumb-main-web.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://www.datasafari.dev/">
<meta property="twitter:title" content="DataSafari Official Website">
<meta property="twitter:description" content="DataSafari simplifies complex data science tasks into straightforward, powerful one-liners.">
<meta property="twitter:image" content="https://www.datasafari.dev/docs/_static/thumbs/ds-branding-thumb-main-web.png"><link rel="shortcut icon" href="gallery/favicons/favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	window.useTrailingSlashes = true;
	window.disableRightClick = false;
	window.currLang = 'en';
</script>
		
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<![endif]-->

		<script type="text/javascript">
		$(function () {
<?php $wb_form_send_success = popSessionOrGlobalVar("wb_form_send_success"); ?>
<?php if (($wb_form_send_state = popSessionOrGlobalVar("wb_form_send_state"))) { ?>
	<?php if (($wb_form_popup_mode = popSessionOrGlobalVar("wb_form_popup_mode")) && (isset($wbPopupMode) && $wbPopupMode)) { ?>
		if (window !== window.parent && window.parent.postMessage) {
			var data = {
				event: "wb_contact_form_sent",
				data: {
					state: "<?php echo str_replace('"', '\"', $wb_form_send_state); ?>",
					type: "<?php echo $wb_form_send_success ? "success" : "danger"; ?>"
				}
			};
			window.parent.postMessage(data, "<?php echo str_replace('"', '\"', popSessionOrGlobalVar("wb_target_origin")); ?>");
		}
	<?php $wb_form_send_success = false; $wb_form_send_state = null; $wb_form_popup_mode = false; ?>
	<?php } else { ?>
		wb_show_alert("<?php echo str_replace(array('"', "\r", "\n"), array('\"', "", "<br/>"), $wb_form_send_state); ?>", "<?php echo $wb_form_send_success ? "success" : "danger"; ?>");
	<?php } ?>
<?php } ?>
});    </script>
</head>


<body class="site site-lang-en<?php if (isset($wbPopupMode) && $wbPopupMode) echo ' popup-mode'; ?> " <?php ?>><div id="wb_root" class="root wb-layout-vertical"><div class="wb_sbg"></div><div id="wb_header_a188dd9cfa970054082e97d0725cb93a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"></div></div><div id="wb_main_a188dd9cfa970054082e97d0725cb93a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="a189ad2f17c4006d4a8e4815dcdc5025" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-horizontal"><div id="a189ad2f17c6000a9899c4a0ea2b14f4" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2"><span style="color:#000000;">404</span></h2>
</div><div id="a189ad2f17cd00b76952516cd97db117" class="wb_element wb-elm-orient-vertical" data-plugin="Line"><div class="wb-elm-line"></div></div><div id="a189ad2f17d0003fe2c99bc80eeb0c51" class="wb_element wb_text_element" data-plugin="TextArea" style=" line-height: normal;"><h2 class="wb-stl-heading2">Page not found</h2>
</div></div></div></div></div><div id="wb_footer_a188dd9cfa970054082e97d0725cb93a" class="wb_element wb-layout-element" data-plugin="LayoutElement"><div class="wb_content wb-layout-vertical"><div id="wb_footer_c" class="wb_element" data-plugin="WB_Footer" style="text-align: center; width: 100%;"><div class="wb_footer"></div><script type="text/javascript">
			$(function() {
				var footer = $(".wb_footer");
				var html = (footer.html() + "").replace(/^\s+|\s+$/g, "");
				if (!html) {
					footer.parent().remove();
					footer = $("#footer, #footer .wb_cont_inner");
					footer.css({height: ""});
				}
			});
			</script></div></div></div></div>{{hr_out}}</body>
</html>
