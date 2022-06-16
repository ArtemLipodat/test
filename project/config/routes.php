<?php
	use \Core\Route;
	
	return [
        new Route('/', 'main', 'index'),
        new Route('/get_data', 'data', 'data'),
        new Route('/admin', 'admin', 'admin'),
		new Route('/admin/show', 'admin', 'show'),
		new Route('/auth', 'admin', 'auth'),
		new Route('/reg', 'admin', 'reg'),
		new Route('/reg/check', 'AdminRegister', 'index'),
		new Route('/auth/check', 'AdminAuth', 'index'),
        new Route('/admin/form', 'add', 'addForm'),
        new Route('/admin/add', 'add', 'add'),
	];
	
