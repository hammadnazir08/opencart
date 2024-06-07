<?php
namespace Opencart\Admin\Controller\Merchant;

/**
 * Class Merchant
 *
 * @package Opencart\Admin\Controller\Merchant
 */
class Merchant extends \Opencart\System\Engine\Controller {
   
    public function index(): void {
        $this->load->language('merchant/merchant');

        $this->document->setTitle($this->language->get('heading_title'));

        $url = '';

        $data['breadcrumbs'] = [];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'])
        ];

        $data['breadcrumbs'][] = [
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('merchant/merchant', 'user_token=' . $this->session->data['user_token'] . $url)
        ];

        // Load Model
        $this->load->model('merchant/merchant');
        
        // Get Merchants
        $data['merchants'] = $this->model_merchant_merchant->getMerchants();
        
        // Get Stores
        $data['stores'] = $this->model_merchant_merchant->getStores();
        
        // Get Relations
        $data['relations'] = $this->model_merchant_merchant->getRelations();
        
        // Set action URL
        $data['action'] = $this->url->link('merchant/merchant/grantAccess', 'user_token=' . $this->session->data['user_token']);
        
        // Add the new URL for fetching and saving relations
        $data['fetch_and_save_action'] = $this->url->link('merchant/merchant.fetchAndSaveRelations', 'user_token=' . $this->session->data['user_token']);

        // Set the URL for removing relations
        $data['remove_action'] = $this->url->link('merchant/merchant.removeRelation', 'user_token=' . $this->session->data['user_token']);

        $data['user_token'] = $this->session->data['user_token'];

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('merchant/merchant', $data));
    }

    /**
     * Grant access to store for merchant
     * @return void
     */
    public function grantAccess(): void {
        $this->load->language('merchant/merchant');

        if ($this->request->server['REQUEST_METHOD'] == 'POST') {
            $this->load->model('merchant/merchant');

            $merchant_id = $this->request->post['merchant_id'];
            $store_id = $this->request->post['store_id'];

            if ($this->model_merchant_merchant->grantAccess($merchant_id, $store_id)) {
                $this->session->data['success'] = $this->language->get('text_success');
            } else {
                $this->session->data['error'] = $this->language->get('text_error');
            }

            $this->response->redirect($this->url->link('merchant/merchant', 'user_token=' . $this->session->data['user_token']));
        }

        $this->index();
    }

    /**
     * Fetch users and stores and save the relations
     * @return void
     */
    public function fetchAndSaveRelations(): void {
        $this->load->language('merchant/merchant');

        $this->load->model('merchant/merchant');

        $user_id = isset($this->request->post['merchant_id']) ? (int)$this->request->post['merchant_id'] : 0;
        $store_id = isset($this->request->post['store_id']) ? (int)$this->request->post['store_id'] : 0;

        if ($user_id && $store_id) {
            if ($this->model_merchant_merchant->fetchAndSaveUserStoreRelation($user_id, $store_id)) {
                $this->session->data['success'] = $this->language->get('text_success');
            } else {
                $this->session->data['error'] = $this->language->get('text_error');
            }
        } else {
            $this->session->data['error'] = 'Invalid user or store ID';
        }

        $this->response->redirect($this->url->link('merchant/merchant', 'user_token=' . $this->session->data['user_token']));
    // var_dump('user_token'); die();
    }

    /**
     * Remove relation
     * @return void
     */
    public function removeRelation(): void {
        $this->load->language('merchant/merchant');

        $this->load->model('merchant/merchant');

        $user_id = isset($this->request->get['user_id']) ? (int)$this->request->get['user_id'] : 0;
        $store_id = isset($this->request->get['store_id']) ? (int)$this->request->get['store_id'] : 0;

        if ($user_id && $store_id) {
            if ($this->model_merchant_merchant->removeUserStoreRelation($user_id, $store_id)) {
                $this->session->data['success'] = $this->language->get('text_success');
            } else {
                $this->session->data['error'] = $this->language->get('text_error');
            }
        } else {
            $this->session->data['error'] = 'Invalid user or store ID';
        }

        $this->response->redirect($this->url->link('merchant/merchant', 'user_token=' . $this->session->data['user_token']));
    }
}
?>
