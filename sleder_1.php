<!DOCTYPE html>
<html>
<head>
	<title></title>

<script>
	$(document).ready(function(){
    var totalWidth = 0;
    var positions = [];

    $('#slides .slide').each( function(i) {
        
        // Get slider widths
        positions[i] = totalWidth;
        totalWidth += $(this).width();
        
        // check widths
        if( !$(this).width() ) {
            alert('Please make sure all images have widths!');
            return false;
        }
    });
    
    // set width
    $('#slides').width(totalWidth);
    
    // menu item click handler
    $('#menu ul li a').click( function(e, keepScroll) {
        
        // remove active calls and add inactive
        $('li.product').removeClass('active').addClass('inactive');
        
        // Add active class to the partent
        $(this).parent().addClass('active');
        
        var pos = $(this).parent().prevAll('.product').length;
        
        $('#slides').stop().animate({marginLeft:-positions[pos] + 'px'}, 450);
        
        // Prevent default
        e.preventDefault();
        
        // Stopping the autoscroll
        if(!autoScroll) {
            clearInterval(itvl);
        }   
    });
    
    // Make first image active.
    $('.product').first().addClass('active').siblings().addClass('inactive');
    
    // Auto scroll
    var current = 1;
    
    function autoScroll() {
        if (current == -1) {
            return false;
        }
        
        $( '#menu ul li a' ).eq( current % $('#menu ul li a').length ).trigger('click', true);
        current++;
    }
    
    // Durration for auto scroll
    var duration = 5;
    var itvl = setInterval( function() {
        autoScroll();
    }, duration * 1000);
    
});
</script>



	<style type="text/css">
		body {
	color: #666;
	font-size: 13px;
	background: #f4f4f4;
	font-family: "Arial", sans-serif;
}

#container {
	margin: 15px auto;
	text-align: center;
	width: 900px;
	position: relative;
}

a,
a:visited {
	color: #0196e3;
	text-decoration: none;
	outline: none;
}

a:hover {
	text-decoration: underline;
}

p {
	padding-top: 10px;
	text-align: center;
}

header {
	background: #fff url('http://timivey.com/external/codepen/thumbslider/panel.jpg') repeat-x bottom center;
	height: 30px;
	padding-top: 10px;
    border-bottom: 1px solid #ccc;
    margin: 0;
    padding: 0;
}

#slider {
	-moz-box-shadow: 0 0 3px #aaa;
	-webkit-box-shadow: 0 0 3px #aaa;
	box-shadow: 0 0 3px #aaa;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	background: #fff url('http://timivey.com/external/codepen/thumbslider/panel.jpg') repeat-x bottom center;
	width: 900px;
	overflow: hidden;
}

#slides {
	height: 240px;
	width: 900px;
	overflow: hidden;
    margin: 0;
    padding: 20px 0 0 0;
}

.slide{
	float: left !important;
}

#menu {
	height: 45px;
}

#menu ul {
	margin: 0;
	padding: 0;
}

#menu li {
	width: 60px;
	margin-left: -4px;
	display: inline-block;
	list-style: none;
	height: 45px;
	overflow: hidden;
}

#menu li.active,
#menu li.active:hover {
	background: url('http://timivey.com/external/codepen/thumbslider/active_bg.png') no-repeat;
}

#menu li.active {
	cursor: default;
}

#menu .sep {
	width: 2px;
	background: url('http://timivey.com/external/codepen/thumbslider/seperator.png') no-repeat right;
	margin-right: -2px;
}

#menu li a {
	display: block;
	background: url('http://timivey.com/external/codepen/thumbslider/seperator.png') no-repeat right;
	height: 35px;
	padding-top: 10px;
}

#menu a img {
	border: none;
}


	</style>
</head>
<body>
<div id="container">
    <div id="slider">
        <header>
            <h3>jQuery Thumbnail slider</h3>
        </header>
        <div id="slides">
            <div class="slide"><img src="assets/img/B3.jpg" width="900" height="500"></div>
            <div class="slide"><img src="assets/img/B4.png" width="900" height="500"></div>
            <div class="slide"><img src="assets/img/B5.jpg" width="900" height="500"></div>
            <div class="slide"><img src="assets/img/B3.jpg" width="900" height="500"></div>
        </div>

        <nav id="menu">
            <ul>
                <li class="sep"></li>
                <li class="product">
                    <a href="">
                        <img src="assets/img/B3.jpg" alt="thumbnail">
                    </a>
                </li>

                <li class="product">
                    <a href="">
                        <img src="assets/img/B4.png" alt="thumbnail">
                    </a>
                </li>

                <li class="product">
                    <a href="">
                        <img src="ssets/img/B5.jpg" alt="thumbnail">
                    </a>
                </li>

                <li class="product">
                    <a href="">
                        <img src="assets/img/B3.jpg" alt="thumbnail">
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
</body>
</html>