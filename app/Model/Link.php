<?php
    class Link extends AppModel{
        
        // Méthode de validation de l'entrée du mail dans le formulaire 
        // Voir les autres règles en commentaire, pas utile pour cette validation 
        public $validate = array(
            'url' => array(
                'rule' => 'url',
                // 'rule' => array('between', 1, 4),
                'required'      => true,
                // 'allowEmpty'    => false,
                // 'on'            => 'create',
                'message'       => 'Votre URL n\'est pas valide',
            )
        );

    }

?>