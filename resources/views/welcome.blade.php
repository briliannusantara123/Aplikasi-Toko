<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko M & M</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="icon" type="image/png" href="assets/image/kansascity.png">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <style type="text/css">
        * {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: "Lucida Grande";
  background-color: rgba(2, 21, 51, 0.9);
}

a {
  text-decoration: none;
}

.clear {
  clear: left;
}

.container {
  max-width: 1170px;
  width: 100%;
  padding: 0 15px;
  margin: 0 auto;
}

.top-wrapper {
  padding: 180px 0 100px 0;
  background-image: url(../assets/img/bg.jpg);
  background-size: cover;
  color: white;
  text-align: center;
}

.top-wrapper h1 {
  opacity: 0.7;
  font-size: 45px;
  letter-spacing: 5px;
  margin-bottom: 10px;
}

.top-wrapper p {
  opacity: 0.7;
  margin-bottom: 3px;
}

.btn-wrapper {
  text-align: center;
  margin: 20px 0;
}

.btn-wrapper p {
  margin: 10px 0;
}

.signup {
  background-color: #eb3e09;
}

.facebook {
  background-color: #3b5998;
  margin-right: 10px;
}

.twitter {
  background-color: #55acee;
}

.btn {
  padding: 12px 24px;
  color: white;
  display: inline-block;
  opacity: 0.8;
  border-radius: 4px;
  text-align: center;
}

.btn:hover {
  opacity: 1;
}

.fa {
  margin-right: 5px;
}

header {
  height: 65px;
  width: 100%;
  background-color: rgba(1, 13, 33, 0.8);
  position :fixed;
  top: 0;
  z-index: 10;
}

.logo {
  width: 75px;
  margin-top: 3px;
}

.header-left {
  float: left;
}
.header-left h2{
  padding: 0 10px;
  color: white;
  display: block;
  float: right;
}

.header-right {
  float: right;
  margin-right: -25px;
}

.header-right a {
  line-height: 65px;
  padding: 0 25px;
  color: white;
  display: block;
  float: left;
  transition: all 0.5s;
}

.header-right a:hover {
  background-color: rgba(255, 255, 255, 0.3);
}

/* Tambahkan CSS untuk menu-icon */
.menu-icon{
  display:none;
}


.lesson-wrapper {
  padding-bottom: 80px;
  padding-left: 5%;
  padding-right: 5%;
  background-color: rgba(15, 15, 15);
  text-align: center;
}

.heading {
  padding-top: 80px;
  padding-bottom: 50px;
  color: #5f5d60;
}

.heading h2 {
  color: white;
  font-weight: normal;
}

.lesson {
  float: left;
  width: 25%;
}

.lesson-icon {
  position: relative;
}

.lesson-icon p {
  position: absolute;
  top: 44%;
  width: 100%;
  color: white;
}
.lesson-icon img{
  width: 250px;
  border-radius: 4px;
  box-shadow: 0 7px #780606;

}
.lesson-icon1 img{
  width: 1000px;
  border-radius: 4px;
  box-shadow: 0 7px #780606;
}

.text-contents {
  width: 80%;
  display: inline-block;
  margin-top: 15px;
  font-size: 15px;
  color: #b3aeb5;
}

.heading h3 {
  color: white;
  font-weight: normal;
}
.card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   border-radius: 5px;
   padding: 20px;
   margin-top: 20px;
}

.card:hover {
   border-bottom: 2px solid #ff9478;
}
.player {
   max-width: 320px;
   min-width: 320px;
   margin: 10px;
   border-radius: 5px;
}

.message-wrapper {
  border-bottom: 1px solid #eee;
  padding-bottom: 80px;
  text-align: center;
}

.message {
  padding: 15px 40px;
  background-color: #a80808;
  cursor: pointer;
  box-shadow: 0 7px #780606;
}

.message:active {
  position: relative;
  top: 7px;
  box-shadow: none;
}

