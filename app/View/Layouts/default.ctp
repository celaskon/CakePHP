<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="description" content="Process Parts Search Portal."/>
  <meta name="Author" content="Marek Eisele"/>
  <meta name="copyright" content="Scorpions Bratislava"/>
  <title><?php //echo $title_for_layout?>Process Parts</title>
  <?php echo $this->Html->css(array('styles')); ?>
  <link rel="Shortcut icon" href="../img/favicon.png" type="image/x-icon" />
  
  <?php echo $scripts_for_layout; ?>
  
  <script type="text/javascript" src="../js/language.js"></script>
  
  <script type="text/javascript" src="../img/jquery.min.js"></script>
  <script type="text/javascript">
  function theRotator() {
  	//Set the opacity of all images to 0
  	$('div.rotator ul li').css({opacity: 0.0});
  	//Get the first image and display it (gets set to full opacity)
  	$('div.rotator ul li:first').css({opacity: 1.0});
  	//Call the rotator function to run the slideshow, 6000 = change to next image after 6 seconds
  	setInterval('rotate()',6000);
  }
  
  function rotate() {	
  	//Get the first image
  	var current = ($('div.rotator ul li.show')?  $('div.rotator ul li.show') : $('div.rotator ul li:first'));
      if ( current.length == 0 ) current = $('div.rotator ul li:first');
  	//Get next image, when it reaches the end, rotate it back to the first image
  	var next = ((current.next().length) ? ((current.next().hasClass('show')) ? $('div.rotator ul li:first') :current.next()) : $('div.rotator ul li:first'));
  	//Un-comment the 3 lines below to get the images in random order
  	//var sibs = current.siblings();
          //var rndNum = Math.floor(Math.random() * sibs.length );
          //var next = $( sibs[ rndNum ] );
  	//Set the fade in effect for the next image, the show class has higher z-index
  	next.css({opacity: 0.0})
  	.addClass('show')
  	.animate({opacity: 1.0}, 1000);
  	//Hide the current image
  	current.animate({opacity: 0.0}, 1000)
  	.removeClass('show');
  };
  
  $(document).ready(function() {		
  	//Load the slideshow
  	theRotator();
  	$('div.rotator').fadeIn(1000);
      $('div.rotator ul li').fadeIn(1000); // tweek for IE
  });
  </script>
  
  <script type="text/javascript">
		// formulare
		$(document).ready(function(){
 			$("label.inlined + .input-text").each(function (type) {
		     	$(this).focus(function () {
		      		$(this).prev("label.inlined").addClass("focus");
		     	});
		     	$(this).keypress(function () {
		      		$(this).prev("label.inlined").addClass("has-text").removeClass("focus");
		     	});
		     	$(this).blur(function () {
		      		if($(this).val() == "") {
		      			$(this).prev("label.inlined").removeClass("has-text").removeClass("focus");
		      		}
		     	});
		    });
		});
	</script>
  
  <script type="text/javascript">
    tinyMCE.init({
        theme : "simple",
        mode : "textareas",
        convert_urls : false
    });
</script> 

</head>

