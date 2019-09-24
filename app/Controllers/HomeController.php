<?php 
	namespace App\Controllers;

	use Src\Classes\ClassRender;
	use Src\Interfaces\InterfaceView;

	class HomeController extends ClassRender implements InterfaceView {
		public function index() {
			$data = array();

			$this -> setDir('Home');
			$this -> setTitle('MVC - Home');
			$this -> setDescription('Estrutura MVC do curso de MVC completo.');
			$this -> setKeywords('mvc completo, estrutura mvc');

			$data['teste'] = 'Teste de envio de dado para a view';

			$this -> renderLayout($data);
		}
	}