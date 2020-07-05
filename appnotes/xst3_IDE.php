<!doctype html>
<html lang="en">

<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="">
<meta name="description" content="IDE is a simple design example that writes data to sectors on an IDE hard disk and then reads it back to verify it.">
<title>Project Asset | XESS Corp.</title>
<link rel="shortcut icon" href="../static/img/xess.ico?v=2">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400&subset=latin,latin-ext' rel='stylesheet' type='text/css'>


<link rel="alternate" type="application/rss+xml" title="RSS" href="../blog/feeds/rss/index.html">
<link rel="alternate" type="application/atom+xml" title="Atom" href="../blog/feeds/atom/index.html">


<link rel="stylesheet" href="../static/CACHE/css/ef03ed7fabaf.css" type="text/css" />

<script type="text/javascript" src="../static/CACHE/js/1d575eb4744b.js"></script>
<!--[if lt IE 9]>
<script src="/static/js/html5shiv.js"></script>
<![endif]-->



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

        

<ul class="nav nav-collapse"><li class="" id="dropdown-menu-learn"><a href="../index.html" class="btn">Home</a></li><!-- <li class="divider-vertical"></li> --><li class="dropdown active"
                                id="dropdown-menu-learn"><a href="../learn/index.html" class="dropdown-toggle active btn">
                                    Learn <span class="caret"></span></a><ul class="dropdown-menu" role="menu"><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                
                                id="dropdown-menu-tutorials"><a href="../tutorials/index.html">Tutorials</a></li><li
                                    
                                        class="dropdown-submenu"
                                    
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-appnotes"><a href="index.html">Application Notes</a></li><li 
                                    class="active  dropdown-submenu"
                                
                                 
                                    style="border-top: 1px solid #ddd"
                                
                                id="dropdown-menu-projects"><a href="../design_examples.php">Design Examples</a><ul class="dropdown-menu"><li 
                                    class="active  dropdown-submenu"
                                
                                
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
<li id="breadcrumb-menu-learn"><a href="../learn/index.html">Learn</a><span class="divider">&gt;&gt;</span></li><li id="breadcrumb-menu-projects"><a href="../design_examples.php">Design Examples</a><span class="divider">&gt;&gt;</span></li><li id="breadcrumb-menu--projects-"><a href="../design_examples.php">XESS</a><span class="divider">&gt;&gt;</span></li><li id="breadcrumb-menu-projects-xst3_ide-project"
        class="active">xst3_IDE Project</li>
</ul>

<h1>
xst3_IDE Project
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
                
            </div>
            <div class="span5 right">
                <div class="container">
                    <div class="row">
                        <div class="span3 left">
                            
                        </div>
                        <div class="span2">
                            <div class="row">
                                
                            </div>
                            <div class="row">
                                
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="span5 left">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- This is the main content block. -->
    



    <div>
        <div class="assetfield-label">Date:</div>
        <div class="assetfield-content">05/25/2006</div>
    </div>



    <div>
        <div class="assetfield-label">Categories:</div>
        
            <div class="assetfield-content">
                obsolete, 
            </div>
        
            <div class="assetfield-content">
                project
            </div>
        
    </div>



    <div>
        <div class="assetfield-label">Link:</div>
        <div class="assetfield-content">
            <a href="../projects/xst3_IDE.zip">
                /static/media/projects/xst3_IDE.zip
            </a>
        </div>
    </div>













    <div>
        <div class="assetfield-label">Authors:</div>
            
                <div class="assetfield-content">
                    <a href="../people/davevandenbout/index.html">
                        Dave Vandenbout
                    </a>
                </div>
        
    </div>



    <div>
        <div class="assetfield-label">Organization:</div>
        <div class="assetfield-content">
            <a href="../organizations/xess/index.html">
                XESS
            </a>
        </div>
    </div>



<h2>Description</h2>

