
<?php

class App_Services_Json{

	static function jsonData(){
		$data = array(
			'siteName' => 'SiteName',
			'siteTitle' => 'SiteTitle',
			'name' => 'name'			
			);
		return json_encode($data);
	}

}