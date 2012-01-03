<?php
    class TasksController extends AppController
    {

    	var $name = 'Tasks';
    	var $helpers = array('Html', 'Javascript', 'Ajax','Form');

    	function index()
    	{
    		// initial view
    		$this->set('data', $this->Task->find('all'));
    	}
        function add()
        	{
        		// adds new task to database
        		if (!empty($this->params['data']))
        		{
        			if ($this->Task->save($this->params['data']))
        			{
        				$this->set('data', $this->Task->find('all'));
        				$this->render('todo', 'ajax');
        			}
        			else
        			{
        				// do nothing
        			}
        		}
        	}

        	function done($id = null)
        	{
        		// move task from todo to done
        		$this->Task->id = $id;
        		$this->params['data']['Task']['done'] = 1;
        		if ($this->Task->save($this->params['data']))
        		{
        			$this->set('data', $this->Task->find('all'));
        			$this->render('done', 'ajax');
        		}
            }

        	function undo($id)
        	{
        		// moves task from done to todo
        		$this->Task->id = $id;
        		$this->params['data']['Task']['done'] = 0;
        		if ($this->Task->save($this->params['data']))
        		{
        			$this->set('data', $this->Task->find('all'));
        			$this->render('todo', 'ajax');
        		}
        	}

        	function delete($id)
        	{
        		// deletes task from database
        		$this->Task->del($id);
        		$this->set('data', $this->Task->find('all'));
        		$this->render('done', 'ajax');
            }
    }
