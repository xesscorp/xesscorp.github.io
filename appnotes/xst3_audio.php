<!doctype html>
<html lang="en">

<head>

<meta http-equiv="Content-type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width">
<meta name="keywords" content="">
<meta name="description" content="Audio is a simple design example for the XST-3.0 Board that digitizes a stereo input signal and then converts it back into an analog output signal (i.e., simple audio loopback).">
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
<li id="breadcrumb-menu-learn"><a href="../learn/index.html">Learn</a><span class="divider">&gt;&gt;</span></li><li id="breadcrumb-menu-projects"><a href="../design_examples.php">Design Examples</a><span class="divider">&gt;&gt;</span></li><li id="breadcrumb-menu--projects-"><a href="../design_examples.php">XESS</a><span class="divider">&gt;&gt;</span></li><li id="breadcrumb-menu-projects-xst3_audio-project"
        class="active">xst3_audio Project</li>
</ul>

<h1>
xst3_audio Project
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
        <div class="assetfield-content">11/09/2005</div>
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
            <a href="../projects/xst3_audio.zip">
                /static/media/projects/xst3_audio.zip
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
<h1>Using the Stereo Audio Codec on the XST-3.0 Board</h1>
<p></p>
<ul>
<li><a href="xst3_audio.php#using_the_stereo_audio_codec_on_the_xst3_0_board">USING THE STEREO AUDIO CODEC ON THE XST-3.0 BOARD</a></li>
<li><a href="xst3_audio.php#design_files">DESIGN FILES</a></li>
<li><a href="xst3_audio.php#using_the_design_example">USING THE DESIGN EXAMPLE</a></li>
<li><a href="xst3_audio.php#environment">ENVIRONMENT</a></li>
<li><a href="xst3_audio.php#source_files">SOURCE FILES</a></li>
<li><a href="xst3_audio.php#author">AUTHOR</a></li>
<li><a href="xst3_audio.php#copyright_and_license">COPYRIGHT AND LICENSE</a></li>
<li><a href="xst3_audio.php#history">HISTORY</a></li>
</ul>
<!-- INDEX END --><hr>
<p></p>
<hr>
<h1><a name="using_the_stereo_audio_codec_on_the_xst3_0_board"></a>USING THE STEREO AUDIO CODEC ON THE XST-3.0 BOARD</h1>
<p>This is a simple design example that digitizes a stereo audio input and then converts it back into an audio output (i.e., a simple audio loopback).</p>
<p></p>
<hr>
<h1><a name="design_files"></a>DESIGN FILES</h1>
<ul>
<ul>
<li><strong><a name="item_common_2evhd"></a><em>common.vhd</em></strong></li>
This file contains some definitions and functions used in the rest of the VHDL code.</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_audio_2evhd"></a><em>audio.vhd</em></strong></li>
This is the VHDL file that describes an interface to the stereo audio codec and then uses this interface to digitize a stereo input waveform and then convert it back into an analog output. You can get a more detailed description of the codec interface at</ul>
</ul>
<a href="an-032904-codec.pdf">/appnotes/an-032904-codec.pdf</a>
<ul>
<ul>.</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_audio_2eucf"></a><em>audio.ucf</em></strong></li>
These are the constraints which assign the I/O signals of the stereo codec interface to the appropriate pins of the FPGA on the XSA-3S1000 + XST-3.0 combination.</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_audio_2ebit"></a><em>audio.bit</em></strong></li>
This is a compiled bitstream for the design that can be downloaded into the XSA-3S1000 + XST-3.0 combination.</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_audio_2d200_2eucf"></a><em>audio-200.ucf</em></strong></li>
This is an alternate set of pin assignments to be used if the design is recompiled for an XSA-200 + XST-3.0 combination.</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_audio_2enpl"></a><em>audio.npl</em></strong></li>
Open this project file with WebPACK if you need to recompile the design.</ul>
</ul>
<p></p>
<p></p>
<hr>
<h1><a name="using_the_design_example"></a>USING THE DESIGN EXAMPLE</h1>
<ul>
<ul>
<li><strong><a name="item_step_1_3a"></a>Step 1:</strong></li>
Set jumper J9 on the XSA-3S1000 Board to XS.</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_step_2_3a"></a>Step 2:</strong></li>
Download the default parallel port interface into the XSA-3S1000 (</ul>
</ul>
<em>\XSTOOLS\XSA\3S1000\dwnldpar.svf</em>
<ul>
<ul>) if it is not already present. (Running GXSTEST will do this automatically.)</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_step_3_3a"></a>Step 3:</strong></li>
Connect a stereo cable from the line-out of a PC audio card to the J1 (IN) jack of the XST-3.0 Board. Connect stereo headphones to the J2 (OUT) jack. On the XST-3.0 Board near the audio jacks, make sure the shunts are removed from jumpers JP2 and JP3 and placed on jumpers JP4 and JP5.</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_step_4_3a"></a>Step 4:</strong></li>
Download the</ul>
</ul>
<em>audio.bit</em>
<ul>
<ul>file to the XSA Board.</ul>
</ul>
<p></p>
<ul>
<ul>
<li><strong><a name="item_step_5_3a"></a>Step 5:</strong></li>
Use Windows Media Player to play a .wav file from the \WINDOWS\Media folder. The sound should be output through the headphones. Hold down pushbutton PB1 on the XST-3.0 Board to keep the circuit in the FPGA in its reset state. No sound should come from the headphones while the circuit is in the reset state.</ul>
</ul>
<p></p>
<p></p>
<hr>
<h1><a name="environment"></a>ENVIRONMENT</h1>
<p>This example design was developed using the following version of software:</p>
<pre>      Xilinx WebPACK       : 6.3.03i</pre>
<p></p>
<hr>
<h1><a name="source_files"></a>SOURCE FILES</h1>
<p>You can download the source files for this example design from the XESS website at <a href="../projects/xst3_audio.zip">/projects/xst3_audio.zip</a> .</p>
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
<p>01/29/2006 - Initial release.</p>
</div>




    
</div>

<div class="span3 right">
    
    
<div class="panel">
    <a href="../shop/cart/index.html">
    0 items
    in cart:
    $0.00</a><br><br><a href="../accounts/login/index.html?next=%252Fprojects%252Fxst3_audio-project%252F"
        class="btn btn-small btn-account">Log in</a>
    or
    <a href="../account/signup/index.html?next=%252Fprojects%252Fxst3_audio-project%252F"
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
