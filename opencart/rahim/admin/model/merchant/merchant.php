<?php
namespace Opencart\Admin\Model\Merchant;

/**
 * Class Merchant
 *
 * @package Opencart\Admin\Model\Merchant
 */
class Merchant extends \Opencart\System\Engine\Model {
    
    public function getMerchants(): array {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "user
                                INNER JOIN " . DB_PREFIX . "user_group ON " . DB_PREFIX . "user.user_group_id = " . DB_PREFIX . "user_group.user_group_id 
                                WHERE " . DB_PREFIX . "user_group.name = 'Merchants'");
        return $query->rows;
    }

    public function getStores(): array {
        
        $query = $this->db->query("SELECT store_id, name FROM " . DB_PREFIX . "store");
        return $query->rows;
    }

    public function getRelations(): array {
        $query = $this->db->query("SELECT msr.store_id, msr.user_id, u.username, s.name as store_name 
                                   FROM " . DB_PREFIX . "merchant_store_relation msr
                                   INNER JOIN " . DB_PREFIX . "user u ON msr.user_id = u.user_id
                                   INNER JOIN " . DB_PREFIX . "store s ON msr.store_id = s.store_id");
        return $query->rows;
    }

    public function createRelation(int $user_id, int $store_id): bool {
        $this->db->query("INSERT INTO " . DB_PREFIX . "merchant_store_relation SET user_id = '" . (int)$user_id . "', store_id = '" . (int)$store_id . "'");
        return $this->db->countAffected() > 0;
    }

    public function grantAccess(int $admin_id, int $store_id): bool {
        $this->db->query("INSERT INTO " . DB_PREFIX . "merchant SET admin_id = '" . (int)$admin_id . "', store_id = '" . (int)$store_id . "'");
        return $this->db->countAffected() > 0;
    }

    public function fetchAndSaveUserStoreRelation(int $user_id, int $store_id): bool {
        $query = $this->db->query("
            INSERT INTO " . DB_PREFIX . "merchant_store_relation (user_id, store_id)
            VALUES ('" . (int)$user_id . "', '" . (int)$store_id . "')
        ");
        return $this->db->countAffected() > 0;
    }

    public function removeUserStoreRelation(int $user_id, int $store_id): bool {
        $query = $this->db->query("
            DELETE FROM " . DB_PREFIX . "merchant_store_relation
            WHERE user_id = '" . (int)$user_id . "' AND store_id = '" . (int)$store_id . "'
        ");
        return $this->db->countAffected() > 0;
    }
}
?>
