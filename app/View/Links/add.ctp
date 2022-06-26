<h1>URL</h1>

<!-- Création d'un formulaire -->
<?= $this->Form->create("Link"); ?>

<!-- Création de l'input -->
<?= $this->Form->input("url", array('label' => 'Votre lien', 'placeholder' => 'http://mon-lien.fr')); ?>

<!-- Création d'un submit -->
<?= $this->Form->end("Raccourcir le lien"); ?>