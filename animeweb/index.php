<?php require_once 'header.php'?>

<?php
$counter = 1;
$sliders = [
              [

                'h1' => 'Animesub',
                'p' => 'Become member of the website now and watch anime to your heart content, with member benefit such as no ads and downloable content.',
                'buttonText' =>"Sign up today",
                'link' => 'index.php'
              ],
              [

                'h1' => 'About us',
                'p' => 'To learn about why we make the website',
                'buttonText' =>"Learn more",
                'link' => 'pag2.html'

              ]

];


?>



  <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">
      <?php foreach($sliders as $slider): ?>
        <div class="carousel-item <?=$counter ==1 ? 'active': ''?>">
          <svg class="bd-placeholder-img" width="100%" height="100%"  xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
            <image href="https://images.pexels.com/photos/5558237/pexels-photo-5558237.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="100%" /> </svg></svg>

          <div class="container">
            <div class="carousel-caption">
            <?php if($counter == 1): ?>
              <?php if(!empty($_SESSION['email'])):?>
                <h1>Welcome !!</h1>
              <p>to Animesub</p>

              <?php else: ?>
                <h1><?=$slider['h1']?></h1>
                <p><?=$slider['p']?></p>

                <p><a class="btn btn-lg btn-primary" onclick href="<?=$slider['link']?>" role="button"><?=$slider['buttonText']?></a></p>
    
                    

                  </div>
               

                <?php endif?>
             

            
              <?php else: ?>
                <h1><?=$slider['h1']?></h1>
                <p><?=$slider['p']?></p>

                <p><a class="btn btn-lg btn-primary" onclick href="<?=$slider['link']?>" role="button"><?=$slider['buttonText']?></a></p>

              <?php endif;?>
            </div>
          </div>
        </div>
        <?php $counter++;?>

  <?php endforeach?>
        
        
 
       
         <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <rect width="100%" height="100%" fill="#777" />
          <image href="https://images.pexels.com/photos/3411134/pexels-photo-3411134.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="100%"/> </svg>

          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Genres</h1>
              <p>to discover more content of anime and types</p>
              <p><a class="btn btn-lg btn-primary" onclick href="444.php" role="button">Browse anime series</a></p>
            </div>
          </div>
        </div> 
      </div>

      <div class="carousel-item">
          <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <rect width="100%" height="100%" fill="#777" /></svg>

          <div class="container">
            <div class="carousel-caption text-right">
              <h1>Joining group!!</h1>
              <p>to connect with like minded people and discuss and make friends </p>
              <p><a class="btn btn-lg btn-primary" onclick href="444.php" role="button">click here to join</a></p>
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





    <div class="container marketing">

      <div class="row">
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            <image href="https://images.pexels.com/photos/14017253/pexels-photo-14017253.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="100%"/> 
          </svg>

          <h2>Demon slayer</h2>
          <p>It is the Taisho Period in Japan. Tanjiro, a kindhearted boy who sells charcoal for a living, finds his family slaughtered by a demon. To make matters worse, his younger sister Nezuko, the sole survivor, has been transformed into a demon herself.

            Though devastated by this grim reality, Tanjiro resolves to become a “demon slayer” so that he can turn his sister back into a human, and kill the demon that massacred his family..</p>
          <p><a class="btn btn-secondary" onclick href="watch2.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false" >
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" img /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            <image href="https://images.pexels.com/photos/12814469/pexels-photo-12814469.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="100%"/> 
          </svg>

          <h2>That time I reincarnate as a slime</h2>
          <p>Corporate worker Mikami Satoru is stabbed by a random killer, and is reborn to an alternate world. But he turns out to be reborn a slime!
            Thrown into this new world with the name Rimuru, he begins his quest to create a world that’s welcoming to all races.</p>
          <p><a class="btn btn-secondary" onclick href="watch.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg"
            aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text>
            <image href="https://images.pexels.com/photos/9969407/pexels-photo-9969407.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="100%"/> 
          </svg>

          <h2>I'm a spider so what</h2>
          <p>I, the protagonist, was just an ordinary high school girl, but suddenly I was reincarnated as a spider monster in a fantasy world. Not only that, but I awakened in a dungeon filled with vicious monsters. Armed with only my human knowledge and my overwhelming positivity, I'm forced to use spiderwebs and traps to defeat far stronger monsters just to stay alive... So begins the labyrinth survival story of a girl with incredible mental strength living as one of the lowest-ranked beasts!.</p>
          <p><a class="btn btn-secondary" href="watch3.php" role="button">View details &raquo;</a></p>
        </div>
      </div>




      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Anime news <span class="text-muted">It’ll blow your mind.</span>
          </h2>
          <p class="lead">All things anime news that you can read and see what is the latest release</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            <image href="https://images.pexels.com/photos/8213139/pexels-photo-8213139.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="100%"/> 
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading">Manga <span class="text-muted">Read to your heart content</span></h2>
          <p class="lead">Here you can see latest manga release and others manga that you want to read</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            <image href="https://images.pexels.com/photos/17802897/pexels-photo-17802897.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="100%"/> 
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">Anime figures and other products <span class="text-muted">Buy what you love</span></h2>
          <p class="lead">Here you can also check for figurines, funko pop or any merchandise you wish to search for</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
            height="500" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 500x500"
            preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            <image href="https://images.pexels.com/photos/4656725/pexels-photo-4656725.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" width="100%"/> 
          </svg>

        </div>
      </div>

      <hr class="featurette-divider">

    

    </div>



   <?php require_once 'footer.php'?>
