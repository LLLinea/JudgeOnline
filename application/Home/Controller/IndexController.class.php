<?php
namespace Home\Controller;


use Basic\Model\Exam\ExamModel;

class IndexController extends TemplateController {
    public function index(){
        ExamModel::instance()->test();
    }
}