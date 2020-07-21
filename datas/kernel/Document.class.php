<?php

class document extends Table{

    public static function add($data){
      try {
        $post = [
        '_id' => new MongoDB\BSON\ObjectId,
        'id_user' => $data['id_user'],
        'id_doc_model' => $data['id_doc_model'],
        'object' => $data['object'],
        'get_user' => $data['get_user'],
        'for_user' => $data['for_user'],
        'date_creation' => [date('j-m-y'), date('H:i:s')],
        ];

        Table::query('insert', $post, 'document');
        return true;
      } catch (Exception $e) {
        return false;
      }
      
    }

    public static function delete($id){
        $post = ['_id' => new MongoDB\BSON\ObjectId($id)]; 
        Table::query('delete', $post, 'document');
    }

    public static function update($id, $data){
      try {
        $post1 = ['_id' => new MongoDB\BSON\ObjectId($id)];
        $post2 = ['$set' => $data ];
        Table::query('update', $post2, 'document', $post1);
        return true;
      } catch (Exception $e) {
        return false;
      }
        
    }

    public static function getAll(){
        return Table::all('document');
    }

    public static function search($data){
        return Table::filter($data, 'document');
    }


}