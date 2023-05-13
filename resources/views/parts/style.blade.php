<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<link href=https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css rel="stylesheet">
<style>
body {
  font-family: 'Roboto', sans-serif;
  padding: 0;
  margin: 0;
}
 
small {
  font-size: 12px;
  color: rgba(0, 0, 0, 0.4);
}
 
h1 {
  text-align: center;
  padding: 50px 0;
  font-weight: 800;
  margin: 0;
  letter-spacing: -1px;
  color: inherit;
  font-size: 40px;
}
 
 
h2 {
  text-align: center;
  font-size: 30px;
  margin: 0;
  font-weight: 300;
  color: inherit;
  padding: 50px;
}
 
.center {
  text-align: center;
}
 
 
section {
  height: 100vh;
}
 
/* NAVIGATION */
nav {
  width: 100%;
  margin: 0 auto;
  background: #f1f2f6;
  padding: 50px 0;
  box-shadow: 0px 5px 0px #dfe4ea;
}
 
nav ul {
  list-style: none;
  text-align: center;
}
nav ul li {
  display: inline-block;
}
nav ul li a {
  display: block;
  padding: 15px;
  text-decoration: none;
  color: #aaa;
  font-weight: 800;
  margin: 0 10px;
}
nav ul li a,
nav ul li a:after,
nav ul li a:before {
  transition: all .5s;
}
nav ul li a:hover {
  color: #555;
}
 
 
 
/* stroke */
nav.stroke ul li a,
nav.fill ul li a {
  position: relative;
}
nav.stroke ul li a:after,
nav.fill ul li a:after {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  width: 0%;
  content: '.';
  color: transparent;
  background: #333;
  height: 1px;
}
nav.stroke ul li a:hover:after {
  width: 100%;
}
 
nav.fill ul li a {
  transition: all 2s;
}
 
nav.fill ul li a:after {
  text-align: left;
  content: '.';
  margin: 0;
  opacity: 0;
}
nav.fill ul li a:hover {
  color: #023f1c;
  z-index: 1;
}
nav.fill ul li a:hover:after {
  z-index: -10;
  animation: fill 1s forwards;
  -webkit-animation: fill 1s forwards;
  -moz-animation: fill 1s forwards;
  opacity: 1;
}
 
/* Circle */
nav.circle ul li a {
  position: relative;
  overflow: hidden;
  z-index: 1;
}
 
nav.circle ul li a:after {
  display: block;
  position: absolute;
  margin: 0;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  content: '.';
  color: transparent;
  width: 1px;
  height: 1px;
  border-radius: 50%;
  background: transparent;
}
nav.circle ul li a:hover:after {
  -webkit-animation: circle 1.5s ease-in forwards;
}
 
/* SHIFT */
nav.shift ul li a {
  position:relative;
  z-index: 1;
}
nav.shift ul li a:hover {
  color: #91640F;
}
nav.shift ul li a:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  margin: auto;
  width: 100%;
  height: 1px;
  content: '.';
  color: transparent;
  background: #F1C40F;
  visibility: none;
  opacity: 0;
  z-index: -1;
}
nav.shift ul li a:hover:after {
  opacity: 1;
  visibility: visible;
  height: 100%;
}
 
 
/* Blend */
nav.blend ul li a {
  position: relative;
  border-radius: 5px;
  overflow: hidden;
  z-index: 1;
}
nav.blend ul li a:hover {
  color: #fff;
}
nav.blend ul li a:before,
nav.blend ul li a:after {
  position: absolute;
  width: 0px;
  height: 100%;
  top: 0;
  bottom: 0;
  background: #2f3542;
  transition: all .5s;
  margin: auto;
  content: '.';
  color: transparent;
  z-index: -1;
  opacity: 0.75;
}
nav.blend ul li a:before {
  left: 0;
}
nav.blend ul li a:after {
  right: 0;
}
 
nav.blend ul li a:hover:after,
nav.blend ul li a:hover:before {
  width: 100%;
}
 
/* DROWN */
 
nav.drown ul li a {
  position: relative;
  overflow: hidden;
  z-index: 1;
}
 
nav.drown ul li a:hover {
  color: #fff;
}
 
nav.drown ul li a:before {
  background: #fff;
  content: '.';
  color: transparent;
  position: absolute;
  width: 500%;
  top: 100px;
  right: 300px;
  height: 300px;
  z-index: -1;
}
nav.drown ul li a:hover:before {
  left: auto;
  bottom: auto;
  right: -50%;
  top: 0;
  background: #89C52B;
}
 
 
 
/* Keyframes */
@-webkit-keyframes fill {
  0% {
    width: 0%;
    height: 1px;
  }
  50% {
    width: 100%;
    height: 1px;
  }
  100% {
    width: 100%;
    height: 100%;
    background: #2ECC71;
  }
}
 
/* Keyframes */
@-webkit-keyframes circle {
  0% {
    width: 1px;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    margin: auto;
    height: 1px;
    z-index: -1;
    background: #eee;
    border-radius: 100%;
  }
  100% {
    background: #aaa;
    height: 5000%;
    width: 5000%;
    z-index: -1;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    margin: auto;
    border-radius: 0;
  }
}
</style>