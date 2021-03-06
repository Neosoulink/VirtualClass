<?php

class User extends Table{

    public static function getUser($min, $max)
    {
        return self::query('SELECT * FROM Produit ORDER BY IDProduit DESC LIMIT '.$min.','.$max.'');
    }

    # Ajout de l'ouvrage
    public static function Add($fields)
    {
        $attributes = [];
        foreach($fields as $att => $key)
        {
            $attributes[] = $key;
        }

        return self::query('INSERT INTO t_ouvrage(id_ouvrage, designation_ouv, quantiter_ouv) VALUES (?, ?, ?)', $attributes, true);
    }

    # Modification
    public static function Update($fields)
    {
        $attributes = [];
        foreach($fields as $att => $key)
        {
            $attributes[] = $key;
        }

        return self::query('UPDATE t_ouvrage SET designation_ouv = ?, quantiter_ouv = ? WHERE id_ouvrage = ?', $attributes, true);
    }

    # Supprimer
    public static function Delete($id)
    {
        return self::query('DELETE FROM user WHERE id = ? ', [$id], true);
    }

    # Recherche
    public static function Search($data)
    {
        return self::query('SELECT * FROM user WHERE username LIKE % ? % AND password LIKE % ? %  ', [$data], true);
    }

    # Filtre
    public static function filtre($id)
    {
        return self::query('SELECT * FROM t_ouvrage WHERE id_ouvrage = ?', [$id], true);
    }



}
