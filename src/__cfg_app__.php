<?PHP
// CONSTANTS
define('APPNAME',   'Smartwap Crypto Broker');
define('TYPEFACE',   '');
define('ALIAS', 	'Smartwap');
define('OWNER', 	'Smartwap, Inc.');
define('TITLE',     'Smartwap | The Most Secure Crypto Broker');
define('CAPTION', 	'The Most Secure Crypto Broker');
define('SUMMARY', 	'Invest with Smartwap and receive huge earnings right away');
define('KEYWORDS', 	'options,crypto options,crypto trading,crypto broker,crypto website,binary options,binary trading');
define('COPYRIGHT',	'Copyright &copy; 2022 '.OWNER);
define('EMAIL',		'support@smartwap.pw');
define('PHONE',		'(+39)351-184-3325');
define('ADDRESS',	'Via Scala 120 Montelparo');
define('THEME',		'#673ab7');

// APACHE
$ctx_localhost = $_SERVER['SERVER_NAME'] == '127.0.0.1' || $_SERVER['SERVER_NAME'] == 'localhost';
$ctx_server = $ctx_localhost == true ? 'smatrade' : 'smarmfte';
define('SERVER', 	$ctx_server);	
define('WEBHOST', 	'id17839796_');
if ($_SERVER['SERVER_NAME'] == 'localhost') 
{	
	define('DATABASE',	'smatrade_db');
	define('USERNAME',	'root');
	define('PASSWORD',	'');
} 
else 
{
    define('DATABASE', 'smarmfte_db');
    define('USERNAME', 'smarmfte_root');
    define('PASSWORD', '_Strongp@ssw0rd');
}

// ISP
define('SITE', 	    '../../index.html');
define('DOMAIN', 	'smartwa.pw');
define('CPANEL', 	'https://'.DOMAIN.'/cpanel');
define('WEBMAIL', 	'https://'.DOMAIN.'/webmail');;
define('WEBMAIL_1',	'admin@'.DOMAIN);
define('WEBMAIL_2',	'contact@'.DOMAIN);
define('WEBMAIL_3',	'info@'.DOMAIN);
define('WEBMAIL_4',	'support@'.DOMAIN);
define('WEBMAIL_5',	'ticket@'.DOMAIN);
define('VERSION',	'3.2.2.22');
define('HOSTED',	'2022-02-01');
define('REVISED',	'2023-01-31');

// META TAGS
$m = array();
$m['appname'] = 	    APPNAME;
$m['author'] =			'HWP Labs';
$m['classification'] = 	'Enterprise Application Software';
$m['copyright'] = 		date('Y');
$m['coverage'] = 		'Nigeria';
$m['description'] = 	SUMMARY;
$m['designer'] = 		'Tugbeh, E.O.';
$m['keywords'] = 		KEYWORDS;
$m['language'] = 		'en';
$m['owner'] = 			OWNER;
$m['reply_to'] = 		WEBMAIL_4;
$m['revised'] = 		REVISED;
$m['robots'] = 			'index,follow';
$m['url'] = 			'https://'.DOMAIN.'/';
$m['preview'] = 		'/img/preview.png';
$m['viewport'] = 		! isset($page_ctx_viewport)? '': 'width=device-width, initial-scale=1.0';
$m['title'] = 			! isset($page_ctx_title)? TITLE: $page_ctx_title.' - '.APPNAME;
$META = (object)$m;

$pwa_url = 'https://'.DOMAIN.'/wasabi/admin/';
$pwa_arr = [
    'canonical' => $pwa_url.'index.php',
    'site_name' => 'ZEntry', 
    'title' => 'Website Admin Dashboard .::ZEntry', 
    'description' => 'HWP Labs\' Enterprise Application Software', 
    'url' => $pwa_url,
    'image' => $pwa_url.'img/preview.png', 
    'width' => '640',
    'height' => '320',
];
?>