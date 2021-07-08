<?php
class ModelSaleForma extends Model {


    public function getFormas($data = array()) {
        $sql = "SELECT forma_id, firstname, email, telephone FROM " . DB_PREFIX . "forma";

        $sort_data = array(
            'forma_id',
            'firstname',
            'email',
            'telephone'
        );

        if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
            $sql .= " ORDER BY " . $data['sort'];
        } else {
            $sql .= " ORDER BY forma_id";
        }

        if (isset($data['forma']) && ($data['forma'] == 'DESC')) {
            $sql .= " ASC";
        } else {
            $sql .= " DESC";
        }

                if (isset($data['start']) || isset($data['limit'])) {
            if ($data['start'] < 0) {
                $data['start'] = 0;
            }

            if ($data['limit'] < 1) {
                $data['limit'] = 20;
            }

            $sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
        }

        $query = $this->db->query($sql);

        return $query->rows;
    }

    public function getTotalFormas($data = array()) {
        $sql = "SELECT COUNT(*) AS total FROM `" . DB_PREFIX . "forma`";
        $query = $this->db->query($sql);
        return $query->row['total'];
    }
}
