<?php 
/*
 <!--

    Depends on Voyage-pack Website
	Date: February 2016
	Description: Basic HTML5/CSS3 contact form
	Version: 1.0
	Author: Dang Dat

-->
 *
 */
include "app/config.php";
include "app/detect.php";

if ($page_name=='') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='index.html') {
	include $browser_t.'/index.html';
	}
elseif ($page_name=='people.html') {
	include $browser_t.'/people.html';
	}
elseif ($page_name=='board.html') {
	include $browser_t.'/board.html';
	}
elseif ($page_name=='friend.html') {
	include $browser_t.'/friend.html';
	}
elseif ($page_name=='fellows.html') {
	include $browser_t.'/fellows.html';
	}
elseif ($page_name=='ourteam.html') {
	include $browser_t.'/ourteam.html';
	}
elseif ($page_name=='funders.html') {
	include $browser_t.'/funders.html';
	}
elseif ($page_name=='programs.html') {
	include $browser_t.'/programs.html';
	}
elseif ($page_name=='videos.html') {
	include $browser_t.'/videos.html';
	}
elseif ($page_name=='publications.html') {
	include $browser_t.'/publications.html';
	}	
elseif ($page_name=='contact.html') {
	include $browser_t.'/contact.html';
	}
elseif ($page_name=='peterpage.html') {
	include $browser_t.'/peterpage.html';
	}
elseif ($page_name=='donation.html') {
	include $browser_t.'/donation.html';
	}
elseif ($page_name=='contact-post.html') {
	include $browser_t.'/contact.html';
	include 'app/contact.php';
	}
else
	{
		include $browser_t.'/404.html';
	}

?>
