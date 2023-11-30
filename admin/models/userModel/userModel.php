<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class User extends PDOModel {
        function getAllUsers($limit, $offset) {
            $sql = "SELECT * FROM taikhoan LIMIT $limit OFFSET $offset";

            return $this->pdoQuery($sql);
        }

        function getCountRecords() {
            $sql = "SELECT COUNT(matk) FROM taikhoan";

            return $this->pdoQueryValue($sql);
        }

        function getCurUser($user_id) {
            $sql = "SELECT * FROM taikhoan WHERE matk = ?";

            return $this->pdoQuery($sql, $user_id);
        }

        function updateUserAvt($name, $email, $phone, $address, $pass, $avatar, $role, $user_id) {
            $sql = "UPDATE taikhoan SET ho_ten = ?, email = ?, so_dien_thoai = ?,
                    dia_chi = ?, mat_khau = ?, hinh_anh = ?, mavt = ? WHERE matk = ?";

            return $this->pdoExecute($sql, $name, $email, $phone, $address, $pass, $avatar, $role, $user_id);
        }

        function updateUser($name, $email, $phone, $address, $pass, $role, $user_id) {
            $sql = "UPDATE taikhoan SET ho_ten = ?, email = ?, so_dien_thoai = ?,
                    dia_chi = ?, mat_khau = ?, mavt = ? WHERE matk = ?";

            return $this->pdoExecute($sql, $name, $email, $phone, $address, $pass, $role, $user_id);
        }

        function deleteUser($user_id) {
            $sql = "DELETE FROM taikhoan WHERE matk = ?";

            return $this->pdoExecute($sql, $user_id);
        }

        function getAllRoles() {
            $sql = "SELECT * FROM vaitro";

            return $this->pdoQuery($sql);
        }
    }
 ?>