<div class="StdPageBody">
<h1>Using the IDE Hard Disk Interface on the XST-3.0 Board</h1>
<p></p>
<ul>
<li><a href="xst3_IDE.php#using_the_ide_hard_disk_interface_on_the_xst3_0_board">USING THE IDE HARD DISK INTERFACE ON THE XST-3.0 BOARD</a></li>
<li><a href="xst3_IDE.php#design_files">DESIGN FILES</a></li>
<li><a href="xst3_IDE.php#using_the_design_example">USING THE DESIGN EXAMPLE</a></li>
<li><a href="xst3_IDE.php#environment">ENVIRONMENT</a></li>
<li><a href="xst3_IDE.php#source_files">SOURCE FILES</a></li>
<li><a href="xst3_IDE.php#author">AUTHOR</a></li>
<li><a href="xst3_IDE.php#copyright_and_license">COPYRIGHT AND LICENSE</a></li>
<li><a href="xst3_IDE.php#history">HISTORY</a></li>
</ul>
<!-- INDEX END --><hr>
<p></p>
<hr>
<h1><a name="using_the_ide_hard_disk_interface_on_the_xst3_0_board"></a>USING THE IDE HARD DISK INTERFACE ON THE XST-3.0 BOARD</h1>
<p>This is a simple design example that writes data to sectors on an IDE hard disk and then reads it back to verify it.</p>
<p></p>
<hr>
<h1><a name="design_files"></a>DESIGN FILES</h1>
<ul>
<li><strong><a name="item_common_2evhd"></a><em>common.vhd</em></strong>
<p>This file contains some definitions and functions used in the rest of the VHDL code.</p>
</li>
<li><strong><a name="item_atacntl_2evhd"></a><em>atacntl.vhd</em></strong>
<p>This is the VHDL file that describes an ATAPI interface to an IDE hard disk. You can get a more detailed description of the interface at <a href="an-041404-atacntl.pdf">here</a>.</p>
</li>
<li><strong><a name="item_memtest_2evhd_2c_randgen_2evhd"></a><em>memtest.vhd</em>, <em>randgen.vhd</em></strong>
<p>These VHDL files describe a memory tester module that writes a stream of data from a random-number generator (RNG) to a storage device and then reads the data back and compares it to the RNG output to verify it was stored correctly.</p>
</li>
<li><strong><a name="item_debounce_2evhd"></a><em>debounce.vhd</em></strong>
<p>This VHDL file describes a simple switch debouncer.</p>
</li>
<li><strong><a name="item_ide_2evhd"></a><em>ide.vhd</em></strong>
<p>This is the VHDL file that combines the IDE interface and memory tester module to create a design that tests writes and reads of hard disk sectors.</p>
</li>
<li><strong><a name="item_ide_2eucf"></a><em>ide.ucf</em></strong>
<p>These are the constraints which assign the I/O signals of IDE interface to the appropriate pins of the FPGA on the XSA-3S1000 + XST-3.0 combination.</p>
</li>
<li><strong><a name="item_ide_2ebit"></a><em>ide.bit</em></strong>
<p>This is a compiled bitstream for the design that can be downloaded into the XSA-3S1000 + XST-3.0 combination.</p>
</li>
<li><strong><a name="item_ide_2d200_2eucf"></a><em>ide-200.ucf</em></strong>
<p>This is an alternate set of pin assignments to be used if the design is recompiled for an XSA-200 + XST-3.0 combination.</p>
</li>
<li><strong><a name="item_ide_2enpl"></a><em>ide.npl</em></strong>
<p>Open this project file with WebPACK if you need to recompile the design.</p>
</li>
</ul>
<p></p>
<hr>
<h1><a name="using_the_design_example"></a>USING THE DESIGN EXAMPLE</h1>
<ul>
<li><strong><a name="item_step_1_3a"></a>Step 1:</strong>
<p>Attach an ATX power supply to the XST-3.0 Board and an IDE hard disk.</p>
</li>
<li><strong><a name="item_step_2_3a"></a>Step 2:</strong>
<p>Attach an IDE cable from header IDE1 on the XST-3.0 Board to the IDE hard disk.</p>
</li>
<li><strong><a name="item_step_3_3a"></a>Step 3:</strong>
<p>Set jumper J9 on the XSA-3S1000 Board to XS.</p>
</li>
<li><strong><a name="item_step_4_3a"></a>Step 4:</strong>
<p>Download the default parallel port interface into the XSA-3S1000 (<em>\XSTOOLS\XSA\3S1000\dwnldpar.svf</em>) if it is not already present. (Running GXSTEST will do this automatically.)</p>
</li>
<li><strong><a name="item_step_5_3a"></a>Step 5:</strong>
<p>Download the <em>ide.bit</em> file to the XSA Board.</p>
</li>
<li><strong><a name="item_step_6_3a"></a>Step 6:</strong>
<p>After a 20-second delay, the application will write and read sectors on the hard disk and report the success or failure of the operation by displaying an ``O'' or an ``E'' on LED2, respectively. Press switch SW2 on the XSA Board to re-run the test.</p>
</li>
</ul>
<p></p>
<hr>
<h1><a name="environment"></a>ENVIRONMENT</h1>
<p>This example design was developed using the following version of software:</p>
<pre>      Xilinx WebPACK       : 6.3.03i</pre>
<p></p>
<hr>
<h1><a name="source_files"></a>SOURCE FILES</h1>
<p>You can download the source files for this example design from the XESS website at <a href="../projects/xst3_IDE.zip">/projects/xst3_IDE.zip</a> .</p>
<p></p>
<hr>
<h1><a name="author"></a>AUTHOR</h1>
<p>Dave Vanden Bout, X Engineering Software Systems Corp.</p>
<p>Send bug reports to <a href="mailto:bugs@xess.com.">bugs@xess.com.</a></p>
<p></p>
<hr>
<h1><a name="copyright_and_license"></a>COPYRIGHT AND LICENSE</h1>
<p>Copyright 2006 by X Engineering Software Systems Corporation.</p>
<p>This application can be freely distributed and modified as long as you do not remove the attributions to the author or his employer.</p>
<p></p>
<hr>
<h1><a name="history"></a>HISTORY</h1>
<p>05/30/2006 - Release 1.0.1:</p>
<ul>
<li>
<p>Added multisector R/W.</p>
</li>
<li>
<p>Added PIO Mode 2 timing parameters.</p>
</li>
<li>
<p>Added enhanced ATA status outputs.</p>
</li>
<li>
<p>Added outputs to inactivate the XSA Flash and IDE disk DMA acknowledge.</p>
</li>
<li>
<p>Added a switch input that re-runs the sector R/W test.</p>
</li>
</ul>
<p>01/30/2006 - Initial release.</p>
</div>




    
</div>

<div class="span3 right">
    
    
<div class="panel">
    <a href="../shop/cart/index.html">
    0 items
    in cart:
    $0.00</a><br><br><a href="../accounts/login/index.html?next=%252Fprojects%252Fxst3_ide-project%252F"
        class="btn btn-small btn-account">Log in</a>
    or
    <a href="../account/signup/index.html?next=%252Fprojects%252Fxst3_ide-project%252F"
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

<ul class="clearfix"><li><ul><li class="active"
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
