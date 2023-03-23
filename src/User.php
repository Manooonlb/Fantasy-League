<?php

require_once('__connec.php');

class User
{
    private array $myLeagues;
    private int $id;
    private string $username;
    private string $email;
    private string $password;
    private string|NULL $avatar;

    public function __construct()
    {
        $this->myLeagues = [
            1 => 'Ligue 1',
            2 => 'Ligue 2',
        ];
    }

    public function getMyLeagues(): array
    {
        return $this->myLeagues;
    }

    public function setMyLeagues(array $leagues): void
    {
        $this->myLeagues = $leagues;
    }

    public function getID(): int
    {
        return $this->id;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
        $pdo=new \PDO(DSN,USER,PASS); 
        $query= "UPDATE user SET username = :username WHERE id= $this->id";
        $statement= $pdo->prepare($query);
        $statement->bindValue(":username", $username, PDO::PARAM_STR);
        $statement->execute();
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
        $pdo=new \PDO(DSN,USER,PASS); 
        $query= "UPDATE user SET email = :email WHERE id= $this->id";
        $statement= $pdo->prepare($query);
        $statement->bindValue(":email", $email, PDO::PARAM_STR);
        $statement->execute();
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
        $pdo=new \PDO(DSN,USER,PASS); 
        $query= "UPDATE user SET password = :password WHERE id= $this->id";
        $statement= $pdo->prepare($query);
        $statement->bindValue(":password", $password, PDO::PARAM_STR);
        $statement->execute();
    }

    public function getAvatar(): string|NULL
    {
        return $this->avatar;
    }

    public function setAvatar(string $avatar): void
    {
        $this->avatar = $avatar;
        $pdo=new \PDO(DSN,USER,PASS); 
        $query= "UPDATE user SET avatar = :avatar WHERE id= $this->id";
        $statement= $pdo->prepare($query);
        $statement->bindValue(":avatar", $avatar, PDO::PARAM_STR);
        $statement->execute();
    }

    public function deleteAvatar(): void
    {
        $this->avatar = NULL;
    }

}