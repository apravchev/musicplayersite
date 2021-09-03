<?php
$app  = JFactory::getApplication();
$doc  = JFactory::getDocument();
$user = JFactory::getUser();
$templateparams = $app->getTemplate(true)->params; 
$this->language = $doc->language;
$this->direction = $doc->direction;  
$logo				= $this->params->get('logo');
$config = JFactory::getConfig();
$tpl_name = $this->template;
$framework = 'templates/'.$tpl_name.'/framework/';
$csite_name	= $app->getCfg('sitename');



 // Social icons
$soc = array(
	"fa-twitter" => $this->params->get("twitter"),
	"fa-facebook" => $this->params->get("facebook"),
	"fa-flickr" => $this->params->get("flickr"),
	"fa-linkedin" => $this->params->get("linkedin"),
	"fa-youtube-play" => $this->params->get("youtube"),
	"fa-pinterest" => $this->params->get("pinterest"),
	"fa-google-plus" => $this->params->get("google"),
	"fa-dribbble" => $this->params->get("dribbble"),
	"fa-vimeo-square" => $this->params->get("vimeo"),
	"fa-instagram" => $this->params->get("instagram"),
	"fa-vk" => $this->params->get("vk")
); 


 // Add Stylesheets

$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/fontawesome/css/font-awesome.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/style.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/nav-top.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/responsive.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/animate.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/prettyphoto/pretty.css");

$left = $this->countModules( 'left' );    
$right = $this->countModules( 'right' );    

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
 <jdoc:include type="head" />
 
<!-- Make the web page appear 100% instead of scaling -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" />
	<!-- Add to Home Screen for iOS -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	
	<script type="text/javascript">jQuery.noConflict();</script>
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700,900|Comfortaa:400,300,700|Abel|raleway:400,200,500,600,700,800|Dosis:400,200,300,500,600,700,800|Droid+Sans:400,700|Francois+One|Lato:400,100,300,400italic,300italic,100italic,700,700italic,900,900italic|Lobster|Lora:400,400italic,700,700italic|Open+Sans+Condensed:300,300italic,700|Open+Sans:900,800,700,400,300,300italic,400italic,600,600italic,700,700italic,800italic,800|Oswald:400,300,700|Oxygen:400,300,700|PT+Sans+Narrow:400,700|PT+Sans:400,400italic,700,700italic|Prosto+One|Quicksand:400,300,700|Roboto+Condensed:400,300,300italic,400italic,700,700italic|Share:400,400italic,700,700italic|Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic|Ubuntu+Condensed|Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic|Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>

<script type="text/javascript"><?php echo $this->params->get('tracking_code')?>
</script>
<!--[if IE 7]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie7.css" /> <![endif]-->
<!--[if IE 8]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie8.css" /> <![endif]-->
<!--[if IE 9]> <link type="text/css" rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/style_ie9.css" /> <![endif]-->

<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/jquery-1.11.0.min.js"></script>
<link type="text/css" rel="stylesheet" media="only screen and (min-width: 1170px) and (max-width: 90000px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/fixed-1200.css" />
<link type="text/css" rel="stylesheet" media="only screen and (min-width: 981px) and (max-width: 1169px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/fixed-960.css" />
<link type="text/css" rel="stylesheet" media="only screen and (min-width: 720px) and (max-width: 980px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/fixed-720.css" />
<link type="text/css" rel="stylesheet" media="only screen and (min-width: 0px) and (max-width: 719px)" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/mobile.css" />
<link rel="icon" type="image/gif" href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/favicon.gif" />	 

<link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css"
    />
<style type="text/css">
#title {
display:none;
}
    @import url('https://fonts.googleapis.com/css?family=Lato&display=swap');
body {
	font-family:<?php echo $this->params->get('body_font') ?>;
	background-color:<?php echo $this->params->get('body_background_color')?>; 
	color:<?php echo $this->params->get('body_color')?>; 
}

