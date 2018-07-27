<?php
namespace App\Controller;

class PostsController extends \App\Controller\AppController{
    
    public function index(){
        $this->paginate = [
            'limit'=> '5'
        ];
        $postP = $this->paginate($this->Posts->find('all'));
        $this->set('posts', $postP);
    }
    
    public function search(){
        $search = $this->request->getQuery('q');
        $this->paginate = [
            'limit'=> '5'
        ];
        $postP = $this->paginate($this->Posts->find()->where(function($exp, $query) use($search){
            return $exp->like('nom', '%'.$search.'%');
        }));
        $this->set('posts', $postP);        
        
    }


    public function add(){
        $postNew = $this->Posts->newEntity();
        if($this->request->is('post')){
            $postNew = $this->Posts->patchEntity($postNew, $this->request->getData());
            $postNew->created = date('Y-m-d H:i:s');
            $postNew->modified = date('Y-m-d H:i:s');
            if($this->Posts->save($postNew)){
                return $this->redirect(['action'=>'index']);
            }
        }
        $this->set('posts', $postNew);
    }
    
    public function edit($id){
        $postUp = $this->Posts->get($id);
        if($this->request->is(['post','put'])){
             $postUp = $this->Posts->patchEntity($postUp, $this->request->getData());
             $postUp->modified = date('Y-m-d H:i:s');
             $this->Posts->save($postUp);
             return $this->redirect(['action'=>'index']);
        }
        $this->set('nom', $postUp->nom);
        $this->set('prenom', $postUp->prenom);
        $this->set('phone', $postUp->phone);
        $this->set('email', $postUp->email);
        $this->set('rue', $postUp->rue);
        $this->set('cp', $postUp->cp);
        $this->set('ville', $postUp->ville);
        $this->set('pays', $postUp->pays); 
        $this->set('posts', $postUp);
    }
    
    public function delete($id){
        $this->request->allowMethod(['post','delete']);
        $postDel = $this->Posts->get($id);
        $this->Posts->delete($postDel);
        return $this->redirect(['action'=>'index']);
        
    }
    
}
