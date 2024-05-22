<?php
/*
 * Template Name: Peliculas TMDB
 * Template Post Type: post, page, product
 */

defined('ABSPATH') || exit;

get_header();
?>

              <?php the_post();?>

              <?php the_content();
              
              
            //echo $movie_overview = $data['overview'];
            //echo $movie_release_date = $data['release_date'];

              ?>

  <!-- Jumbotron -->


    <section id="foto-principal" class="container mt-3">
	<div class="card text-bg-dark">
            <img src="https://www.themoviedb.org/t/p/original<?php echo $tmdb_movie_data['backdrop_path'] ?>" class="card-img" alt="...">
            <div class="card-img-overlay d-flex flex-column mascara">
                <div class="mt-auto">
                   <h1 class="card-title sombra"><?php echo $tmdb_movie_data['title']; ?></h1>
                   <p class="card-text sombra"><?php echo $tmdb_movie_data['overview'] ?></p>
               </div>
            </div>
        </div>    
  </section>
<!-- fin Jumbotron -->

  <!-- actores -->

  <section id="actores">
    <div class="container max">

      <h2 class="text-center">Reparto</h2>

      <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card">
      <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2<?php echo $tmdb_movie_data['credits']['cast'][0]['profile_path']?>" class="card-img-top" alt="Tom Hanks">
      <div class="card-body">
        <h5 class="card-title"><?php echo $tmdb_movie_data['credits']['cast'][0]['name']?></h5>
        <p class="card-text"><?php echo $tmdb_movie_data['credits']['cast'][0]['character']?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2<?php echo $tmdb_movie_data['credits']['cast'][1]['profile_path']?>" class="card-img-top" alt="Tom Sizemore">
      <div class="card-body">
        <h5 class="card-title"><?php echo $tmdb_movie_data['credits']['cast'][1]['name']?></h5>
        <p class="card-text"><?php echo $tmdb_movie_data['credits']['cast'][1]['character']?></p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2<?php echo $tmdb_movie_data['credits']['cast'][2]['profile_path']?>" class="card-img-top" alt="Edward Burns">
      <div class="card-body">
        <h5 class="card-title"><?php echo $tmdb_movie_data['credits']['cast'][2]['name']?></h5>
        <p class="card-text"><?php echo $tmdb_movie_data['credits']['cast'][2]['character']?></p>
      </div>
    </div>
  </div>
</div>

<p class="mt-3">Matt Damon, Barry Pepper, Giovanni Ribisi, Adam Goldberg, Jeremy Davies, Vin Diesel, Ted Danson, Paul Giamatti, Max Martini, Dennis Farina, Harrison Young, Kathleen Byron, Harve Presnell, Dale Dye, Leland Orser, Bryan Cranston, Nathan Fillion, Ryan Hurst, Corey Johnson, Andrew Scott, Joerg Stadler, Dylan Bruno, Rolf Saxon</p>

    </div>
  </section>


  <!-- sinopsis -->
<section id="sinopsis">

  <div class="container mt-5">
    <div class="row">
      <div class="col">
        <img src="https://www.themoviedb.org/t/p/original/q8a7vGDNCvFYaj2K7hCCMhxCRo5.jpg" alt="Sinopsis" class="img-fluid">
      </div>

      <div class="col">
        <h3>Sinopsis</h3>
        <p>Segunda Guerra Mundial, 1944. Tras el desembarco de los Aliados en Normandía, a un grupo de soldados americanos se le encomienda una peligrosa misión: poner a salvo al soldado James Ryan. Los hombres de la patrulla del capitán John Miller deben arriesgar sus vidas para encontrar a este soldado, cuyos tres hermanos han muerto en la guerra. Lo único que se sabe del soldado Ryan es que se lanzó con su escuadrón de paracaidistas detrás de las líneas enemigas. (FILMAFFINITY)</p>
      </div>

    </div>
  </div>

</section>


<!-- director -->

<section id="director">

  <div class="container mt-5">
	<div class="row">
		<div class="col-md"><h3>Steven Spielberg</h3>
			<p>Steven Allan Spielberg (18 de diciembre de 1946) es un director, guionista y productor de cine estadounidense.​ Se lo considera uno de los pioneros de la era del Nuevo Hollywood y es también uno de los directores más reconocidos y populares de la industria cinematográfica mundial.</p>
		</div>
		<div class="col-md">
			<img src="https://www.themoviedb.org/t/p/w300_and_h450_bestv2/tZxcg19YQ3e8fJ0pOs7hjlnmmr6.jpg" class="img-fluid" alt="Sinopsis">
		</div>
  </div>
	</div>
</section>

<!-- fin director -->

<!-- ficha técnica -->

	<section class="bg-dark text-light p-5 mt-5">
  <div class="container margen mt-5">
	<div class="row actores">
		<div class="col datos"><p class="h6 text-center">Año de estreno</p>
			<p class="h3 text-center">1998</p>
		</div>
		<div class="col datos">
			<p class="h6 text-center">Guión</p>
			<p class="h3 text-center">Robert Rodat</p>
		</div>
		<div class="col datos"><p class="h6 text-center">Música</p>
			<p class="h3 text-center">John Williams</p>
		</div>
	</div>
  </div>
	</section>

<!-- fin ficha técnica -->

<!-- ficha trailer -->

	<section class="mt-5">
	<div class="container">
		<h2 class="text-center">Trailer</h2>
		<div class="ratio ratio-16x9">
			<iframe src="https://www.youtube.com/embed/S1Qj_AVu2pA" title="YouTube video" allowfullscreen></iframe>
		</div>
	</div>
	</section>

<!-- fin trailer --> 

<?php
get_footer();
