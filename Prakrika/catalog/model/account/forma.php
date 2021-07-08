<?php
class ModelAccountForma extends Model {

    public function InsertData($name,$email,$telephone) {
        $this->db->query("INSERT INTO `" . DB_PREFIX . "forma` (`forma_id`, `firstname`, `email`, `telephone`) VALUES (NULL, '$name', '$email', '$telephone');");
    }
}
