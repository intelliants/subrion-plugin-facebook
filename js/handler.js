$(function()
{
	FB.init(
	{ 
		appId: intelli.config.fb_app_id, 
		status: true, 
		cookie: true, 
		xfbml : true,
		oauth: true,
		channelUrl : intelli.config.baseurl.replace('http:', '') + 'facebook/'
	});
});