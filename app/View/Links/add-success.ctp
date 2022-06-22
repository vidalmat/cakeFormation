<h1>Lien ajouté</h1>
<br>
<p>Votre lien</p>

<p>
    <a href="<?= $this->Html->url(array('controller' => 'links', 'action' => 'view', $id)); ?>" class="button">
    <?= $this->Html->url(array('controller' => 'links', 'action' => 'view', $id), true); ?></a>
</p>