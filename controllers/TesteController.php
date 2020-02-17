<?php

namespace app\controllers;

use app\models\Course;
use app\models\Pessoa;

class TesteController extends \yii\web\Controller
{
    public function actionCurso()
    {

        //Teste
        $courses = Course::find()->all();
        echo "<h1>Tabela Cursos:</h1><br>";
        foreach ($courses as $c){
            echo "ID: $c->id - Nome: $c->name - Horas: $c->hours <br>";
        }
        die();
    }

//    public function actionVerDados()
//    {
//        $request = \Yii::$app->request;
//
//        $nome = $request->get('nome');
//        $id = $request->get('id');
//
//        return $this->render('index',[
//            'id' => $id,
//            'nome' => $nome
//        ]);
//    }

    public function actionPessoa()
    {
        $pessoas = Pessoa::find()->all();
        echo '<h1>Tabela pessoas:</h1>';
        foreach($pessoas as $p){
            echo "Nome: $p->nome - Idade: $p->idade - Peso: $p->peso";
        }
        die();
    }
}
