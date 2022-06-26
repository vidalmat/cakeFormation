<?php 

    class LinksController extends AppController {

        public function add() {

            // Vérifie que le navigateur envoie une requête de type post
            // Le résultat apparaîtra en false, 
            // Après avoir cliqué sur le submit, il apparaîtra en true 
            // debug($this->request->is('post'));

            if($this->request->is('post')) {

                // debug($this->request->data);

                $link = $this->Link->findByUrl($this->request->data['Link']['url']);

                // Vérifie que la data n'est pas vide 
                // if(!empty($this->request->data))
                //     $this->request->data
                if(empty($link)){
                    
                    // Si elle n'est pas en BDD, on créé un enregistrement 
                    // Créer le lien 
                    $this->Link->create($this->request->data, true);

                    // Tips : le second paramètre après null, donc true, demande la validation (voir dans Model/Link)
                    // Donc pour vérifier si le save sera valide grâce à la méthode, je mets tout cela dans un if()
                    if($this->Link->save(null, true, array('url'))) {
                        $id = $this->Link->id;

                        // Ancienne version
                        // $this->set('id', $id);
                        $this->set(compact('id'));
                        $this->render('add-success');
                    };
                }else{

                    // J'affiche à l'utilisateur, le lien généré 
                    // Récupérer le lien 
                    $id = $link['Link']['id'];
                
                    // Ancienne version
                    // $this->set('id', $id);
                    $this->set(compact('id'));
                    $this->render('add-success');
                }
            }
        }

        public function view($id) {
            $link = $this->Link->findById($id);
            if (empty($link)) {
                throw new NotFoundException();
                
            }
            
            return $this->redirect($link['Link']['url'], 301);
        //    return Router::redirect('/links/*', $link['Link']['url'], array('status' => 301));
        }

        public function test($param1, $param2){
            debug($this->request->params);
            die();
        }

        // Personnaliser les routes admin et member dans Config/core.php ligne 124
        public function admin_index() {
            $links = $this->Link->find('all');
            $this->set(compact('links'));
        }

        // Personnaliser les routes admin et member dans Config/core.php ligne 124
        public function member_index() {
            $links = $this->Link->find('all');
            $this->set(compact('links'));
        }

    }

?>