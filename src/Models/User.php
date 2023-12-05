<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class User extends Model {
    protected $table = 'users';
    protected $columns = [
        'username',
        'email',
        'address',
        'phone_number',
        'password',
        'is_admin',
    ];

    public function getUserByEmailPassword($email, $password)
    {
        $sql = "
            SELECT 
                * 
            FROM {$this->table} 
            WHERE 
                email = :email 
                AND 
                password = :password 
            LIMIT 1
        ";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        $stmt->setFetchMode(\PDO::FETCH_ASSOC);

        return $stmt->fetch();
    }

    public function getUserByEmail($email)
{
    $sql = "
        SELECT 
            * 
        FROM {$this->table} 
        WHERE 
            email = :email 
        LIMIT 1
    ";

    $stmt = $this->conn->prepare($sql);
    $stmt->bindParam(':email', $email);

    $stmt->execute();

    // Set the fetch mode to fetch associative array
    $stmt->setFetchMode(\PDO::FETCH_ASSOC);

    // Fetch the first row from the result set
    return $stmt->fetch();
}

}