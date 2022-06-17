<?php
	use \Core\Route;
	
	return [
        new Route('/', 'main', 'index'),
        new Route('/get_data', 'data', 'data'),
        new Route('/get_desc', 'data', 'desc'),
        new Route('/admin', 'admin', 'admin'),
		new Route('/admin/show', 'admin', 'show'),
		new Route('/auth', 'admin', 'auth'),
		new Route('/reg', 'admin', 'reg'),
		new Route('/reg/check', 'AdminRegister', 'index'),
		new Route('/auth/check', 'AdminAuth', 'index'),
        new Route('/admin/form', 'add', 'addForm'),
        new Route('/admin/delete', 'delete', 'delete'),
        new Route('/admin/delete/check', 'delete', 'deleteCheck'),
        new Route('/admin/add', 'add', 'add'),
	];
	
