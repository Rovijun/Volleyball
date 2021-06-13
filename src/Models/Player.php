<?php

namespace Models;

use Facades\DB;
use PDO;

class Player
{
    const TABLE = "players";

    public static function all()
    {
        return DB::query('SELECT * FROM ' . self::TABLE)->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    public static function getById($id)
    {
        $sql = DB::prepare('SELECT * FROM ' . self::TABLE . ' WHERE id = :id');
        $sql->execute([':id' => $id]);

        return $sql->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    /* public static function create($data)
    {

        $sql = DB::prepare('INSERT INTO ' . self::TABLE . ' (name, age) VALUES (?, ?)');
        $sql->execute($data);

    } */

    public static function delete($id)
    {
        $sql = DB::prepare('DELETE FROM ' . self::TABLE . ' WHERE id = :id');
        $sql->execute([':id' => $id]);
    }

    public static function update($data, $id)
    {
        $sql = DB::prepare('UPDATE ' . self::TABLE . ' SET name = ?, age = ? WHERE id = ?');
        $sql->execute([... $data, $id]);
    }

}
