<!doctype html>
<html lang="en">

<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="">
<meta name="description" content="XESS FPGA/CPLD prototyping extender development board.">
<title>XST-2.1 | XESS Corp.</title>
<link rel="shortcut icon" href="../static/img/xess.ico?v=2">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


<link rel="alternate" type="application/rss+xml" title="RSS" href="../blog/feeds/rss/index.html">
<link rel="alternate" type="application/atom+xml" title="Atom" href="../blog/feeds/atom/index.html">


<link rel="stylesheet" href="../static/CACHE/css/ef03ed7fabaf.css" type="text/css" />

<script type="text/javascript" src="../static/CACHE/js/1d575eb4744b.js"></script>
<!--[if lt IE 9]>
<script src="/static/js/html5shiv.js"></script>
<![endif]-->



<script src="../static/mezzanine/js/jquery.tools.toolbox.expose.js"></script>
<script src="../static/mezzanine/js/jquery.tools.overlay.js"></script>
<script>var variations = [{"sku": "X00033", "image_id": 46, "option2": null, "option1": null}];</script>
<script src="../static/cartridge/js/product_variations.js"></script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-765812-5']);
  _gaq.push(['_setSiteSpeedSampleRate', 50]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body id="body">

<div class="navbar navbar-fixed-top">
<div class="navbar-inner">
<div class="container">
    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    <a href="../index.html"><img class="logo" src="../static/img/xess-logo-3.png"></a>
    <!--
    <a class="brand" href="/">XESS Corp.</a>
    
    -->
    <div class="nav-collapse" style="position: relative; top: 5px;">
        
<form action="http://www.xess.com/search/" class="navbar-search pull-right input-append">

<input class="search-query" placeholder="Search" type="text" name="q" value="">
<input type="submit" class="icon-search" value="">



<!-- <input type="submit" class="btn" value="Go!"> -->

</form>

        

<ul class="nav nav-collapse"><li class="" id="dropdown-menu-learn"><a href="../index.html" class="btn">Home</a></li><!-- <li class="divider-vertical"></li> --><li class="dropdown"
                                id="dropdown-menu-learn"><a href="../learn/index.html" class="dropdown-toggle active btn">
                                    Learn <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                
                                id="dropdown-menu-tutorials"><a href="../tutorials/index.html">Tutorials</a></li><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-appnotes"><a href="../appnotes/index.html">Application Notes</a></li><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-projects"><a href="../design_examples.php">Design Examples</a><ul class="dropdown-menu"><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                
                                id="dropdown-menu--projects-"><a href="../design_examples.php">XESS</a></li><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-projects-others-"><a href="../projects/others/index.html">Others</a></li></ul></li><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                 
                                    style="border-top: 4px solid #ddd"
                                
                                id="dropdown-menu-manuals"><a href="../manuals/index.html">Product Manuals</a><ul class="dropdown-menu"><li
                                    
                                
                                
                                id="dropdown-menu--manuals-"><a href="../manuals/index.html">Active</a></li><li
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu--manuals-old-"><a href="../manuals/old/index.html">Discontinued</a></li></ul></li><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-software"><a href="../downloads.php">Software Tools</a><ul class="dropdown-menu"><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                
                                id="dropdown-menu--software-"><a href="../downloads.php">XESS</a><ul class="dropdown-menu"><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu--software-xess-old-"><a href="../software/xess/old/index.html">Old</a></li></ul></li><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu--software-others-"><a href="../software/others/index.html">Others</a></li></ul></li></ul></li><!-- <li class="divider-vertical"></li> --><li class="dropdown"
                                id="dropdown-menu-store"><a href="../store/index.html" class="dropdown-toggle active btn">
                                    Buy <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li
                                    
                                
                                
                                id="dropdown-menu-store-fpga-boards"><a href="../store/fpga-boards/index.html">FPGA Boards</a></li><li
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-store-add-on-boards"><a href="../store/add-on-boards/index.html">Add-On Boards</a></li><li
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-store-miscellaneous"><a href="../store/miscellaneous/index.html">Miscellaneous</a></li><li
                                    
                                
                                 
                                    style="border-top: 4px solid #ddd"
                                
                                id="dropdown-menu-store-distributors"><a href="../distributors.php">Distributors</a></li><li
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-store-purchasing-policies"><a href="../store/purchasing-policies/index.html">Sales Policies</a></li><li
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-store-discontinued"><a href="../store/discontinued/index.html">Discontinued Products</a></li></ul></li><!-- <li class="divider-vertical"></li> --><li class="dropdown"
                                id="dropdown-menu-interact"><a href="../interact/index.html" class="dropdown-toggle active btn">
                                    Interact <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li
                                    
                                
                                 
                                    style="border-top: 4px solid #ddd"
                                
                                id="dropdown-menu--blog-category-announcements"><a href="../blog/category/announcements">Announcements</a></li><li
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu--blog-"><a href="../blog/index.html">Blog</a></li><li
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-interact-rss-feeds"><a href="../interact/rss-feeds/index.html">RSS Feeds</a></li><li
                                    
                                
                                 
                                    style="border-top: 4px solid #ddd"
                                
                                id="dropdown-menu-interact-contact"><a href="../interact/contact/index.html">Contact</a></li><li
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu--organizations-xess-"><a href="../organizations/xess/index.html">About</a></li></ul></li><!-- <li class="divider-vertical"></li> --></ul>
    </div>
</div>
</div>
</div>

<div class="container">





<ul class="breadcrumb">
<li>XST-2.1</li>
</ul>

<h1>
XST-2.1
</h1>

</div>

<div class="container">

<div class="row">

<!--
<div class="span2 left">
    
    <div class="panel tree">

<ul class="nav nav-list navlist-menu-level-0"><li class="
             
             
             "
      id="tree-menu-learn"><a href="/learn/">Learn</a><ul class="nav nav-list navlist-menu-level-1"><li class="
             
             
             "
      id="tree-menu---2"><a href="/-2">***menu-divider***</a></li></ul></li><li class="
             
             
             "
      id="tree-menu-store"><a href="/store/">Buy</a><ul class="nav nav-list navlist-menu-level-1"><li class="
             
              first
             "
      id="tree-menu-store-fpga-boards"><a href="/store/fpga-boards/">FPGA Boards</a></li><li class="
             
             
             "
      id="tree-menu-store-add-on-boards"><a href="/store/add-on-boards/">Add-On Boards</a></li><li class="
             
             
             "
      id="tree-menu-store-miscellaneous"><a href="/store/miscellaneous/">Miscellaneous</a></li><li class="
             
             
             "
      id="tree-menu--"><a href="/">***menu-divider***</a></li><li class="
             
             
             "
      id="tree-menu-store-distributors"><a href="/store/distributors/">Distributors</a></li><li class="
             
             
             "
      id="tree-menu-store-purchasing-policies"><a href="/store/purchasing-policies/">Sales Policies</a></li><li class="
             
             
              last"
      id="tree-menu-store-discontinued"><a href="/store/discontinued/">Discontinued Products</a></li></ul></li><li class="
             
             
              last"
      id="tree-menu-interact"><a href="/interact/">Interact</a><ul class="nav nav-list navlist-menu-level-1"><li class="
             
              first
             "
      id="tree-menu---3"><a href="/-3">***menu-divider***</a></li><li class="
             
             
             "
      id="tree-menu--blog-category-announcements"><a href="/blog/category/announcements">Announcements</a></li><li class="
             
             
             "
      id="tree-menu--blog-"><a href="/blog/">Blog</a></li><li class="
             
             
             "
      id="tree-menu-interact-rss-feeds"><a href="/interact/rss-feeds/">RSS Feeds</a></li><li class="
             
             
             "
      id="tree-menu---1"><a href="/-1">***menu-divider***</a></li><li class="
             
             
             "
      id="tree-menu-interact-contact"><a href="/interact/contact/">Contact</a></li><li class="
             
             
              last"
      id="tree-menu--organizations-xess-"><a href="/organizations/xess/">About</a></li></ul></li></ul>
</div>
    
</div>
-->

<!-- <div class="span7 middle"> -->
<div class="span9 middle">

    <!-- This is a section that shows up on product pages with pictures, features, price, quantity, etc. -->
    <div class="container">
        <div class="row">
            <div class="span4 left">
                
    
        <ul id="product-images-large" class="thumbnails"><li id="image-46-large"><a class="product-image-large thumbnail" rel="#image-full-46" href="../images/XST-2_0-LABELED.png"><img alt="XST-2.1 image 0" src="../static/media/product/.thumbnails/XST-2_0-LABELED-0x300.png"></a><div class="product-image-full" style="display:none;" id="image-full-46"><img src="../images/XST-2_0-LABELED.png"></div></li><li id="image-47-large"style="display:none;"><a class="product-image-large thumbnail" rel="#image-full-47" href="../images/XST+XSA-LABELED.png"><img alt="XST-2.1 image 1" src="../static/media/product/.thumbnails/XST+XSA-LABELED-0x300.png"></a><div class="product-image-full" style="display:none;" id="image-full-47"><img src="../images/XST+XSA-LABELED.png"></div></li></ul><ul id="product-images-thumb" class="thumbnails"><li><a class="thumbnail" id="image-46" href="../images/XST-2_0-LABELED.png"><img alt="XST-2.1 image 0" src="../static/media/product/.thumbnails/XST-2_0-LABELED-75x75.png"></a></li><li><a class="thumbnail" id="image-47" href="../images/XST+XSA-LABELED.png"><img alt="XST-2.1 image 1" src="../static/media/product/.thumbnails/XST+XSA-LABELED-75x75.png"></a></li></ul>
    

            </div>
            <div class="span5 right">
                <div class="container">
                    <div class="row">
                        <div class="span3 left">
                            
<ul class="features"><li>Not compatible with XS95, XS40 or CSoC Boards!!</li> 
      <li>XSA Board connector</li> 
      <li>pushbuttons (4)</li> 
      <li>DIP switch</li> 
      <li>LED digits (2)</li> 
      <li>LED bargraph</li> 
      <li>128 KByte SRAM</li> 
      <li>20-bit stereo codec</li> 
      <li>stereo in/out ports</li> 
      <li>USB 1.1 peripheral-mode interface</li> 
      <li>RS-232 serial port</li> 
      <li>IDE hard disk interface</li> 
      <li>prototyping area</li> 
      <li>daughterboard connector</li>
	</ul>

                        </div>
                        <div class="span2">
                            <div class="row">
                                
    
        <p>This product is currently unavailable.</p>
    

                            </div>
                            <div class="row">
                                
<ul class="documentation"><li><a href="../manuals/xst-manual-v2_1_0.pdf">XST-2.1 Board Manual (PDF file)</a>
	</li></ul>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span5 left">
                            
    
        

<div class="panel rating">

<p id="rating-30">
    
    Currently unrated
    
</p>


<form method="post" action="http://www.xess.com/rating/">
    
    <input type='hidden' name='csrfmiddlewaretoken' value='6b1VE9U0elkvk2ULdzSg74n8Zb3IQATQ' />
    
    <ul><li> <ul>
<li><label for="id_value_0"><input id="id_value_0" name="value" type="radio" value="1" /> 1</label></li>
<li><label for="id_value_1"><input id="id_value_1" name="value" type="radio" value="2" /> 2</label></li>
<li><label for="id_value_2"><input id="id_value_2" name="value" type="radio" value="3" /> 3</label></li>
<li><label for="id_value_3"><input id="id_value_3" name="value" type="radio" value="4" /> 4</label></li>
<li><label for="id_value_4"><input id="id_value_4" name="value" type="radio" value="5" /> 5</label></li>
</ul><input id="id_content_type" name="content_type" type="hidden" value="shop.product" /><input id="id_object_pk" name="object_pk" type="hidden" value="30" /><input id="id_timestamp" name="timestamp" type="hidden" value="1593966693" /><input id="id_security_hash" name="security_hash" type="hidden" value="067da4a7bdca3b34794ed814d4b81f247e1830d1" /></li></ul>
    <input type="submit" class="btn" value="Rate"
        onclick="return $(this.form).find('input:checked').length == 1;">
</form>


<br style="clear:both">

</div>

    

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- This is the main content block. -->
    


<div class="StdPageBody">
	
    The XStend Board provides additional 
    support circuitry that the XSA Boards can access through their prototyping 
    interfaces.&#160; This circuitry extends the range of applications of the XSA Boards into 
    these new areas:<ul><li>The pushbuttons, DIP switches, LEDs, and prototyping area are useful 
        for basic lab experiments.</li> 
      <li>The static RAM can be used when the larger SDRAM on the XSA Board is 
        overkill for a particular application.</li> 
      <li>The stereo codec and dual-channel analog I/O circuitry are useful for 
        processing audio signals in combination with DSP components synthesized with XILINX's CORE 
        generation software.</li> 
      <li>The USB 1.1 interface lets the XSA Board appear as a low-speed or 
        full-speed USB peripheral to a PC.</li> 
      <li>The RS-232 interface is useful when the XSA Board needs to send 
        information over a low-speed serial communication link.</li> 
      <li>The IDE interface provides the XSA Board with access to a hard disk 
        for data storage and retrieval.</li> 
    </ul><table align="center"><tr><td align="center"><img src="../images/XST-2_0-LABELED.png" alt="XESS product picture"/></td></tr><tr><td align="center"><img src="../images/XST+XSA-LABELED.png" alt="XESS product picture"/></td></tr></table></div>
				





    
</div>

<div class="span3 right">
    
    
<div class="panel">
    <a href="../shop/cart/index.html">
    0 items
    in cart:
    $0.00</a><br><br><a href="../accounts/login/index.html?next=%252Fshop%252Fproduct%252Fxst-21%252F"
        class="btn btn-small btn-account">Log in</a>
    or
    <a href="../account/signup/index.html?next=%252Fshop%252Fproduct%252Fxst-21%252F"
        class="btn btn-small btn-account">Sign up</a>
</div>

    
    <div class="panel">
    
    
    






    
    




<h3>Announcements</h3>
<ul class="recent-anncs">

<li><a href="../blog/stickit-grove-board-is-released/index.html">StickIt!-Grove Board is Released!</a></li>

<li><a href="../blog/raspberry-pi-xula/index.html">Raspberry Pi + XuLA</a></li>

<li><a href="../blog/new-us-distributor/index.html">New US Distributor!</a></li>

</ul>



    
    </div>
</div>

</div>
</div>

<footer>
<div class="container">
<!-- 

<ul class="clearfix"><li><ul><li 
            id="footer-menu-learn"><a href="/learn/">Learn</a></li><li 
            id="footer-menu---2"><a href="/-2">***menu-divider***</a></li></ul></li><li><ul><li 
            id="footer-menu-store"><a href="/store/">Buy</a></li><li 
            id="footer-menu-store-fpga-boards"><a href="/store/fpga-boards/">FPGA Boards</a></li><li 
            id="footer-menu-store-add-on-boards"><a href="/store/add-on-boards/">Add-On Boards</a></li><li 
            id="footer-menu-store-miscellaneous"><a href="/store/miscellaneous/">Miscellaneous</a></li><li 
            id="footer-menu--"><a href="/">***menu-divider***</a></li><li 
            id="footer-menu-store-distributors"><a href="/store/distributors/">Distributors</a></li><li 
            id="footer-menu-store-purchasing-policies"><a href="/store/purchasing-policies/">Sales Policies</a></li><li 
            id="footer-menu-store-discontinued"><a href="/store/discontinued/">Discontinued Products</a></li></ul></li><li><ul><li 
            id="footer-menu-interact"><a href="/interact/">Interact</a></li><li 
            id="footer-menu---3"><a href="/-3">***menu-divider***</a></li><li 
            id="footer-menu--blog-category-announcements"><a href="/blog/category/announcements">Announcements</a></li><li 
            id="footer-menu--blog-"><a href="/blog/">Blog</a></li><li 
            id="footer-menu-interact-rss-feeds"><a href="/interact/rss-feeds/">RSS Feeds</a></li><li 
            id="footer-menu---1"><a href="/-1">***menu-divider***</a></li><li 
            id="footer-menu-interact-contact"><a href="/interact/contact/">Contact</a></li><li 
            id="footer-menu--organizations-xess-"><a href="/organizations/xess/">About</a></li></ul></li></ul>
 -->
<p>
    <a href="mailto:webmaster@xess.com">webmaster@xess.com</a>
    <span class="separator">|</span>
    &copy; 2013 by XESS Corp. All rights reserved.
    
</p>
</div>
</footer>








<script>

var _gaq = _gaq || [['_trackPageview']];
_gaq.unshift(['_setAccount', 'UA-765812-5']);
(function(d, t) {
    var g = d.createElement(t),
        s = d.getElementsByTagName(t)[0];
    g.async = true;
    g.src = '//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g, s);
})(document, 'script');


// This is for rendering digital waveforms.
(function(){ window.addEventListener("load", WaveDrom.ProcessAll, false); })();

// This is for drop-down menus.
$('ul.nav li.dropdown').hover(function() {
    $(this).closest('.dropdown-menu').stop(true, true).show();
    $(this).addClass('open'); 
} , function() { 
    $(this).closest('.dropdown-menu').stop(true, true).hide(); 
    $(this).removeClass('open'); 
});
</script>


</body>
</html>
