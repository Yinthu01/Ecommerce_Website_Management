<?php include('partials-front/menu.php'); ?>

    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Therapy Lab</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}

/* CSS for All */
*{
    margin: 0 0;
    padding: 0 0;
    font-family: Arial, Helvetica, sans-serif;
}
.container{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.container2{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}

.container3{
    width: 80%;
    margin: 0 auto;
    padding: 1%;
}
.img-responsive{
    width: 100%;
}
.img-curve{
    border-radius: 15px;
}

.text-right{
    text-align: right;
}
.text-center{
    text-align: center;
    color: rgb(20, 20, 20);
}
.text-left{
    text-align: left;
}
.text-white{
    color: #ffffff;
}

.text-white2{
    color: #ffffff;
}
.clearfix{
    clear: both;
    float: none;
}

.row{
    display: flex;
    align-items: right;
    flex-wrap: wrap;
    margin-top: 80px;
    justify-content: space-around;
    padding: 60px;
    text-align: justify;
    color: #747475;

}
.don{
    text-align: center;
    font-size: 27px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.typeme{
    font-size: 24px;
    font-weight: lighter;
    font-style: italic;
}

a{
    color: #ff6b81;
    text-decoration: none;
}
a:hover{
    color: #ff4757;
}

.btn{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn2{
    padding: 1%;
    border: none;
    font-size: 1rem;
    border-radius: 5px;
}
.btn-primary{
    background-color: #5ebff7;
    color: white;
    cursor: pointer;
}
.btn-primary:hover{
    color: white;
    background-color: #ff4757;
}

.btn-primary2{
    background-color: #ff4757;
    color: white;
    cursor: pointer;
}
.btn-primary2:hover{
    color: white;
    background-color: #054063;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h2{
    color: #2f3542;
    font-size: 2rem;
    margin-bottom: 2%;
}
h3{
    font-size: 1.5rem;
}
.float-container{
    position: relative;
}
.float-container2{
    position: relative;
}
.line{
    color: #626263;
    size: 1px;
}
.float-text{
    position: absolute;
    bottom: 50px;
    left: 40%;
}
fieldset{
    border: 1px solid white;
    margin: 5%;
    padding: 3%;
    border-radius: 5px;
}


/* CSSS for navbar section */

.logo{
    width: 10%;
    float: left;
}
.menu{
    line-height: 60px;
}
.menu ul{
    list-style-type: none;
}

.menu ul li{
    display: inline;
    padding: 1%;
    font-weight: bold;
}


/* CSS for product SEarch Section */

.food-search{
    background-image: url(../images/page.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 7% 0;
}

.food-search input[type="search"]{
    width: 50%;
    padding: 1%;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
}
/* CSS for Food SEarch Section2 */

.food-search2{
    background-color: #5ebff7;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    padding: 7% 0;
}

.food-search2 input[type="search"]{
    width: 50%;
    padding: 1%;
    font-size: 1rem;
    border: none;
    border-radius: 5px;
}


/* CSS for Categories */
.categories{
    padding: 4% 0;
}

.box-3{
    width: 28%;
    float: left;
    margin: 2%;
}


/* CSS for Food Menu */
.food-menu{
    background-color: #ececec;
    padding: 4% 0;
}
.food-menu-box{
    width: 43%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}
.food-menu2{
    background-color: #ececec;
    padding: 4% 0;
}
.food-menu-box2{
    width: 25%;
    margin: 1%;
    padding: 2%;
    float: left;
    background-color: white;
    border-radius: 15px;
}

.food-menu-img{
    width: 20%;
    float: left;
}
.food-menu-img2{
    width: 100%;
    float: left;
}

.food-menu-desc{
    width: 70%;
    float: left;
    margin-left: 8%;
}
.food-menu-desc2{
    width: 70%;
    float: left;
    margin-left: 8%;
}

.food-price{
    font-size: 1.2rem;
    margin: 2% 0;
}
.food-detail{
    font-size: 1rem;
    color: #747d8c;
}


/* CSS for Social */
.social ul{
    list-style-type: none;
}
.social ul li{
    display: inline;
    padding: 1%;
}

/* for Order Section */
.order{
    width: 50%;
    margin: 0 auto;
}
.input-responsive{
    width: 96%;
    padding: 1%;
    margin-bottom: 3%;
    border: none;
    border-radius: 5px;
    font-size: 1rem;
}
.order-label{
    margin-bottom: 1%; 
    font-weight: bold;
}

/* CSS for Donation */
.donation-container {
	height: 400px;
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	font-size: 12px;
	text-transform: uppercase;
	margin-top: 30px;
}

.donation-box {
	width: 390px;
	height: 386px;
	background-color: #F5F5F5;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	position: relative;
	margin-left: auto;
	margin-right: auto;
	
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	-o-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
}

.donation-box .title {
	background-color: #5ebff7;
	width: 100%;
	border-top-left-radius: 4px;
	border-top-right-radius: 4px;
	color: white;
	text-align: center;
	padding-top: 12px;
	padding-bottom: 12px;
	font-size: 15px;
}

.donation-box .donate-button {
	background-color: #5ebff7;
	width: 100%;
	color: white;
	text-align: center;
	padding-top: 12px;
	padding-bottom: 12px;
	font-size: 18px;
	bottom: 0px;
	position: absolute;
	cursor: pointer;
	font-weight: 800;
}

.donation-box .fields {
	width: 59%;
	display: block;
	position: absolute;
	top: 60px;
	left: 15px;
}

.donation-box .fields input {
	width: 90%;
	font-size: 17px;
	padding: 10px;
	border-radius: 4px;
	border-width: 0px;
	color: #5C5C5C;
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	margin-bottom: 10px;
	-webkit-font-smoothing: antialiased;
}

::-webkit-input-placeholder {
   color: #cdcdcd;
   font-size: 15px;
}

:-moz-placeholder { /* Firefox 18- */
   color: #cdcdcd;
   font-size: 15px;
}

::-moz-placeholder {  /* Firefox 19+ */
   color: #cdcdcd;
   font-size: 15px; 
}

:-ms-input-placeholder {  
   color: #cdcdcd;
   font-size: 15px;
}

.donation-box .amount {
	width: 30%;
	display: block;
	position: absolute;
	top: 60px;
	right: 15px;
}

.donation-box .amount .button {
	width: 100%;
	background-color:  #ff4757;
	margin-bottom: 10px;
	text-align: center;
	color: white;
	padding: 15px 0px 15px 0px;
	border-radius: 4px;
	font-size: 20px;
	cursor: pointer;
	
	-webkit-transition: 400ms background-color;
	-moz-transition: 800ms opacity, 800ms right;
	-ms-transition: 800ms opacity, 800ms right;
	-o-transition: 800ms opacity, 800ms right;
	transition: 200ms background-color;
}

.donation-box .amount .button:hover {
	background-color: #393939;
}

.donation-box .amount .button.selected {
	background-color:  #ff4757;
}

.donation-box .amount .button input {
	min-width: 34px;
	font-size: 20px;
	font-weight: 500;
	border: none;
	background-color: transparent;
	color: white;
	font-family: Montserrat, sans-serif;
	font-size: 20px;
	font-stretch: normal;
	font-style: normal;
	font-variant: normal;
	font-weight: 500;
	border-bottom: 2px dashed white;
	-webkit-font-smoothing: antialiased;
	
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	-o-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
}

.set-amount {
	max-width: 96px;
}

.switch {
  position: absolute;
  top: 190px;
  left: 15px;
  margin: 20px auto;
  height: 26px;
  width: 58.5%;
  background: white;
  border-radius: 3px;
}

.switch-label {
  position: relative;
  z-index: 2;
  float: left;
  width: 49%;
  line-height: 26px;
  font-size: 11px;
  color: #5C5C5C;
  text-align: center;
  cursor: pointer;
  font-weight: bold;
}
.switch-label:active {
  font-weight: bold;
}

.switch-label-off {
  padding-left: 2px;
}

.switch-label-on {
  padding-right: 2px;
}

.switch-input {
  display: none;
}
.switch-input:checked + .switch-label {
  font-weight: bold;
  color: rgba(0, 0, 0, 0.65);
  
  -webkit-transition: 0.15s ease-out;
  -moz-transition: 0.15s ease-out;
  -o-transition: 0.15s ease-out;
  transition: 0.15s ease-out;
}
.switch-input:checked + .switch-label-on ~ .switch-selection {
  left: 114px;
}

.switch-selection {
  display: block;
  position: absolute;
  z-index: 1;
  top: 2px;
  left: 2px;
  width: 49%;
  height: 22px;
  background: #5ebff7;
  border-radius: 3px;
  background-color: #5ebff7;
  
  -webkit-transition: left 0.15s ease-out;
  -moz-transition: left 0.15s ease-out;
  -o-transition: left 0.15s ease-out;
  transition: left 0.15s ease-out;
}

.checkboxes {
	position: absolute;
	top: 242px;
	left: 13px;
}

.checkboxes label {
	position: relative;
	top: -8px;
	font-size: 13px;
	color: gray;
}

.checkbox {
	-webkit-appearance: none;
	background-color: #fafafa;
	border: 1px solid #5ebff7;
	padding: 9px;
	border-radius: 3px;
	display: inline-block;
	position: relative;
	
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	-o-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
}

.checkbox:active, .checkbox:checked:active {
	
}

.checkbox:checked {
	background-color: #5ebff7;
	border: 1px solid #5ebff7;
	color: white;
}

.checkbox:checked:after {
	content: '\2714';
	font-size: 14px;
	position: absolute;
	top: 0px;
	left: 3px;
	color: white;
}

.confirm {
	display: none;
	position: absolute;
	top: 335px;
	left: 15px;
	right: 15px;
	font-size: 16px;
	
	-webkit-transition: all 0.15s ease-out;
	-moz-transition: all 0.15s ease-out;
	-o-transition: all 0.15s ease-out;
	transition: all 0.15s ease-out;
}

.confirm i {
	font-weight: bold;
	text-decoration: underline;
	font-style: normal;
}

/* CSS for Mobile Size or Smaller Screen */

@media only screen and (max-width:768px){
    .logo{
        width: 80%;
        float: none;
        margin: 1% auto;
    }

    .menu ul{
        text-align: center;
    }

    .food-search input[type="search"]{
        width: 90%;
        padding: 2%;
        margin-bottom: 3%;
    }

    .btn{
        width: 91%;
        padding: 2%;
    }

    .food-search{
        padding: 10% 0;
    }

    .categories{
        padding: 20% 0;
    }
    h2{
        margin-bottom: 10%;
    }
    .box-3{
        width: 100%;
        margin: 4% auto;
    }

    .food-menu{
        padding: 20% 0;
    }

    .food-menu-box{
        width: 90%;
        padding: 5%;
        margin-bottom: 5%;
    }
    .social{
        padding: 5% 0;
    }
    .order{
        width: 100%;
    }
}

</style>
</head>
<body>
<hr>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

    
  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="images/floating.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Theropy Lab</h1><br>
      <h5 class="w3-center">Tradition since 2022</h5>
      <p class="w3-large">The Therapy Lab was initially established to participate in the Ecobiz Challenge Season 4, 2022 competition. After winning second runner-up in the competition, this group saw a brilliant opportunity ahead and decided to continue the social business they had worked on for almost a year. LeoLeo Candela is the 'eldest child' or the first product developed by Therapy Lab. LeoLeo Candela is the name of scented candles made from 50% used cooking oil collected from the eateries nearby AIU. 
    Therapy Lab buys used cooking oil at a reasonable price quoted by the restaurant owners. This action is taken from the team’s awareness that most restaurant owners often throw used cooking oil into nearby drains as their simple and quick solution to eliminate the used oil. It also aims to increase the workforce in producing scented candles, which are increasingly popular and in demand.</p>
      </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Our Team</h1><br>
      <h4>Nur Athirah Zul Fikar Ali </h4>
      <p class="w3-text-grey">Bac of Business Administration-Marketing</p><br>
    
      <h4>HNur Aneira Safiah Azam </h4>
      <p class="w3-text-grey">Bac in Early Childhood Education</p><br>
    
      <h4>Nur Iman Masri </h4>
      <p class="w3-text-grey">Bac of Elementary Education</p><br>
    
      <h4>Nur Rihhadatul'aisy Jasmi</h4>
      <p class="w3-text-grey">Bac of Elementary Education</p><br>
    
      
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="images/Therapy.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>
    

</body>
</html>

    