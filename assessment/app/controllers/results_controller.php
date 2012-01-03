<?php
    class ResultsController extends AppController{
        var $name='Results';
        var $helpers = array('Html','Form');
        var $components =array('Session','Auth');
        function add(){

            if (!empty($this->data)) {
                $this->log($this->data);
                //$this->log($this->data['Result']['assessment_id']);
                $this->Result->create();
                if ($this->Result->saveAll($this->data)) {
                    $q_id=$this->data['Result']['question_id'];
                    $opt_id=$this->Result->Question->find('first',array(
                        'conditions'=>array(
                           'question_id'=>$q_id
                    ),

                ));

                $correct_ans=$opt_id['Answer']['option_id'];
                $given_ans=$this->data['Result']['option_id'];

                if($correct_ans==$given_ans){
                    $this->Result->set('output',1);
                    $this->Result->save();
                }else{
                    $this->Result->set('output',0);
                    $this->Result->save();
                }
               }
                if($this->data['Result']['count']==4){
                    $result=$this->Result->find('count',array(
                        'conditions'=>array(
                            'output'=>'1'
                        )
                    ));
                    $this->set('result',$result);

                }else{
                //$this->Session->write('data',$this->data['Result']['count']);
                $this->redirect(array('controller'=>'questions','action' => 'view',$this->data['Result']['assessment_id'],$this->data['Result']['count']));
                }
            }

        }
    }