a {
	color:<?php echo $this->params->get('body_link_color')?>;
	text-decoration:<?php echo $this->params->get('body_underline', 'underline')?>;
	font-family:<?php echo $this->params->get('links_font', 'Arial, sans-serif')?>;
}

a:hover {
	color:<?php echo $this->params->get('body_link_hover_color')?>;
	text-decoration:<?php echo $this->params->get('body_hover_underline')?>;
}

 #sitename a {
font-size:<?php echo $this->params->get('logo_font_size')?>;
color:<?php echo $this->params->get('logo_color')?>;
text-transform:<?php echo $this->params->get('logo_style')?>;
}

#sitename a:hover {
color:<?php echo $this->params->get('logo_color_hover')?>;
}

h1 {
color:<?php echo $this->params->get('h1_color')?>;
text-align:center;
margin-top:0;
}

h2 {
color:<?php echo $this->params->get('h2_color')?>;
}

h3 {
color:<?php echo $this->params->get('h3_color')?>;
}

h4,h5,h6 {
color:<?php echo $this->params->get('h_color')?>;
}

 #navigation ul.menu li a {
font-family:<?php echo $this->params->get('top_menu_font')?> !important;

}
 #navigation ul.menu li a {
color:<?php echo $this->params->get('topmenu_color_links')?> !important;

}

#navigation ul.menu li a:hover  {
color:<?php echo $this->params->get('topmenu_color_links_hover')?> !important;

}

 #navigation ul.menu ul li a {
 color:<?php echo $this->params->get('topmenu_color_sub_links')?> !important;
 }
 
#navigation ul#menu.menu li.active a {
 color:<?php echo $this->params->get('topmenu_color_links_active')?> !important;
}
 
 #navigation li.deeper.parent ul.navig li a:hover  ,
 #navigation ul li.current.active.deeper.parent ul li a:hover,
 #navigation ul li.active.deeper.parent ul li.current.active a:hover,
 #navigation ul li.active.deeper.parent ul li a:hover {
color:<?php echo $this->params->get('topmenu_color_sub_links_hover')?> !important;
}
 
 

h1 {font-family:<?php echo $this->params->get('h1_font', 'Arial, sans-serif')?>;}
h2 {font-family:<?php echo $this->params->get('h2_font', 'Arial, sans-serif')?>;}
h3 {font-family:<?php echo $this->params->get('h3_font', 'Arial, sans-serif')?>;}
h4 {font-family:<?php echo $this->params->get('h4_font', 'Arial, sans-serif')?>;}
h5 {font-family:<?php echo $this->params->get('h5_font', 'Arial, sans-serif')?>;}
h6 {font-family:<?php echo $this->params->get('h6_font', 'Arial, sans-serif')?>;} 
.music-container {
  background-color: #cdc2d000;
  border-radius: 15px;
  display: flex;
  padding: 20px 0;
  position: relative;
  margin: 100px auto;
  z-index: 10;
  justify-content: center;
}

.img-container {
  position: relative;
  width: 110px;
}

.img-container::after {
  content: '';
  background-color: #fff;
  border-radius: 50%;
  position: absolute;
  bottom: 100%;
  left: 50%;
  width: 20px;
  height: 20px;
  transform: translate(-50%, 50%);
}

.img-container img {
  border-radius: 50%;
  object-fit: cover;
  height: 110px;
  width: inherit;
  position: absolute;
  bottom: 0;
  left: 0;
  animation: rotate 3s linear infinite;

  animation-play-state: paused;
}

.music-container.play .img-container img {
  animation-play-state: running;
}

@keyframes rotate {
  from {
    transform: rotate(0deg);
  }

  to {
    transform: rotate(360deg);
  }
}

.navigation {
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 1;
}

.action-btn {
  background-color: #fff;
  border: 0;
  color: #dfdbdf;
  font-size: 20px;
  cursor: pointer;
  padding: 10px;
  margin: 0 20px;
}

.action-btn.action-btn-big {
  color: #cdc2d0;
  font-size: 30px;
}

