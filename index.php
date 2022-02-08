<?php include "header.php"; ?>
<?php include "tableau.php"; ?>
<?php require "fonctions.php"; ?>
<p style="white-space: pre-line;"> ----------TP---------------
    1)Qui est à l'origine de la première version de PHP?
    C'est RASMUS LERDORF qui est à l'origine de la premiére version PHP, il voulais ainsi pouvoir
    voir qui consulter son cv en ligne.

    2)Expliquez en quoi PHP est un langage coté serveur ?
    Le langage PHP est un langage coté serveur car pour pouvoir l'interpreter seul un serveur php peux le faire,
    pour détailler un peu la page web va envoyer une requête HTTP au serveur APACHE qui lui même va transmetre
    cette page au serveur php afin que la page php sois traduit et retourner en html au navigateur.
    2.1)Donnez un exemple concret expliquant ou s’exécute le code en Front et en back ?
        Le code front va être interpreter par n'importe quelle navigateur client et serveur Http par contre le back end 
        sera interpréter que par un serveur PHP, en passant par un navigateur client puis un navigateur Apache.

    3)Quel est l'opérateur utilisé pour la concaténation ?
    C'est l'opérateur (point .) qu'on va utilisé.
    4)Que renvoie la fonction strlen() ?
    La fonction strlen() renvoie le nombre de caractères entré
</p>
<?php $quantiteArticle = quantitealea(10); ?>
<table>
    <tr>
        <th>Référence</th>
        <th>Désignation</th>
        <th>Prix unitaire</th>
        <th>Quantité</th>
        <th>prix total-PU*Q</th>
        <th>TOTAL TTC</th>
    </tr>
    <tr>
        <td><?php echo $article[0]['refarticle']; ?></td>
        <td><?php echo $article[0]['nomarticle']; ?></td>
        <td><?php echo $article[0]['prixarticle']; ?></td>
        <td><?php echo $quantiteArticle; ?></td>
        <td><?php $ptArt1 = prixtotal($quantiteArticle, ($article[0]['prixarticle']));
            echo $ptArt1; ?></td>
        <td><?php echo totalttc($ptArt1); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[1]['refarticle']; ?></td>
        <td><?php echo $article[1]['nomarticle']; ?></td>
        <td><?php echo $article[1]['prixarticle']; ?></td>
        <td><?php echo $quantiteArticle; ?></td>
        <td><?php $ptArt2 = prixtotal($quantiteArticle, ($article[1]['prixarticle']));
            echo $ptArt2; ?></td>
        <td><?php echo totalttc($ptArt2); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[2]['refarticle']; ?></td>
        <td><?php echo $article[2]['nomarticle']; ?></td>
        <td><?php echo $article[2]['prixarticle']; ?></td>
        <td><?php echo $quantiteArticle; ?></td>
        <td><?php $ptArt3 = prixtotal($quantiteArticle, ($article[2]['prixarticle']));
            echo $ptArt3; ?></td>
        <td><?php echo totalttc($ptArt3); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[3]['refarticle']; ?></td>
        <td><?php echo $article[3]['nomarticle']; ?></td>
        <td><?php echo $article[3]['prixarticle']; ?></td>
        <td><?php echo $quantiteArticle; ?></td>
        <td><?php $ptArt4 = prixtotal($quantiteArticle, ($article[3]['prixarticle']));
            echo $ptArt4; ?></td>
        <td><?php echo totalttc($ptArt4); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[4]['refarticle']; ?></td>
        <td><?php echo $article[4]['nomarticle']; ?></td>
        <td><?php echo $article[4]['prixarticle']; ?></td>
        <td><?php echo $quantiteArticle; ?></td>
        <td><?php $ptArt5 = prixtotal($quantiteArticle, ($article[4]['prixarticle']));
            echo $ptArt5; ?></td>
        <td><?php echo totalttc($ptArt5); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[5]['refarticle']; ?></td>
        <td><?php echo $article[5]['nomarticle']; ?></td>
        <td><?php echo $article[5]['prixarticle']; ?></td>
        <td><?php echo $quantiteArticle; ?></td>
        <td><?php $ptArt6 = prixtotal($quantiteArticle, ($article[5]['prixarticle']));
            echo $ptArt6; ?></td>
        <td><?php echo totalttc($ptArt6); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[6]['refarticle']; ?></td>
        <td><?php echo $article[6]['nomarticle']; ?></td>
        <td><?php echo $article[6]['prixarticle']; ?></td>
        <td><?php echo $quantiteArticle; ?></td>
        <td><?php $ptArt7 = prixtotal($quantiteArticle, ($article[6]['prixarticle']));
            echo $ptArt7; ?></td>
        <td><?php echo totalttc($ptArt7); ?></td>
    </tr>
    <tr>
        <td><?php echo $article[7]['refarticle']; ?></td>
        <td><?php echo $article[7]['nomarticle']; ?></td>
        <td><?php echo $article[7]['prixarticle']; ?></td>
        <td><?php echo $quantiteArticle; ?></td>
        <td><?php $ptArt8 = prixtotal($quantiteArticle, ($article[7]['prixarticle']));
            echo $ptArt8; ?></td>
        <td><?php echo totalttc($ptArt8); ?></td>
    </tr>
</table>



<?php include "footer.php"; ?>