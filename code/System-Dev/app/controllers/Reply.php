<?php

class Reply extends Controller
{
    public function __construct()
    {
        $this->questionModel = $this->model('questionModel');
    }

    public function index()
    {
        $questions = $this->questionModel->getAllQuestions();
        $data = [
            'questions' => $questions,
        ];

        $this->view('Reply/index', $data);
    }

    public function deleteQuestion($question_id)
    {
        $this->questionModel->deleteQuestion($question_id);
        header('Location: /System-Dev/Reply/index');

    }
}