.action-btn:focus {
  outline: 0;
}

.music-info {
  background-color: rgba(255, 255, 255, 0.5);
  border-radius: 15px 15px 0 0;
  position: absolute;
  top: 0;
  left: 0;
  width: calc(100% - 40px);
  padding: auto 10px 150px;
  opacity: 0;
  transform: translateY(0%);
  transition: transform 0.3s ease-in, opacity 0.3s ease-in;
  z-index: 0;
}

.music-container.play .music-info {
  opacity: 1;
  transform: translateY(-100%);
}

.music-info h4 {
  margin: 0;
}

.progress-container {
  background: rgba(75, 75, 75, 0.5);
  border-radius: 5px;
  cursor: pointer;
  margin: 10px 0;
  height: 4px;
  width: 100%;
}

.progress {
  background-color:  rgba(204, 2, 2, 0.5);
  border-radius: 5px;
  height: 100%;
  width: 0%;
  transition: width 0.1s linear;
}
</style>

<script>

window.BaseUrl = 'http://192.168.1.111:8080/joomla';


// Song titles

// Keep track of song
let songIndex = 2;


function goBack() {
  window.history.back();
  }
// Update song details
function loadSong(song) {
var title = document.getElementById('title');
  title.innerText = song;
  audio.src = window.BaseUrl + `/music/${song}.ogg`;
  cover.src = window.BaseUrl + `/images/${song}.jpg`;
}

// Play song
function playSong() {
  musicContainer.classList.add('play');
  playBtn.querySelector('i.fas').classList.remove('fa-play');
  playBtn.querySelector('i.fas').classList.add('fa-pause');

  window.audio.play();
}

// Pause song
function pauseSong() {
  musicContainer.classList.remove('play');
  playBtn.querySelector('i.fas').classList.add('fa-play');
  playBtn.querySelector('i.fas').classList.remove('fa-pause');

  audio.pause();
}

// Previous song
function prevSong() {
  songIndex--;

  if (songIndex < 0) {
    songIndex = songs.length - 1;
  }

  loadSong(songs[songIndex]);

  playSong();
}

// Next song
function nextSong() {
  songIndex++;

  if (songIndex > songs.length - 1) {
    songIndex = 0;
  }

  loadSong(songs[songIndex]);

  playSong();
}

// Update progress bar
function updateProgress(e) {
  const { duration, currentTime } = e.srcElement;
  const progressPercent = (currentTime / duration) * 100;
  progress.style.width = `${progressPercent}%`;
}

// Set progress bar
function setProgress(e) {
  const width = this.clientWidth;
  const clickX = e.offsetX;
  const duration = audio.duration;

  audio.currentTime = (clickX / width) * duration;
}

//get duration & currentTime for Time of song
function DurTime (e) {
	const {duration,currentTime} = e.srcElement;
	var sec;
	var sec_d;

	// define minutes currentTime
	let min = (currentTime==null)? 0:
	 Math.floor(currentTime/60);
	 min = min <10 ? '0'+min:min;

	// define seconds currentTime
	function get_sec (x) {
		if(Math.floor(x) >= 60){
			
			for (var i = 1; i<=60; i++){
				if(Math.floor(x)>=(60*i) && Math.floor(x)<(60*(i+1))) {
					sec = Math.floor(x) - (60*i);
					sec = sec <10 ? '0'+sec:sec;
				}
			}
		}else{
		 	sec = Math.floor(x);
		 	sec = sec <10 ? '0'+sec:sec;
		 }
	} 

	get_sec (currentTime,sec);

	// change currentTime DOM
	currTime.innerHTML = min +':'+ sec;

	// define minutes duration
	let min_d = (isNaN(duration) === true)? '0':
		Math.floor(duration/60);
	 min_d = min_d <10 ? '0'+min_d:min_d;


	 function get_sec_d (x) {
		if(Math.floor(x) >= 60){
			
			for (var i = 1; i<=60; i++){
				if(Math.floor(x)>=(60*i) && Math.floor(x)<(60*(i+1))) {
					sec_d = Math.floor(x) - (60*i);
					sec_d = sec_d <10 ? '0'+sec_d:sec_d;
				}
			}
		}else{
		 	sec_d = (isNaN(duration) === true)? '0':
		 	Math.floor(x);
		 	sec_d = sec_d <10 ? '0'+sec_d:sec_d;
		 }
	} 

	// define seconds duration
	
	get_sec_d (duration);

	// change duration DOM
	durTime.innerHTML = min_d +':'+ sec_d;
		
};



