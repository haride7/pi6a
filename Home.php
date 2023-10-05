<?php
use app\core\Controller;

class Home extends Controller
{
    /**
     * chama a view index.php do  /home   ou somente   /
     */
    public function index()
    {
        $msg = "Banco de dados IMDAZ";
        $this->view('home/index',['msg' => $msg]);
    }

    public function show($id = null)
    {
        if (is_numeric($id)) {
            $alunos = $this->model('alunos');
            $data = $alunos::findById($id);
            $this->view('home/show', ['aluno' => $data]);
        } else {
			if($id == ""){
				$alunos = $this->model('alunos');
				$data = $Users::findAll();

				$this->view('home/show', ['aluno' => $data]);
				
			}
			else{
				$this->pageNotFound();
			}
        }
  }

}