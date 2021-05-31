
<h2><?= $article->getTitre() . ' ' . $article->getId() ?></h2>
<time><?= $article->getDate() ?></time>
<p><?= $article->getContenu()?><p>

<a href="http://localhost/projet4/?url=Article/<?=$article->getId()?>/update/">update</a> <!--  http://localhost/projet4/views/viewPublicate/?id= -->

<a href="http://localhost/projet4/?url=Article/delete/<?=$article->getId()?>">supprimer</a>