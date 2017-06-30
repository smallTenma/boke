<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display("index");
    }
    public function add_article(){
        $this->display("add_article");
    }
    public function add_flink(){
        $this->display("add_flink");
    }
    public function article(){
        $this->display("article");
    }
    public function category(){
        $this->display("category");
    }
    public function comment(){
        $this->display("comment");
    }
    public function loginlog(){
        $this->display("loginlog");
    }
    public function manageUser(){
        $this->display();
    }
    public function notice(){
        $this->display("notice");
    }
    public function readset(){
        $this->display("readset");
    }
    public function setting(){
        $this->display("setting");
    }
    public function updateArticle(){
        $this->display("updateArticle");
    }
    public function updateCategory(){
        $this->display("updateCategory");
    }
    public function updateflink(){
        $this->display("updateflink");
    }
    public function login(){
        $this->display("login");
    }
    public function add_notice(){
        $this->display("add_notice");
    }
    public function flink(){
        $this->display();
    }

}