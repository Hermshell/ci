<?php require('entete.php'); ?>
<body>
	<div class="container">

  	
<form action="" method="POST">
  
   <!--ID-->

   <label for="pro_id" class="text-success">ID</label>
   <input type="text" class="form-control" name="pro_id" value="<?= $produits->pro_id; ?>">

   <!--Références-->

   <label for="pro_ref" class="text-success">Références du produit</label>
    
    <img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">
    
    
    <input type="text" class="form-control" name="pro_ref" value="<?= $produits->pro_ref; ?>"><br>

    <!--Nom du produit-->

<label for="pro_libelle" class="text-success">Nom du produit</label>


<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px"> 


<input type="text" class="form-control" name="pro_libelle" value="<?= $produits->pro_libelle; ?>"><br>


<!--Description-->

<label for="pro_description" class="text-success">Description du produit</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<textarea class="form-control" name="pro_description"><?= $produits->pro_description; ?></textarea><br>

<!--Prix du produit-->

<label for="pro_prix" class="text-success">Prix du produit</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px"> 

<input type="text" class="form-control" name="pro_prix" value="<?= $produits->pro_prix; ?>"><br>

<!--Unité en stock-->

<label for="pro_stock" class="text-success">Nombre d'unités en stock</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<input type="text" class="form-control" name="pro_stock" value="<?= $produits->pro_stock; ?>"><br>

<!--Couleur-->

<label for="pro_couleur" class="text-success">Couleur</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<input type="text" class="form-control" name="pro_couleur" value="<?= $produits->pro_couleur; ?>"><br>

<!--Photo-->

<label class="text-success">Photos</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<input type="file" class="form-control" ><br>

<!--Extention de la photo-->

<label for="pro_photo">Extension photo</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<input type="text" name="pro_photo" value="<?= $produits->pro_photo; ?>"><br>

<!--En stock oui ou non-->

<label class="text-success"  for="success" id="radio">Bloquer le produit à la production</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px"><br>

<input type="radio" class="form-check-input" name="pro_bloque" value="1" checked>Oui<br>

<input type="radio" class="form-check-input" name="pro_bloque" value="0">Non
  <br> 

  <!--Boutton valider-->
<input type="submit" value="Modifier" class='btn btn-outline-success' id="valider">
		
    </div> 
	
</form>
</div>
</body>
    
<?php require('pieddepage.php'); ?>