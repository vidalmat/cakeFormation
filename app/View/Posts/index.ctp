<?php foreach ($posts as $key => $post) : ?>
    <h1><?= $post['Post']['name'] ?></h1>
    <p><?= $post['Post']['content'] ?></p>

    <!-- Voir méthode afterFind() dans PostController, plutôt que de faire plusieurs fois des appels, on fait une méthode 
    qui sera appelé qu'une seule fois = économie de code  -->
    <p><?= $this->Html->link('Lire la suite', $post['Post']['url']) ?></p>
<?php endforeach ?>
