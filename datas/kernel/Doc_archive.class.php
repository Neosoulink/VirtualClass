<?php

class Doc_archive extends Document{

    public static function add($data){
      try {
        $post = [
        '_id' => new MongoDB\BSON\ObjectId,
        'id_theme' => $data['id_theme'],
        'name_theme' => $data['name_theme'],
        'id_user' => $data['id_user'],
        'date_creation' => [date('j-m-y'), date('H:i:s')],
        'content' =>$data['content'],
        'get_person' =>$data['get_person'],
        'type_doc'=>$data['type_doc'],
        'type_ets'=>$data['type_ets'],
        ];

        Table::query('insert', $post, 'doc_archive');
        return true;
      } catch (Exception $e) {
        return false;
      }
      
    }



    public static function delete($id){
        $post = ['_id' => new MongoDB\BSON\ObjectId($id)]; 
        Table::query('delete', $post, 'doc_archive');
    }

    public static function update($id, $data){
      try {
        $post1 = ['_id' => new MongoDB\BSON\ObjectId($id)];
        $post2 = ['$set' => $data ];
        Table::query('update', $post2, 'doc_archive', $post1);
        return true;
      } catch (Exception $e) {
        return false;
      }
        
    }

    public static function getModel(){
        return Table::all('doc_archive');
    }

    public static function search($data){
        return Table::filter($data, 'doc_archive');
    }
}