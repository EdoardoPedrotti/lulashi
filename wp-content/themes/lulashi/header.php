<head>
  <meta charset="utf-8">
  <title>Bootstrap, from Twitter</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Le styles -->
  <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
  <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>
</head>
<body>
  <div class="row">
    <div class="sidebar-nav">
      
      <div class="navbar navbar-default navbar-fixed-top" id="sidemenu" role="navigation">
        <div class="container-fluid" >
          <h1 class="lulashi-font text-center">Iva Lulashi</h1>
          <div class="navbar-header">
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            
          </div>
          <div class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
              <li class="active"><a href=" http://localhost:8888/lulashi/work">Works</a></li>
              <li><a href=" http://localhost:8888/lulashi/bio/">Bio</a></li>
              
              <li><a href="http://localhost:8888/lulashi/contact/">Contacts</a></li>
              
            </ul>
            </div><!--/.nav-collapse -->
            
          </div>
        </div>
      </div>
    </div>