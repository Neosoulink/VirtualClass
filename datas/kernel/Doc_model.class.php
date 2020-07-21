<?php

class Doc_model extends Document{

    public static function add($data){
      try {
        $post = [
        '_id' => new MongoDB\BSON\ObjectId,
        'doc_name' => $data['doc_name'],
        'description' => $data['description'],
        'doc_image' => $data['doc_image'],
        'date_creation' => [date('j-m-y'), date('H:i:s')],
        ];

        Table::query('insert', $post, 'doc_model');
        return true;
      } catch (Exception $e) {
        return false;
      }
      
    }

    public static function delete($id){
        $post = ['_id' => new MongoDB\BSON\ObjectId($id)]; 
        Table::query('delete', $post, 'doc_model');
    }

    public static function update($id, $data){
      try {
        $post1 = ['_id' => new MongoDB\BSON\ObjectId($id)];
        $post2 = ['$set' => $data ];
        Table::query('update', $post2, 'doc_model', $post1);
        return true;
      } catch (Exception $e) {
        return false;
      }
        
    }

    public static function getAll(){
        return Table::all('doc_model');
    }

    public static function search($data){
        return Table::filter($data, 'doc_model');
    }
}