footer img {
  width: 90px;
}

footer p {
  color: white;
  font-size: 12px;
}

footer {
  padding-top: 10px;
  padding-bottom: 10px;
  
  background-color: rgba(1, 27, 69, 0.9);
  
}
.footer-left {
  float: left;
}
.footer-left h2{
  padding: 0 10px;
  color: white;
  display: block;
  float: right;
}

.footer-right {
  float: right;
  margin-right: -25px;
}

.footer-right a {
  line-height: 65px;
  padding: 0 25px;
  color: white;
  display: block;
  
  transition: all 0.5s;
}
  .copyright{
    padding-top: 10px;
  padding-bottom: 10px;
    background-color: rgba(1, 13, 33, 0.9);
    color: white;
  }
    </style>
  </head>
  <body>
    <header>
      <div class="container">
        <div class="header-left">
          <img class="logo" src="../assets/img/logo.png">
          <h2>Toko Muhidin & Maymunah</h2>
        </div>
        <span class="fa fa-bars menu-icon"></span>
        <div class="header-right">
          <a href="/login">login</a>
        </div>
      </div>
    </header>
     <div class="top-wrapper">
      <div class="container">
        <h1>SELAMAT DATANG DI,</h1>
        <h1>WEBSITE TOKO MUHIDIN & MAYMUNAH</h1>
        <p>Ini adalah website resmi Toko M & M</p>
       
        <div class="btn-wrapper">
          <a href="#" class="btn signup">Lihat Barang</a>
        </div>
      </div>
    </div>
    <div class="lesson-wrapper">
      <div class="container">
        <div class="heading">
          <h2>Kami Juga Menjual:</h2>
        </div>
        <div class="lessons">
          <div class="lesson">
            <div class="lesson-icon">
              <img src="../assets/img/products/product-1-50.png">
               
            </div>
             <p class="text-contents">Charvarius. </p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="../assets/img/products/product-2-50.png">
              
            </div>
            <p class="text-contents">Chris.</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="../assets/img/products/product-3-50.png">
              
            </div>
            <p class="text-contents">Frank.</p>
          </div>
          <div class="lesson">
            <div class="lesson-icon">
              <img src="../assets/img/products/product-4-50.png">
              
            </div>
            <p class="text-contents">Jordan.</p>
          </div>
          <div class="clear"></div>
          <div class="lesson-wrapper1">
      <div class="container1">
        <div class="heading">
          <h2>Toko Muhidin & Maymunah</h2>
        </div>
        <div class="lessons1">
          <div class="lesson1">
            <div class="lesson-icon1">
              <img src="../assets/img/m&m.jpeg">
               
            </div>
             <p class="text-contents">Toko Ini berada di Cicurug Sukabumi jawabarat tepatnya dekat alun-alun cicurug,toko ini menerima pesanan apapun dan siap kami antar pesanan kedapan rumah anda. toko ini buka 24 jam. Jika anda ingin membeli sesuatu datanglah ke toko M&M ini</p>
          </div>
        </div>
      </div>
    </div>
    <main>
    
    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
          <h2>Ingin Berlangganan?</h2>
          <h3>Ikuti website toko M&M</h3>
        </div>
        <span class="btn message">Berlangganan</span>
      </div>
    </div>
    <footer>
      
      <div class="container">
        <div class="footer-left">
          <img class="logo" src="../assets/img/logo.png">
          <h2>Toko Muhidin & Maymunah</h2>
        </div>
        
        <div class="footer-right">
          <a href="#home">Tentang Kami</a>
          <a href="#stadium">Kerja Sama</a>
          <a href="#photos">Hubungi Kami</a>
        </div>
      </div>
     
    </footer>
   <div class="copyright"><p><marquee>© 2020 Copyright: <a href="www.instagram.com/briliansatria_10">Brilian Satria Nusantara</a></marquee></p></div>
  </body>
</html>
