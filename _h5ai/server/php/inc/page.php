<?php header("Content-type: text/html;charset=utf-8"); ?><!DOCTYPE html><!--[if lt IE 10]><html class="no-js no-browser" lang="en"><![endif]-->
<!--[if gt IE 9]><!--><html class="no-js browser" lang="en"><!--<![endif]--><head><meta charset="utf-8"><title>index · powered by h5ai 0.27.0 (http://larsjung.de/h5ai/)</title><meta name="description" content="index - powered by h5ai 0.27.0 (http://larsjung.de/h5ai/)"><meta name="viewport" content="width=device-width, initial-scale=1"><link rel="shortcut icon" href="<?php echo APP_HREF; ?>client/images/favicon/favicon-16-32.ico"><link rel="apple-touch-icon-precomposed" type="image/png" href="<?php echo APP_HREF; ?>client/images/favicon/favicon-152.png"><link rel="stylesheet" href="<?php echo APP_HREF; ?>client/css/styles.css"><script src="<?php echo APP_HREF; ?>client/js/scripts.js" data-module="main"></script></head><body><div id="fallback-hints"><span class="noJsMsg">Works best with JavaScript enabled!</span><span class="noBrowserMsg">Works best in <a href="http://browsehappy.com">modern browsers</a>!</span><span class="backlink"><a href="http://larsjung.de/h5ai/" title="h5ai 0.27.0 · a modern HTTP web server index">powered by h5ai</a></span></div><div id="fallback"><?php echo FALLBACK; ?></div>
<script>
function del(){
	window.open('/admin/del.php?file=' + encodeURIComponent(document.querySelector('#pv-bar-raw a').getAttribute('href')));
}
</script>
</body></html>
