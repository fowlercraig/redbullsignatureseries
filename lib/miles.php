<?php
add_action( 'wp_ajax_load_redbull', 'load_redbull_content' );
add_action( 'wp_ajax_nopriv_load_redbull', 'load_redbull_content' );

function load_redbull_content() {
    $urls = get_post_meta($_GET['data'], 'api_info');
    if(count($urls)>=1 && $urls[0] != '') {
    	$url = $urls[0];
    } else { 
    	return;
    }
	
	// Replace file get contents with a cURL call do to allow remote being turned off
	//$api_content = file_get_contents($url);
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

    $api_content = curl_exec($ch);
    curl_close($ch);
    
    $api_data = json_decode($api_content);
    foreach($api_data->result as $res) {

    	$featuredimage = $res->featuredimage;
    	$title = 'title';
    	$publisheddate = date('F j, Y', strtotime($res->publisheddate));
    	$url = $res->url;
    	$teaser = $res->teaser;
		include(locate_template('parts/show/feed-items.php'));
    }
    die;
}