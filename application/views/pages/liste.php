<!-- application/views/liste.php -->
<?php require("entete.php");?>

    <title>Liste des produits</title>
	
</head>
	
<body>
	
<h1>Liste des produits</h1>
	
 <div class="container">
<!-- LES THEADS -->
<table  class='table table-bordered'>	
    <thead>
        <tr>
 <th class='table-success'>PHOTO</th>
 <th class='table-success'>ID</th>
 <th class='table-success'>Références</th>
 <th class='table-success'>Libellé</th>
 <th class='table-success'>Prix</th>
 <th class='table-success'>Stock</th>
 <th class='table-success'>Couleur</th>
 <th class='table-success'>Ajout</th>
 <th class='table-success'>Modif</th>
 <th class='table-success'>Bloqué</th>
 <th class='table-success'>Actions</th>
         </tr>
    </thead>
    
<?php 

//La boucle pour afficher le contenu des tableaux///////////////////////////////////////////////////////////////////////////


foreach ($liste_produits as $row)  //Pour chaque valeur de liste_produits qui nous donnent les valeurs de la table produits
	
{
    ?> 
     <tr>

    <td><a href='<?=base_url("index.php/produits/detail/$row->pro_id")?>'><img src='<?=base_url("assets/images/").$row->pro_id.".".$row->pro_photo?>' width='80px' height='80px'></a></td> <!--On z'affiche la photo avec des balises img et on l'insère dans un lien cliquable qui envoit au détail-->
	
	
    <td><?=$row->pro_id?></td>
	
    <td><?=$row->pro_ref?></td>
    
    <td><?=$row->pro_libelle?></td>
    
    <td><?=$row->pro_prix?></td>
    
    <td><?=$row->pro_stock?></td>
    
    <td><?=$row->pro_couleur?></td>
    
    <td><?=$row->pro_d_ajout?></td>
    
    <td><?=$row->pro_d_modif?></td>
    
    <td><?=$row->pro_bloque?></td>
     
    <td> <a href='<?=base_url("index.php/produits/modif/$row->pro_id")?>'>
 <input type='button' id='modif'  class='btn btn-outline-success' value='Modifier'>
</a> <br>
<input type="submit" name="button2" value="Supprimer" class="btn btn-outline-danger" onclick="return(confirm('Etes-vous sûr de vouloir supprimer cette entrée?'));"> <!-- Au click on appelle un confirm qui si vrai envoie la page sur le script de suppression -->
</td>
<?php	
}
	?>




</table>	
<a href="<?=base_url("index.php/produits/ajout")?>"><input type="button" value="Ajouter"></a>
</div>
</body>

<?php require("pieddepage.php");?>