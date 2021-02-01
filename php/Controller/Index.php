<?php
namespace Controller;

class Index
{
    public static function handle($queryString)
    {
        $conn = new \PDO('mysql:dbname=test_db;host=db', 'devuser', 'devpass');
        $statement = $conn->query("SELECT * FROM users");
        foreach ($statement->fetchAll() as $value) {
            echo "<b>".$value['LASTNAME']."</b>".$value['FIRSTNAME']."<br/>";
        }
    }
}
