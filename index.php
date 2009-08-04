<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>jQuery Togglr Example</title>
	<meta name="author" content="Shawn Parker">
	<meta name="description" content="jQuery Togglr is a simple jQuery plugin to allow multiple toggle links to be set up with one simple jQuery statement." />
	<meta name="keywords" content="jquery toggle shawn parker javascript plugin" />
	<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.min.js"></script>
	<script type="text/javascript" src="jquery.togglr.js"></script>
	<style type="text/css">
		* { font: 14px/1.2 georgia, serif; }
		body { margin: 30px; }
		h1, h2 { font-family: "Lucida Grande",helvetica,arial,sans-serif; }
		h1 { font-size: 1.8em; }
		h2 { font-size: 1.5em; margin-top: 30px; }
		h2 span { font-size: 1em; font-weight: normal; margin-left: 15px;}
		div { padding: 1px; }
		p { margin: 5px 0; }
		#div-3 { margin-top: 20px; border: 1px solid gray; background-color: #eee; padding: 5px; border-radius: 8px; -moz-border-radius: 8px; -webkit-border-radius: 8px;	}
		code { display: block; white-space: pre; font-family: monaco,consolas,sans-serif; font-size: .9em; margin-left: 10px; padding: 1px 15px; background-color: #eee; }
		a:link, a:visited { text-decoration: none; }
	</style>
	<script type="text/javascript">
		jQuery(function(){
			myCallback = function() {
				alert('hi from '+this.id);
			};
			jQuery('.show-hide').togglr({showtext:'Expand ',hidetext:'Contract ','callback':myCallback});
			jQuery('.show-hide-other').togglr({showtext:'&darr; ',hidetext:'&uarr; ',type:'show',speed:'slow'});
		});
	</script>
</head>
<body>
	<h1>jQuery Togglr Example</h1>
	
	<!-- target #div-1, close div 1 on DOM ready -->
	<p>This document serves as a functional example of how to implement jQuery Togglr. View the source of this document for a full implementation example. <a href="#div-1" class="show-hide closed">The First Div</a>.</p>
	<div id="div-1">
		<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
	</div>
	
	<div id="div-3">
		<div id="div-2">
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, commodo vitae, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. Donec non enim in turpis pulvinar facilisis. Ut felis. Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus</p>
		</div>
		<!-- target #div-2, leave target div open -->
		<p><small><a href="#div-2" class="show-hide">This</a></small></p>
	</div>
	
	<h2>Example Code <span><a href="#example-code" class="show-hide-other closed">example</a></span></h2>
	<code id="example-code">
&lt;script type=&quot;text/javascript&quot;&gt;
	// grab the necessary elements and pass them to the togglr
	jQuery(&#x27;.show-hide&#x27;).togglr();
&lt;/script&gt;

&lt;!-- toggle anchor, set target closed via closed classname which is applied at DOM Ready --&gt;
&lt;p&gt;&lt;a href=&quot;#div-1&quot; class=&quot;show-hide closed&quot;&gt;MyTitle&lt;/a&gt;&lt;/p&gt;

&lt;!-- target div --&gt;
&lt;div id=&quot;div-1&quot;&gt;
	&lt;p&gt;div contents&lt;/p&gt;
&lt;/div&gt;
	</code>
</body>
</html>
