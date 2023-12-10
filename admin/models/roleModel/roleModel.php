<?php 
    require_once  $_SERVER['DOCUMENT_ROOT'] . "/cosstewn/configs/" . "pdoModel.php";

    class Role extends PDOModel {
        function getAllRole() {
            $sql = "SELECT * FROM vaitro";

            return $this->pdoQuery($sql);
        }

        function addNewRole($role) {
            $sql = "INSERT INTO vaitro (vai_tro) VALUES (?)";

            return $this->pdoExecute($sql, $role);
        }

        function updateRole($role_id, $role) {
            $sql = "UPDATE vaitro SET vai_tro = ? WHERE mavt = ?";

            return $this->pdoQuery($sql, $role, $role_id);
        }

        function getCurRole($role_id) {
            $sql = "SELECT * FROM vaitro WHERE mavt = ?";

            return $this->pdoQueryOne($sql, $role_id);
        }

        function deleteRole($role_id) {
            $sql = "DELETE FROM vaitro WHERE mavt = ?";

            return $this->pdoExecute($sql, $role_id);
        }

        function deleteUserContraints($role_id) {
            $sql = "DELETE FROM taikhoan WHERE mavt = ?";

            return $this->pdoExecute($sql, $role_id);
        }
    }
 ?>