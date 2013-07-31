<?php
return array(
										 //// REQUIRED
    host => 'localhost',				 // database host
    db => 'test',						 // database
    user => 'root',						 // database username
    pass => 'root',						 // database password
    root => '/Applications/MAMP/htdocs', // server base, with no trailing slash
    html => '/magentoCSVCreator/',					 // site base, with starting and trailing slash
   	 									 //// OPTIONAL
    site => 'Website',				 	 // site name
    hex_email => '',					 // email address with hex values http://www.swingnote.com/tools/texttohex.php
    char_email => '',					 // email address with char values http://www.wbwip.com/wbw/emailencoder.html
    prerw => '',						 // pre rewrite if set up in .htaccess
    postrw => '.html',					 // post rewrite if set up in .htaccess
    
    page => $getPage 					 // store page identifier within config
); 