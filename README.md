bizspicebannerslider
====================

BIZSPICE BANNER SLIDER 
First install module into magento system by following below mentioned steps 
Copy app and skin folder provided in the package to your magento package in the corresponding directories
Now clear your magento cache and session 
Please check table name bannerslider exsist in you magento database after installation if not it must be due database security restriction 
Please use following sql query to create the database table 

CREATE TABLE bannerslider (    `bannerslider_id` int(11) unsigned NOT NULL auto_increment,    `title` varchar(255) NOT NULL default '',    `page_content` text NOT NULL default '',    `status` smallint(6) NOT NULL default '0',    `created_time` datetime NULL,    `update_time` datetime NULL,     PRIMARY KEY (`bannerslider_id`)  ) ENGINE=InnoDB DEFAULT CHARSET=utf8;

AFTER INSTALLATION there will be a new menu under your magento admin BANNER SLIDER  please Manage slides from this section .You can add slides by Add Slide button and provide slide details lie title, status and content please set status as active else slide will be not included in the slider . You can use WYSWYG editor to easily manage  the slide content you can use both image and html content for the slides

After creating slides you can use slider module either by cms code snippet in cms content
{{block type="bannerslider/bannerslider" template="bannerslider/bannerslider.phtml" }}
Or can also use it in layout xml file by using 
<block type="bannerslider/bannerslider" template="bannerslider/bannerslider.phtml" />

