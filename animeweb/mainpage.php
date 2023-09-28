<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
        
        <div class="carousel-item active">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <rect width="100%" height="100%" fill="#777" /></svg>

          <div class="container">
            <div class="carousel-caption text-left">
              <h1>Animesub</h1>
              <?php if(empty($_SESSION['email'])): ?>
              <p>Become member of the website now and watch anime to your heart content, with member benefit such as no ads and downloable content.</p>
              <?php endif?>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <rect width="100%" height="100%" fill="#777" /></svg>

          <div class="container">
            <div class="carousel-caption">
              <h1>About us</h1>
              <p>To learn about why we make the website </p>
              <p><a class="btn btn-lg btn-primary" onclick href="file:///Users/ducanhduong/Desktop/CW/save%20file/pag2.html" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <rect width="100%" height="100%" fill="#777" /></svg>

          <div class="container">
              <h1>Genres</h1>
              <p>to discover more content of anime and types</p>
              <p><a class="btn btn-lg btn-primary" onclick href="444.php" role="button">Browse anime series</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    
