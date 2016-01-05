<?php
//##copyright##

if (iaView::REQUEST_HTML == $iaView->getRequestType())
{
	$iaView->disableLayout();
	$iaView->set('nodebug', 1);

	$cache_expire = 60 * 60 * 24 * 365;
	header("Pragma: public");
	header("Cache-Control: max-age=" . $cache_expire);
	header('Expires: ' . gmdate('D, d M Y H:i:s', time() + $cache_expire) . ' GMT');

	echo $iaCore->iaSmarty->fetch(IA_PLUGINS . 'facebook/templates/channel.tpl');

	$iaView->display('none');
}