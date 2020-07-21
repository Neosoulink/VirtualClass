<?php

class Infraction extends User{

    public static function add($data){

        $post = [
            '_id' => new MongoDB\BSON\ObjectId,
            'marqueType' => $data['marqueType'], 
            'genre' => $data['genre'], 
            'numeroChassis' => $data['numeroChassis'], 
            'numeroMoteur' => $data['numeroMoteur'], 
            'anneeFabrication' => $data['anneeFabrication'], 
            'couleur' => $data['couleur'],
            'puissanceFiscale' => $data['puissanceFiscale'],
            'proprietaire' => $data['proprietaire']  
        ];
        Table::query('insert', $post, 'ticket');

    }

    public static function delete($id){
        $post = ['_id' => new MongoDB\BSON\ObjectId($id)]; 
        Table::query('delete', $post, 'ticket');
    }

    public static function update($id, $data){
        $post1 = ['_id' => new MongoDB\BSON\ObjectId($id)];
        $post2 = [
            'nom' => $data['nom'], 
            'postnom' => $data['postnom'], 
            'prenom' => $data['prenom'], 
            'refPaie' => $data['refPaie'], 
            'numPermis' => $data['adresse'], 
            'infraction' => $data['infraction'],
            'dateTicket' => $data['dateTiccket'],
            'totalPayer' => $data['totalPayer'] 
        ];
        Table::query('update', $post2, 'ticket', $post1);
    }

    public static function getTicket(){

        return Table::all('ticket');
    }

    public static function search($data){

        return Table::filter($data, 'agent');
    }


}