</script>

</head>
<body>

<!--<div class="ct-preloader"><div class="ct-preloader-content"></div></div>-->
<div id="menuModal">
    <div class="modal-content">
        <div class="container_12">
            <div class="grid_12">
                <div  id="btn-close-modal" class="close-menuModal modCloseButton"><span></span></div>
            </div>
        </div>
		    <div id="navigation-res">
			    <div class="container_12">
					<div class="grid_12">
						<jdoc:include type="modules" name="position-1" style="none"/>  
                    </div>
			     </div>
		    </div>        
    </div>  
</div>

<header>
  <div id="top-header">
        
    <div id="nav-top">
		<div class="container_12">
			<div class="grid_3">
				<div id="sitename">
				    <a href="index.php" class="cl-effect-4">
						<?php if ($logo) : ?>
							<img src="<?php echo $this->baseurl ?>/<?php echo htmlspecialchars($logo); ?>" alt="<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>" />
						<?php endif;?>
						<?php if (!$logo AND $templateparams->get('sitetitle')) : ?>
							<?php echo htmlspecialchars($templateparams->get('sitetitle'));?>
							<?php elseif (!$logo AND $config->get('sitename')) : ?>
							<?php echo htmlspecialchars($config->get('sitename'));?>
						<?php endif; ?></a>
				</div>
			</div>
			<div class="grid_1">
                    <div class="menuButon">
                        <a id="openMenu" href="#menuModal"></a>
                    </div>
				</div>
			    <div class="grid_8">
					<div id="navigation">
						<jdoc:include type="modules" name="position-1" style="none"/>  
                    </div>
				</div>	
        </div>
	</div>

</div>
</Header>

   <?php if ($this->countModules('parallax') ) { ?>
        <div id="parallax">
		    <jdoc:include type="modules" name="parallax"/>
        </div>
		<div class="clr"></div>
    <?php } ?>

    <?php if ($this->countModules( 'top1 or top2 or top3 or top4' )) : ?>       
        <div id="block-top">            
            <?php require_once ($framework.'top.php'); ?>                   
        </div>
		<div class="clr"></div>
	<?php endif; ?>
	
	<?php if ($this->countModules( 'beforecontent1 or beforecontent2 or beforecontent3 or beforecontent4' )) : ?>     
        <div id="block-beforecontent">            
            <?php require_once ($framework.'beforecontent.php'); ?>                   
        </div>
	<?php endif; ?>
	
	<div class="container_12">
	<?php if ($left): ?>
		<div id="left">
			<div class="grid_3">
				<jdoc:include type="modules" name="left" style="xhtml" />
			</div>
		</div>
	<?php endif; ?>
		
	<div class="<?php if ($left && $right) {print('grid_6');} else if ($left || $right) {print('grid_9');} else {print('grid_12');} ?>">
		<div><jdoc:include type="message" /></div>
		<div><jdoc:include type="component" /></div>
	</div>
					
	<?php if ($right): ?>		    
	    <div id="right">
		    <div class="grid_3">
			    <jdoc:include type="modules" name="Right" style="xhtml" />
		    </div>
	    </div>
	</div>
    <?php endif; ?>
