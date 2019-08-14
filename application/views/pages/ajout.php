<?php require("entete.php");?>


<body>
    
    <div class="container" id="test">

    <?php echo validation_errors(); ?>
     <?php echo form_open_multipart('produits/ajout'); ?>

     <label for="pro_cat_id" class="text-success">Catégories </label>
  <select name="pro_cat_id" class="form-control">
     <?php foreach($noms_categories as $row)
     {
     ?>
     <option value="<?=$row->cat_id?>"><?=$row->cat_nom;?></option>

<?php } ?>
     </select>

<!--Références-->

    <label for="pro_ref" class="text-success">Références du produit</label>
    
    <img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">
    
    
    <input type="text" class="form-control" name="pro_ref" value="<?= set_value('pro_ref')?>"><br>

    <!--Nom du produit-->

<label for="pro_libelle" class="text-success">Nom du produit</label>


<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px"> 


<input type="text" class="form-control" name="pro_libelle" value="<?= set_value('pro_libelle')?>"><br>


<!--Description-->

<label for="pro_description" class="text-success">Description du produit</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<textarea class="form-control" name="pro_description" value="<?= set_value('pro_description')?>"></textarea><br>

<!--Prix du produit-->

<label for="pro_prix" class="text-success">Prix du produit</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px"> 

<input type="text" class="form-control" name="pro_prix" value="<?= set_value('pro_prix')?>"><br>

<!--Unité en stock-->

<label for="pro_stock" class="text-success">Nombre d'unités en stock</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<input type="text" class="form-control" name="pro_stock" value="<?= set_value('pro_stock')?>"><br>

<!--Couleur-->

<label for="pro_couleur" class="text-success">Couleur</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<input type="text" class="form-control" name="pro_couleur" value="<?= set_value('pro_couleur')?>"><br>

<!--Photo-->

<label class="text-success" for="fichier">Photos</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<input type="file" class="form-control" name="fichier" id="fichier" value="<?= set_value('file')?>"><br>

<!--Extention de la photo-->

<label for="pro_photo">Extension photo</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px">

<input type="text" name="pro_photo" value="<?= set_value('pro_photo')?>"><br>

<!--En stock oui ou non-->

<label class="text-success"  for="success" id="radio">Bloquer le produit à la production</label>

<img src="<?=base_url("assets/images/flower.png")?>" height="30px" width="30px"><br>

<input type="radio" class="form-check-input" name="pro_bloque" value="1" checked>Oui<br>

<input type="radio" class="form-check-input" name="pro_bloque" value="0">Non
  <br> 

  <!--Boutton valider-->
<input type="submit" value="valider" class='btn btn-outline-success' id="valider">
<input type="reset" value="annuler" class='btn btn-outline-warning'>
    </div> 
    
    
    
    
</body>
<?php require("pieddepage.php");?>