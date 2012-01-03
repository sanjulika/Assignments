<?php
class QuestionsController extends AppController{
    var $name='Questions';
    var $helpers = array('Html','Form');
    var $components =array('session','Auth');

    //public $no_of_ques=4;

    function index(){

       $this->set('questions',$this->Question->find('all'));

    }
    function add(){

        if (!empty($this->data)) {

            $option=$this->data['Option'][$this->data['Question']['answer']]['option'];

            $this->Question->create();
            if ($this->Question->saveAll($this->data)) {
                $q_id=$this->Question->getLastInsertID();

                $option_id=$this->Question->Option->find('first',
                    array(
                        'conditions'=>array(
                            'Option.question_id' => $q_id,
                             'Option.option'=>$option
                        )
                    )
                );

                $this->Question->Answer->set('option_id',$option_id['Option']['id']);
                $this->Question->Answer->set('question_id',$q_id);
                $this->Question->Answer->saveAll();
                $this->Session->setFlash('The question has been saved', true);
                $this->redirect(array('action' => 'index',$this->Question->assessment_id));
            } else {
                $this->Session->setFlash('The question could not be saved. Please, try again.', true);
            }
        }
        $this->set('assessments',$this->Question->Assessment->find('list',array('fields'=>array('Assessment.topic'))));
    }


    function view($id,$count){
        $user_id = $this->Auth->user('id');
        $this->set('user_id',$user_id);
        $this->log($user_id);
        $not_allowed=$this->Question->Result->find('count',array(
            'conditions'=>array(
            'Result.user_id'=>$user_id
        )
        ));
        $this->log($not_allowed);
        $this->Question->Assessment->id=$id;
        $total_questions=$this->Question->find('count',array('conditions'=>array(
                       'assessment_id'=>$id
        )));
        if($not_allowed>=$total_questions){
            $this->Session->setFlash('You have already given the exam and not allowed to give again', true);
            $this->Redirect(array('controller'=>'assessments','action'=>'index'));
        }else{

            $this->set('ass_id',$this->Question->Assessment->id);
            $this->log($count);
            $this->set('count',$count);

            $this->set('questions',$this->Question->find('first',array(
                'conditions'=>array(
                'assessment_id'=>$id,
                'question_id'=>rand(1,$total_questions)
            )
            )));
        }
    }
//'order'=>array('rand()'),

}


?>