<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--my css-->
      <link rel="stylesheet"href="css/style.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <link rel="shortcut icon" href="riau.ico">
      <title>Pariwista Kampar</title>
    </head>
    <body>



  <!-- contact us-->
  <section id="contact" class="contact grey lighten-3 scrollspy">
    <div class="container">
      <h3 class="light grey-text text-darken-3 center white-text">Contact Us</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel blue darken-2 center">
          <img src="img/portfolio/airterjun1.jpg" class="responsive-img materialboxed">
          <h5>Contact</h5>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Iusto natus necessitatibus ipsam exercitationem deserunt, nulla odit quia, pariatur repellat placeat velit officia! Ipsam ullam iusto laboriosam consectetur exercitationem sit nobis.</p>
        </div>
        <ul class="collection with-header">
          <li class="collection-header"><h4>Our office</h4></li>
          <li class="collection-item">Web Programming Polkam</li>
          <li class="collection-item">JL. Letnan Boyak No. 28, Bangkinang</li>
          <li class="collection-item">Riau, Indonesia</li>
          <div class="col m3 s12">
        </div>
        </ul>
        </div>
        <div class="col m7 s12">
          <form action="proses.php" method="POST">
            <div class="card-panel">
             <h5>please fill out this form</h5>
             <div class="input-field">
               <input type="text" name="name" id="name" required class="validate"> 
               <label for="name">Name</label>
             </div>
             <div class="input-field">
               <input type="email" name="email" id="email" class="validate"> 
               <label for="email">Email</label>
             </div>
             <div class="input-field">
               <input type="text" name="phone" id="phone"> 
               <label for="phone">Phone Number</label>
             </div>
             <div class="input-field">
               <textarea name="message" id="message" class="materialize-textarea"></textarea>
               <label for="massage">Massage</label>
             </div>
             <div class="input-field">
               <input type="text" name="send" id="phone" value="<?=date('h:i:sa');?>"> 
               <label for="phone">Time</label>
             </div>
             <button type="submit" name="submit" onclick="alert('Terimakasih sarannya')" class="btn blue darken-2">Send</button>    -->
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>


  <!-- footer 
  <div class="footer">
<footer class="blue darken-2 white-text center">
    <p class="flow-text">Web Programming Polkam.Copyright 2022</p>
    <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
</footer>
</div>-->

<footer>
<div class="blue darken-2 left-align">
      <div class="new container">
      Web Programming Polkam<a class="brown-text text-lighten-3" href="http://materializecss.com">.Copyright 2022</a>
      </div>
    </div>
  </footer>









      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script>
        const sidenav = document.querySelectorAll('.sidenav');
        M.Sidenav.init(sidenav);
        const slider =document.querySelectorAll('.slider');
        M.Slider.init(slider, {
          indicators: false,
          height: 500,
          transition: 600,
          interval: 3000,
          width:500
        });
        const parallax = document.querySelectorAll('.parallax');
        M.Parallax.init(parallax);
        const materialbox = document.querySelectorAll('.materialboxed');
        M.Materialbox.init(materialbox);

        const scroll = document.querySelectorAll('.scrollspy');
        M.ScrollSpy.init(scroll,{
          scrolloffset: 50
        });

      </script>
    </body>
  </html>