<?php 

    class PostsController extends AppController {

        public function index() {
            // Enregistrement manuel 
            // $this->Post->save(array(
            //     'name'      => 'Un nouvel Iphone',
            //     'content'   => 'Salut'
            // ));

            
            // $this->Post->create();
            // $this->Post->save(array(
            //     'name'  => "Une nouvelle version d'Android",
            //     'slug'  => "nouveau-android"
            // ));

            $posts = $this->Post->find('all');

            $this->set(compact('posts'));
        }
    }

?>