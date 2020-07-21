<?php

class Roulage extends User{

  public static function add($data){
    try {
      $post = [
        '_id' => new MongoDB\BSON\ObjectId,
        'id_user' => $data['id_user'],
        'matricule' => $data['matricule'],
        'nom' => $data['nom'],
        'postnom' => $data['postnom'],
        'prenom' => $data['prenom'],
        'tel' => $data['tel'],
        'autorisation' => $data['autorisation'],
        'mac_adresse' => $data['mac_adresse'],
        'longitude' => $data['longitude'],
        'latitude' => $data['latitude'],
      ];
      Table::query('insert', $post, 'roulage');
      return true;
    } catch (Exception $e) {
        return false;
    }
}

    public static function delete($id){
      try {
        $post = ['_id' => new MongoDB\BSON\ObjectId($id)]; 
        Table::query('delete', $post, 'roulage');
        return true;
      } catch (Exception $e) {
        return false;
      }
    }

    public static function update($id, $data){
        try {
            $post1 = ['_id' => new MongoDB\BSON\ObjectId($id)];

            $post2 = ['$set' => [
                'matricule' => $data['matricule'],
                'nom' => $data['nom'],
                'postnom' => $data['postnom'],
                'prenom' => $data['prenom'],
                'tel' => $data['tel'],
                'autorisation' => $data['autorisation'],
                'mac_adresse' => $data['mac_adresse'],
                'longitude' => $data['longitude'],
                'latitude' => $data['latitude'],
            ]];
            Table::query('update', $post2, 'roulage', $post1);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public static function littleUpdate($id, $data){
        try {
            $post1 = ['_id' => new MongoDB\BSON\ObjectId($id)];

            $post2 = ['$set' => [
                'nom' => $data['nom'],
                'postnom' => $data['postnom'],
                'prenom' => $data['prenom'],
                'tel' => $data['tel'],
                'autorisation' => $data['autorisation'],
                'mac_adresse' => $data['mac_adresse'],
            ]];
            Table::query('update', $post2, 'roulage', $post1);
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    public static function getRoulage(){
      return Table::all('roulage');
    }


    public static function search($data){
      return Table::filter($data, 'roulage');
    }

}