<body>
  <div>
    
    <div id="header">
      <?php echo $this->Html->image('logo3.png', array('alt' => 'Process Component', 'border' => 0, 'height' => 40));?>
      <div id="lang">
        <a href="<?php echo $this->Html->url(array("controller" => "categories",
                                                    "action" => "index",
                                                    "?" => array("lang" => "slo")));?>"> 
           <?php echo $this->Html->image('sk.gif', array('alt' => 'Slovensky jazyk', 'border' => 0, 'height' => 14));?>
        </a>
        
        <a href="<?php echo $this->Html->url(array("controller" => "categories",
                                                    "action" => "index",
                                                    "?" => array("lang" => "eng")));?>"> 
           <?php echo $this->Html->image('eng.gif', array('alt' => 'English language', 'border' => 0, 'height' => 14));?>
        </a>
      
      
             

      </div>
    </div>
    
    <div id="header2">
      <?php echo $this->Html->image('intro2.jpg', array('alt' => 'intro', 'border' => 0, 'height' => 150));?>
      
      <!-- 
      <div class="rotator">
        <ul>
          <li class="show">
            <a href="javascript:void(0)"><img src="subory/intro.jpg" alt="intro" width="940" height="150" title="intro" border="0" /></a>
          </li>
          <li>
            <a href="javascript:void(0)"><img src="subory/intro2.jpg" alt="intro" width="940" height="150" title="intro" border="0" /></a>
          </li>
          <li>
            <a href="javascript:void(0)"><img src="subory/intro3.jpg" alt="intro" width="940" height="150" title="intro" border="0" /></a>
          </li>
          <li>
            <a href="javascript:void(0)"><img src="subory/intro4.jpg" alt="intro" width="940" height="150" title="intro" border="0" /></a>
          </li>
          <li>
            <a href="javascript:void(0)"><img src="subory/intro5.jpg" alt="intro" width="940" height="150" title="intro" border="0" /></a>
          </li>
        </ul>
      </div>-->
      
    </div>
    
    <div id="wrapper">
      <div id="menu">
        <ul id="nav">
        	<li class="current"><a href="#">Home</a></li>
        	<li><a href="#">Links</a>
        		<ul>
        			<!-- 
              <li><a href="#">N.Design Studio</a>
        				<ul>
        					<li><a href="#">Portfolio</a></li>
        					<li><a href="#">WordPress Themes</a></li>
        					<li><a href="#">Wallpapers</a></li>
        					<li><a href="#">Illustrator Tutorials</a></li>
        				</ul>
        			</li>
        			<li><a href="#">Web Designer Wall</a>
        				<ul>
        					<li><a href="#">Design Job Wall</a></li>
        				</ul>
        			</li>-->
        			<li><a href="categories">Categories</a></li>
        			<li><a href="companyprofiles">Company profiles</a></li>
        		</ul>
        	</li>
        	<li><a href="#">Multi-Levels</a>
        		<ul>
        			<li><a href="#">Team</a>
        				<ul>
        					<li><a href="#">Sub-Level Item</a></li>
        					<li><a href="#">Sub-Level Item</a>
        						<ul>
        							<li><a href="#">Sub-Level Item</a></li>
        							<li><a href="#">Sub-Level Item</a></li>
        							<li><a href="#">Sub-Level Item</a></li>
        						</ul>
        					</li>
        					
        					<li><a href="#">Sub-Level Item</a></li>
        				</ul>
        			</li>
        			<li><a href="#">Sales</a></li>
        			<li><a href="#">Another Link</a></li>
        			<li><a href="#">Department</a>
        				<ul>
        					<li><a href="#">Sub-Level Item</a></li>
        					<li><a href="#">Sub-Level Item</a></li>
        					<li><a href="#">Sub-Level Item</a></li>
        				</ul>
        			</li>
        		</ul>
        	</li>	
        	<li><a href="#">About</a></li>
        	<li><a href="#">Contact Us</a></li>
        	<input class="search" type="text" size="40" value="Search..."/>
        </ul>
      </div>
        
      <div id="content">
        <?php 
        echo $this->Session->flash();
        echo $content_for_layout; ?>
      </div>
      
    </div>  
  </div>
  
  <div id="footer">
    
    <div class="top">
      <a href="#">
        <?php echo $this->Html->image('arrow.png', array('class' => 'arrow1', 'alt' => 'To top', 'border' => 0, 'height' => 20));?>
        HORE
        <?php echo $this->Html->image('arrow.png', array('class' => 'arrow2', 'alt' => 'To top', 'border' => 0, 'height' => 20));?>
      </a>
    </div>
    
    <div class="footer_text">
      <span class="footer_logo">  
        <?php echo $this->Html->image('cakephp_logo2.png', array('class' => 'cake-logo', 'alt' => 'cakephp_logo', 'border' => 0));?>
        <?php echo $this->Html->image('logo.png', array('class' => 'pp-logo', 'alt' => 'Process Component', 'border' => 0, 'height' => 18));?>
      </span>
      <span class="footer_text">  
        © 2012 Marek Eisele. Created by
        <a class="lime" href="http://www.limenet.sk">Limenet.</a>
      </span>  
    </div>
  </div>                             
  
  </body>
</html>