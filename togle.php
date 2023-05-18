<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>togle</title>
     <style>
        body {
  min-width: 800px;
  background: #ff00cc;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #333399, #ff00cc);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #333399, #ff00cc); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  margin:0px;
}


#trapezoid {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  border: 80px solid rgba(0,0,0,0);
  border-top: 0 solid;
  border-bottom: 100px solid rgba(1, 1, 1, .4);
  -webkit-border-radius: 20px 20px 0 0;
  border-radius: 20px 20px 0 0;
  font: normal 100%/normal Arial, Helvetica, sans-serif;
  color: rgba(0,0,0,0.7);
  -o-text-overflow: clip;
  text-overflow: clip;
  -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
  margin-top:-53px;
  width: 700px;
  position: relative;
  transition: all 0.7s ease;
  padding-left:7%;
}

#trapezoid a, .subnavbtn {
 -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
}

.sub-home {
  display: none;
  position: absolute;
  right: 0;
  left: 0; 

  z-index: 1;   
  transform: perspective(-10px);
}

#trapezoid:hover .sub-home {
  justify-content: center;
  margin-top: 53px;
}

.navbar {
  position: sticky;
  top: 0;
  display:flex;
  overflow:hidden;
  justify-content: center;
  height: 100px;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 25px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 4px;
  transition: all 0.5s ease;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 25px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 4px;
  transition: all 0.5s ease;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background:#8CA6DB;
  color: black;
  border-radius:5px;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  width: 100%;
  z-index: 1;   
  transform: perspective(-10px);
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none; 
}

.subnav-content a:hover {
  background:#B993D6;
  color: black;
}

.subnav:hover .subnav-content {
  display: flex;
  justify-content: center;
}


section  {
  margin:0em 10em 10em 10em;
  padding:3em 10em 3em 10em;
}

h1{
  color: #111; 
  font-family: 'Helvetica Neue', sans-serif; 
  font-size: 200px; 
  font-weight: bold; 
  letter-spacing: -1px; 
  text-align: center;
  padding: 0;
  margin: 0;
}

p {
  color: #111; 
  font-family: 'Calibri', sans-serif; 
  font-size: 25px; 
  line-height: 1.5;
}

hr {
  background-color: #000;
}


    </style>

    <script>
        $('.expandHome').mouseover(function() {
  $('.sub-home').css({
        'display': 'block'
    }); 
});
$('.subnavbtn').mouseover(function() {
  $('.sub-home').css({
        'display': 'none'
    }); 
});

$('#trapezoid').mouseleave(function() {
  $('#trapezoid').css({
        'margin-top': '-53px'
    }); 
    $('.sub-home').css({
        'display': 'none'
    }); 
}).mouseenter(function() {
  $('#trapezoid').css({
        'margin-top': '0px'
    }); 
});
              

    </script>

</head>
<body>
<nav class="navbar">
  <div id="trapezoid">
    <a class="sub-home" href="#">Home</a>
    <a href="#About" class="expandHome">About</a>
     <div class="subnav">
     <button class="subnavbtn">Clients<i class="fa fa-caret-down"></i></button>
       <div class="subnav-content">
        <div id="subnav-trapezoid">
          <a href="#Clients">Burger King</a>
          <a href="#Clients">Southwest Airlines</a>
          <a href="#Clients">Levi Strauss</a>
        </div>
       </div>
    </div>
  
     <div class="subnav">
     <button class="subnavbtn">Services<i class="fa fa-caret-down"></i></button>
       <div class="subnav-content">
        <div class="subnav-trapezoid">
          <a href="#Services">Print Design</a>
          <a href="#Services">Web Design</a>
          <a href="#Services">Mobile App Development</a>
         </div>
       </div>
      </div>
    <a href="https://codepen.io/pec-man" class="expandHome">Contact</a>
  </div>
</nav>

<section id="About">
  <h1>About</h1>
  <hr> 
  <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
</section>
<section id="Clients">
   <h1>Clients</h1>
   <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
  <hr> 
</section>
<section id="Services">
    <h1>Services</h1>
   <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
    <hr> 
</section>
</body>
</html>