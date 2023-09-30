<?php
//login
function checkuser($email, $password)
{
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM user WHERE email='" . $email . "' AND  password='" . $password . "' ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    if (count($kq) > 0)
        return $kq[0]['role'];
    else
        return 0;
}

function getuserinfo($email, $password)
{
    $conn = connectDB();
    $stmt = $conn->prepare("SELECT * FROM user WHERE email='" . $email . "' AND  password='" . $password . "' ");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq = $stmt->fetchAll();
    return $kq;
}

//sigup
function insertinfo($email, $password, $name, $phonenumber, $address, $role, $status)
{
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO user (id_user, email, password, name, phone_number, address, role, status) VALUES (NULL, :email, :password, :name, :phone_number, :address, :role, :status)");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':phone_number', $phonenumber);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':role', $role);
    $stmt->bindParam(':status', $status);
    $stmt->execute();
    return true;
}


?>