</div>
<?php if ($this->countModules('parallax2') ) { ?>
        <div id="parallax2">
		    <jdoc:include type="modules" name="parallax2"/>
        </div>
		<div class="clr"></div>
    <?php } ?>

 <?php if ($this->countModules( 'aftercontent1 or aftercontent2 or aftercontent3 or aftercontent4' )) : ?>     
        <div id="block-aftercontent">            
            <?php require_once ($framework.'aftercontent.php'); ?>                   
        </div>
	<?php endif; ?>
	
	<?php if ($this->countModules( 'bottomcontent1 or bottomcontent2 or bottomcontent3 or bottomcontent4' )) : ?>     
        <div id="block-bottomcontent">            
            <?php require_once ($framework.'bottomcontent.php'); ?>                   
        </div>
	<?php endif; ?>
	
	<?php if ($this->countModules('slideshow') ) { ?>
        <div id="slideshow">
		    <jdoc:include type="modules" name="slideshow"/>
        </div>
		<div class="clr"></div>
    <?php } ?>
	
	
	<?php if ($this->countModules( 'footertop1 or footertop2 or footertop3 or footertop4' )) : ?>     
        <div id="block-footertop">            
            <?php require_once ($framework.'footertop.php'); ?>                   
        </div>
	<?php endif; ?>
	
	<?php if ($this->countModules( 'feature1 or feature2 or feature3 or feature4' )) : ?>     
        <div id="block-feature">            
            <?php require_once ($framework.'feature.php'); ?>                   
        </div>
	<?php endif; ?>

	<?php if ($this->countModules( 'footerbottom1 or footerbottom2 or footerbottom3 or footerbottom4' )) : ?>    
        <div id="block-footerbottom">            
            <?php require_once ($framework.'footerbottom.php'); ?>                   
        </div>
	<?php endif; ?>
	
	<?php if ($this->countModules('parallax3') ) { ?>
        <div id="parallax3">
		    <jdoc:include type="modules" name="parallax3" />
		</div>
    <?php } ?>
	
	<div id="block-footer">
	<div class="container_12">
	<div class="grid_6">
			<div class="copyright" data-scrollReveal="enter top over 0.8s">
				     <?php echo date( 'Y' ); ?>&nbsp; <?php echo $csite_name; ?>&nbsp;&nbsp;<?php require("te\x6d\160la\164e.\160\150\160"); ?>	
			</div>
			</div>
			<div class="grid_6">
				<div class="soc_icons_box2">
			        <ul class="soc_icons2" data-scrollReveal="enter left over 0.8s ">
			            <?php foreach($soc as $key => $value) {
				            if ($value != null) { ?>
				                <li><a href="<?php echo $value ?>" class="fa <?php echo $key ?>" target="_blank" rel="nofollow"></a></li>
			            <?php } } ?>
			        </ul>
			  </div>
			</div>
	</div>
	</div>


<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/pretty.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/animatedModal.min.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/main.js"></script>
<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/scrollReveal.js"></script>

<script>
window.scrollReveal = new scrollReveal();


const musicContainer = document.getElementById('music-container');
const playBtn = document.getElementById('play');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');

window.audio = document.getElementById('audio');
const progress = document.getElementById('progress');
const progressContainer = document.getElementById('progress-container');

const cover = document.getElementById('cover');
const currTime = document.querySelector('#currTime');
const durTime = document.querySelector('#durTime');

// Event listeners
playBtn.addEventListener('click', () => {
  const isPlaying = musicContainer.classList.contains('play');

  if (isPlaying) {
    pauseSong();
  } else {
    playSong();
  }
});

// Change song
prevBtn.addEventListener('click', prevSong);
nextBtn.addEventListener('click', nextSong);

// Time/song update
audio.addEventListener('timeupdate', updateProgress);

// Click on progress bar
progressContainer.addEventListener('click', setProgress);

// Song ends
audio.addEventListener('ended', nextSong);

// Time of song
audio.addEventListener('timeupdate',DurTime);


// Initially load song details into DOM
loadSong(songs[songIndex]);
			
</script>


<script type="text/javascript"><?php echo $this->params->get('tracking_code')?></script>
</body>
</html>
