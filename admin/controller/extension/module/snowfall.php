<?php
class ControllerExtensionModuleSnowfall extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/snowfall');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('module_snowfall', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_status'] = $this->language->get('entry_status');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		
		$data['entry_flakeсount'] = $this->language->get('entry_flakeсount');
		$data['entry_flakecolor'] = $this->language->get('entry_flakecolor');
		$data['entry_flakeindex'] = $this->language->get('entry_flakeindex');
		$data['entry_minsize'] = $this->language->get('entry_minsize');
		$data['entry_maxsize'] = $this->language->get('entry_maxsize');
		$data['entry_minspeed'] = $this->language->get('entry_minspeed');
		$data['entry_maxspeed'] = $this->language->get('entry_maxspeed');
		$data['entry_round'] = $this->language->get('entry_round');
		$data['entry_shadow'] = $this->language->get('entry_shadow');
		$data['entry_collection'] = $this->language->get('entry_collection');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/snowfall', 'token=' . $this->session->data['token'], true)
		);

		$data['action'] = $this->url->link('extension/module/snowfall', 'token=' . $this->session->data['token'], true);

		$data['cancel'] = $this->url->link('extension/extension', 'token=' . $this->session->data['token'] . '&type=module', true);

		if (isset($this->request->post['module_snowfall_status'])) {
			$data['module_snowfall_status'] = $this->request->post['module_snowfall_status'];
		} else {
			$data['module_snowfall_status'] = $this->config->get('module_snowfall_status');
		}

		if (isset($this->request->post['module_snowfall_flakeсount'])) {
			$data['module_snowfall_flakeсount'] = $this->request->post['module_snowfall_flakeсount'];
		} elseif($this->config->get('module_snowfall_flakeсount')) {
			$data['module_snowfall_flakeсount'] = $this->config->get('module_snowfall_flakeсount');
		} else {
			$data['module_snowfall_flakeсount'] = '70';
		}

		if (isset($this->request->post['module_snowfall_flakecolor'])) {
			$data['module_snowfall_flakecolor'] = $this->request->post['module_snowfall_flakecolor'];
		} elseif($this->config->get('module_snowfall_flakecolor')) {
			$data['module_snowfall_flakecolor'] = $this->config->get('module_snowfall_flakecolor');
		} else {
			$data['module_snowfall_flakecolor'] = '#ffffff';
		}

		if (isset($this->request->post['module_snowfall_flakeindex'])) {
			$data['module_snowfall_flakeindex'] = $this->request->post['module_snowfall_flakeindex'];
		} elseif($this->config->get('module_snowfall_flakeindex')) {
			$data['module_snowfall_flakeindex'] = $this->config->get('module_snowfall_flakeindex');
		} else {
			$data['module_snowfall_flakeindex'] = '999999';
		}

		if (isset($this->request->post['module_snowfall_minsize'])) {
			$data['module_snowfall_minsize'] = $this->request->post['module_snowfall_minsize'];
		} elseif($this->config->get('module_snowfall_minsize')) {
			$data['module_snowfall_minsize'] = $this->config->get('module_snowfall_minsize');
		} else {
			$data['module_snowfall_minsize'] = '5';
		}

		if (isset($this->request->post['module_snowfall_maxsize'])) {
			$data['module_snowfall_maxsize'] = $this->request->post['module_snowfall_maxsize'];
		} elseif($this->config->get('module_snowfall_maxsize')) {
			$data['module_snowfall_maxsize'] = $this->config->get('module_snowfall_maxsize');
		} else {
			$data['module_snowfall_maxsize'] = '12';
		}

		if (isset($this->request->post['module_snowfall_minspeed'])) {
			$data['module_snowfall_minspeed'] = $this->request->post['module_snowfall_minspeed'];
		} elseif($this->config->get('module_snowfall_minspeed')) {
			$data['module_snowfall_minspeed'] = $this->config->get('module_snowfall_minspeed');
		} else {
			$data['module_snowfall_minspeed'] = '1.5';
		}

		if (isset($this->request->post['module_snowfall_maxspeed'])) {
			$data['module_snowfall_maxspeed'] = $this->request->post['module_snowfall_maxspeed'];
		} elseif($this->config->get('module_snowfall_maxspeed')) {
			$data['module_snowfall_maxspeed'] = $this->config->get('module_snowfall_maxspeed');
		} else {
			$data['module_snowfall_maxspeed'] = '3';
		}

		if (isset($this->request->post['module_snowfall_round'])) {
			$data['module_snowfall_round'] = $this->request->post['module_snowfall_round'];
		} elseif($this->config->get('module_snowfall_round')) {
			$data['module_snowfall_round'] = $this->config->get('module_snowfall_round');
		} else {
			$data['module_snowfall_round'] = 1;
		}

		if (isset($this->request->post['module_snowfall_shadow'])) {
			$data['module_snowfall_shadow'] = $this->request->post['module_snowfall_shadow'];
		} elseif($this->config->get('module_snowfall_shadow')) {
			$data['module_snowfall_shadow'] = $this->config->get('module_snowfall_shadow');
		} else {
			$data['module_snowfall_shadow'] = 0;
		}

		if (isset($this->request->post['module_snowfall_collection'])) {
			$data['module_snowfall_collection'] = $this->request->post['module_snowfall_collection'];
		} else {
			$data['module_snowfall_collection'] = $this->config->get('module_snowfall_collection');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/snowfall', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/snowfall')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}

}