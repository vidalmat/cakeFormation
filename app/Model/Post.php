<?php
    class Post extends AppModel{

        public function beforeSave($option = array()) {
            // debug($option);
            // debug($this->data);

            if (
                // isset($this->data['Post']['name']) 
                // && 
                // !isset($this->data['Post']['slug'])) {

                // $this->alias renvoie le model en question, identique à ci-dessus
                isset($this->data[$this->alias]['name']) 
                && 
                !isset($this->data[$this->alias]['slug'])) {
                {
                    // strtolower va tout mettre en minuscule 
                    // En premier paramètre pour le Inflector::slug, le champs name puis en second le tiret '-'
                    $this->data[$this->alias]['slug'] = strtolower(Inflector::slug($this->data[$this->alias]['name'], '-'));
                }
            }
        }

        // afterFind() se trouve dans la doc CakePHP
        // Cette méthode est utilisée pour faire un lien (Lire la suite)
        public function afterFind($results, $primary = false) {
            foreach ($results as $key => $result) {
                if (
                    isset($result[$this->alias]['id'])
                    &&
                    isset($result[$this->alias]['slug'])) {
                        $results[$key][$this->alias]['url'] = array(
                            'controller'        => 'posts',
                            'action'            => 'view',
                            'id'                => $result[$this->alias]['id'],
                            'slug'              => $result[$this->alias]['slug']
                        );
                    // debug($results);
                }
            }
            return $results;
        }

    }

?>