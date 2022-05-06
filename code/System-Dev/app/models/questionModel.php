<?php

class questionModel
{


    public function __construct()
    {
        $this->db = new Model;
    }


    /**
     * create a question
     */
    public function createQuestion($data)
    {
        $this->db->query("INSERT INTO question (first_name, last_name, phone, email, question) VALUES (:first_name, :last_name, :phone, :email, :question)");
        $this->db->bind(":first_name", $data['first_name']);
        $this->db->bind(":last_name", $data['last_name']);
        $this->db->bind(":phone", $data['phone']);
        $this->db->bind(":email", $data['email']);
        $this->db->bind(":question", $data['question']);

        return $this->db->execute();
    }


    /**
     * Get all the questions
     */
    public function getAllQuestions()
    {
        $this->db->query(
            "SELECT * 
                FROM question"
        );
        return $this->db->getResultSet();
    }

    /**
     * delete a question
     */
    public function deleteQuestion($question_id)
    {
        $this->db->query(
            "DELETE 
                    FROM question 
                    WHERE question_id=:question_id"
        );

        $this->db->bind(':question_id', $question_id);

        return $this->db->execute();
    }
}
