<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['About-Us'] = 'Home/about_us';
$route['Contact-Us'] = 'Home/contact_us';
$route['Services'] = 'Home/services';
$route['Packages'] = 'Home/packages';
//$route['IP-Tv'] = 'Home/iptv';
//$route['Package-Details/(.+)/(.+)/(:num)'] = 'Home/package_details/$3';

$route['Brand/(.+)/(:num)/(:num)'] = 'brand/brand_category/$2';
$route['Brand/(.+)/(:num)'] = 'brand/brand_category/$2';
$route['Brands'] = 'brand/index';
//$route['Foreign-Principals'] = 'Home/foreign_principals';
//$route['Vacancies'] = 'Vacancies/index';
//$route['Vacancy-Details/(.+)/(.+)'] = 'Vacancies/details/$2';
//$route['Apply-Now/(.+)/(.+)'] = 'Vacancies/apply/$2';
//$route['Community-Members'] = 'Home/member';
//$route['Recycling'] = 'Home/recycling';
//$route['Collector-Wanted'] = 'Home/collector_wanted';
//==================================================================

$route['Products/Search?'] = 'product/index';

$route['Product/(.+)/(.+)/(:num)/(:num)'] = 'product/product_sub_category/$3/$4';
$route['Product/(.+)/(.+)/(:num)'] = 'product/product_sub_category/$3';

$route['Products/(.+)/(:num)/(:num)'] = 'product/product_category/$2';
$route['Products/(.+)/(:num)'] = 'product/product_category/$2';

$route['Product-Details/(.+)/(.+)'] = 'product/detail/$2';

$route['Products/(:num)'] = 'product/product_index/$1';
$route['Products'] = 'product/product_index';

$route['Special-Offers/(:num)'] = 'product/special_offer/$1';
$route['Special-Offers'] = 'product/special_offer';

$route['Special-Offer-Details/(.+)/(:num)'] = 'product/special_offer_detail/$2';

$route['Garments/(.+)/(:num)/(:num)'] = 'product/garment/$2/$3';
$route['Garments/(.+)/(:num)'] = 'product/garment/$2';
$route['Garment/(.+)/(:num)'] = 'product/garment_detail/$2';

//$route['Ongoing-Projects'] = 'Onproject/index';
//$route['Ongoing-Projects/(.+)'] = 'Onproject/index/$1';
//
//$route['Completed-Projects'] = 'Comproject/index';
//$route['Completed-Projects/(.+)'] = 'Comproject/index/$1';
//
//$route['Project/(.+)/(.+)'] = 'Onproject/details/$2';
//
//
//$route['Latest-News'] = 'Latestnews/index';
//$route['Latest-News/(.+)'] = 'Latestnews/index/$1';
//$route['News/(.+)/(.+)'] = 'Latestnews/details/$2';
//
//$route['Sri-Lanka-News'] = 'Slnews/index';
//$route['Sri-Lanka-News/(.+)'] = 'Slnews/index/$1';
//$route['SL-News/(.+)/(.+)'] = 'Slnews/details/$2';
//
//$route['Blog'] = 'Blog/index';
//$route['Blog/(.+)'] = 'Blog/index/$1';
//$route['Blog-Detail/(.+)/(.+)'] = 'Blog/details/$2';
//
//$route['Sponsorship'] = 'Sponsorship/index';
//$route['Sponsorship/(.+)'] = 'Sponsorship/index/$1';
//$route['Sponsorship-Detail/(.+)/(.+)'] = 'Sponsorship/details/$2';
//
//$route['Photo-Gallery'] = 'Photogallery/index';
//$route['Photo-Gallery/(.+)'] = 'Photogallery/index/$1';
//$route['Photo-Gallery-Detail/(.+)/(.+)'] = 'Photogallery/details/$2';
//
//$route['Video-Gallery'] = 'Videogallery/index';
//$route['Video-Gallery/(.+)'] = 'Videogallery/index/$1';


//$route['Product/(.+)/(.+)/(.+)/(.+)'] = 'product/detail/$2/$4';

//$route['News-Events'] = 'Home/news_events';
//$route['Price-List'] = 'Home/price_list';

//$route['Price-List/Search?'] = 'product/index';
//$route['Price-List'] = 'product/product_category';
//$route['Price-List/(.+)'] = 'product/product_category/$1';

//$route['News-Events'] = 'Events/index';
//$route['News-Events/(.+)'] = 'Events/index/$1';
//$route['News-Event/(.+)/(.+)'] = 'Events/detail/$2';


//$route['who_we_are'] = 'home/static_page/who_we_are';
//$route['executive_committee'] = 'home/static_page/executive_committee';
//$route['chairman_message'] = 'home/static_page/chairman_message';
//$route['secretary_message'] = 'home/static_page/secretary_message';
//$route['treasurer_message'] = 'home/static_page/treasurer_message';
//$route['our_history'] = 'home/static_page/our_history';
//$route['kasl_documents'] = 'home/static_page/kasl_documents';
//$route['trophies'] = 'home/static_page/trophies';
//$route['contact_us'] = 'home/static_page/contact_us';
//$route['breeders'] = 'home/breeders';

//$route['gallery/(.+)/(.+)'] = 'gallery/detail/$2';
//$route['show/(.+)/(.+)'] = 'show/detail/$2';
//$route['winners/(.+)/(.+)'] = 'winners/detail/$2';
//$route['events/(.+)/(.+)'] = 'events/detail/$2';
//$route['breed/(.+)/(.+)'] = 'home/breeder_detail/$2';

//$route['Product/(.+)/(.+)/(.+)/(.+)'] = 'product/detail/$2/$4';
//$route['Product/(.+)/(.+)'] = 'product/detail/$2';
//
//$route['Products/(.+)/(.+)/(.+)'] = 'product/product_category/$2/$3';
//$route['Products/(.+)/(.+)'] = 'product/product_category/$2';
