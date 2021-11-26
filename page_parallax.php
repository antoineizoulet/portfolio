<!DOCTYPE html>
<html lang="fr" class="no-js">

<head>

<!-- title and meta -->
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Loola's Diner</title>
<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    
<!-- css -->
<link rel="stylesheet" href="parallax.css">
    
<!-- js -->
<script src="js/jquery-1.9.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

 <!-- favicon -->  
 <link rel="icon" type="image/png" href="img/favicon.png" />

<script>
    $(document).ready(function(){
        $("#nav-mobile").html($("#nav-main").html());
        $("#nav-trigger span").click(function(){
            if ($("nav#nav-mobile ul").hasClass("expanded")) {
                $("nav#nav-mobile ul.expanded").removeClass("expanded").slideUp(250);
                $(this).removeClass("open");
            } else {
                $("nav#nav-mobile ul").addClass("expanded").slideDown(250);
                $(this).addClass("open");
            }
        });
    });
</script>
</head>

<body>

    <div class="container">
        <div id="nav-trigger">
            <span>Menu</span>
        </div>
        <nav id="nav-main">
            <ul>
                <li><a href="index.html">Accueil</a></li>
                <li><a href="#title">Présentation</a></li>
                <li><a href="#slide1">Charte Qualité</a></li>
                <li><a href="#slide2">Menu</a></li>
                <li><a href="#slide3">F.A.Q</a></li>
                <li><a href="#footer">Contact</a></li>
            </ul>
        </nav>
        <nav id="nav-mobile"></nav>
    </div>
    
    
<div id="title" class="slide header">
  <div id="bloc_presentation">
      <h1 id="titre_presentation">Présentation</h1>
       <p id="texte_presentation">
           Steven et Charline sont deux jeunes entrepreneurs, sympathiques, ouverts d'esprits et dotés d'un grand sens de l'accueil, débarqués tout droit de la capitale avec l'idée de diversifier les offres de restaurations rapides sur le Bassin d'Arcachon. <br> 

    De l'inspiration trouvée auprès de différents restaurants existants, et auprès de leur bulldog anglais Loola, est né leur fast-food haut de gamme: Loola's Diner ! Soucieux de proposer des produits de grande qualité, ils décidèrent de vendre des burgers faits-maison à composer soi-même avec des produits frais, retraçables, et provenants de fournisseurs locaux de proximité. <br> 

    Ce concept permettant de diversifier les repas, et satisfaire les exigences de chacun, vous donnera la possibilité de découvrir et re-découvrir leurs burgers au gré de vos envies lors de toutes vos visites. <br> 

Oubliez les autres fast-foods, car après y avoir goûté à de vraies saveurs, vous ne pourrez plus vous en passer ! 
       </p>       
  
  </div>
</div>
    
<div id="slide1" class="slide">
    <div id="bloc-charte">
    <img src="img/tampon.png" id="tampon">
    <h1 id="titre_charte">Charte Qualité</h1>
    <p id="texte_charte">C'est parce que Steven et Charline mettent un point d'honneur à proposer des produits d'une grande qualité et fiabilité, qu'ils sont fiers de vous présenter leur charte qualité, véritable fil de conduite qu'ils tiennent à respecter à chaque journée, et chaque client. 
Ils vous invite également à prendre connaissance de leurs fournisseurs, afin que vous puissez voir de vous-même d'où provient la viande et à quel point la qualité est au rendez-vous !</p>
    </div>
    </div>

<div id="slide2" class="slide">
  <div id="bloc_menu">
    <h1 id="titre_menu">Menu</h1>
    <p id="texte_menu">Que de choix, que d'ingrédients, sur place ou à emporter, à vous de composer le burger qui vous fait le plus rêver !
Pour cela rien de plus simple, choisissez une base, et ajoutez-y les crudités désirées, ainsi que le fromage que vous préférez, sans oublier la ou les sauces qui vous font saliver.. Le tout accompagné de frites fraîches et maison, vous n'aurez ensuite qu'à déguster ! <br> 

    Pensez aussi à téléphoner si vous voulez éviter d'attendre pour une commande à emporter. <br> <br>
    <a href="img/menu.jpg" target="_blank" id="menu">Voir le Menu</a>
     
<span id="telephone">Tèl: 07 81 46 67 06</span>
 
  </div> 


<div id="slide3" class="slide">
    <h1 id="titre_faq">Foire aux questions.</h1>
    <a href="http://www.tripadvisor.fr/Restaurant_Review-g1079333-d7079330-Reviews-Loola_s_diner-Gujan_Mestras_Gironde_Aquitaine.html" id="accroche" target="_blank">Laissez votre avis sur Tripadvisor !
    </a>
</div>




    <div id="footer">
        
    <h1 id="titre_contact">Contactez-nous !</h1>
     
     
            
                 
            <p id="infos">
               <a href="https://www.google.fr/maps/place/81+Cours+de+la+R%C3%A9publique,+33470+Gujan-Mestras/@44.6393592,-1.0613049,17z/data=!4m2!3m1!1s0xd5499de2a01d1d3:0x8d338d393964dd9b" target="_blank"><span id="lieu">Òu nous trouver ?</span></a> <br> 
               <span class="black">81 cours de la république, 33470 Gujan-Mestras.</span> <br>
               <span class="black">Du mardi au samedi :</span> <br>De 11h00 à 14h00 et de 18h00 à 22h00.<br>            <span class="black">Le dimanche :</span><br> de 18h00 à 22h00. <br> 
               <span class="black">Téléphone :</span><br> 07.81.46.67.06
<br> <br>      <a href="mailto:loolasdiner@gmail.com"><span id="mail">Nous contacter ?</span></a>
               </p>
                
            
           <a href="#title"><div id="top"><img src="img/fleche.png" id="fleche"></div></a>    


                 <img id="plan" src="img/plan_V2.png">

         </div>
	</div>
	
	
	</body>


</html>