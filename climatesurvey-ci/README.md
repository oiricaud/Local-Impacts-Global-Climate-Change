### A CodeIgniter clean skeleton application based on twitter bootstrap
---------------------------------------------------

	VERSION 1.0

* Codeigniter 2.2.0
* bootstrap 3.2.0
* view rendering handled by a smart MY_Controller. (Alessandro Arnodo)
* jQuery 2.1.1
* nav_helper (Alessandro Arnodo)
* .htaccess tip for remove index.php (Alessandro Arnodo)
* basejs view always include in page. (usefull to access via js some server side information e.g. base_url())

USAGE
-------------------
1. edit .htaccess file in order to match your server config (see line 5 in the file);
	if you have http://localhost/site you need to set RewriteBase /site/
2. set up your defaults values in application/config/development/custom.php
3. take a look to home controller and template view files to understand how does rendering works.
4. create your template: I've set up an header, footer, nav, and main for example purpose. Skeleton.php contains the scaffolding page.
5. pass your data to the view using in controller $this->data["my_var"] = "value";

My_Controller
------------------- 
is made for my basic page template.
You need to customize it in order to match your needs.
Feel free to improve it.
Send a pull request, or contact me.

## Authors

####Alessandro Arnodo

+	[@vesparny](https://twitter.com/vesparny)

+	[http://alessandro.arnodo.net](http://alessandro.arnodo.net)

+	<mailto:alessandro@arnodo.net>

####Luis Garnica

+	<mailto:lagarnicachavira@miners.utep.edu>
