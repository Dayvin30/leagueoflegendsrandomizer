<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>

<?php
$image=randomChampion();
$name=$image;
$name = substr($name, 19);
$name=substr($name, 0, -4);
$name=ucfirst($name);
$probuild=$name;
$probuild= str_replace("&nbsp","",$probuild);
?>


<div class="parent">


<div class="title"> League of Legends randomizer</div>

      <div class="button" onclick="window.location.reload();" > <span></span>
  <span></span>
  <span></span>
  <span></span>
  Tirer au sort !</div>

     <div class="champion" onselectstart="return false"  >
     <a href="https://probuildstats.com/champion/<?php echo $probuild; ?>" target="_blank">
      <img style="border: 8px solid;  border-image: linear-gradient(65deg, #6877e6, #e668dc) 1; min-width: 300px; max-width: 300px;"id="changeme" src="images/<?php echo $image; ?>" alt="" />
    </a>  
    
    </div> 



     <div class="name"><?php echo $name ?></div>

     <div class="modal">
  <div class="interior">
    <a class="btn" href="#open-modal">👋 Informations</a>
  </div>
</div>
<div id="open-modal" class="modal-window">
  <div>
    <a href="#" title="Close" class="modal-close">Close</a>
    <h1>Bonjour !</h1>
    <div>Le but de ce site est de tirer au sort un champion aléatoire. <br><br> Vous devrez le jouer obligatoirement dans votre prochaine game. <br><br> Vous êtes libre du role ou vous voulez jouer le personnage. <br><br> Amusez vous en normal game avec vos amis !</div>
    <br>
  </div>
</div>
</div>





</div>








</body>
</html>


<?php function randomChampion(){
$dir = "images/";
$images = scandir($dir);
$i = rand(2,161);
return($images[$i]);
}

function TestRandomChampion(){
  $dir = "images/";
  $images = scandir($dir);
  $y=0;
  while($y<200){
    $i = rand(2,161);
    echo($i); echo('&nbsp');echo('&nbsp');echo('&nbsp'); $y++;
  }
  }
  ?>

<script>
/*
function changeImage() {

 <?php $i = rand(0,161); ?>
 image= "<?php echo(randomChampion($i))?>" //call the php add function
var url="images/";


document.getElementById("changeme").src = url + image;

//alert(image);

}
 */




</script>