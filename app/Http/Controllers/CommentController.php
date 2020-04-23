<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        return "esse é o index do CommentController";
    }
    public function create(){
        return "esse é o create do CommentController";
    }
    public function read(){
        return "esse é o read do CommentController";
    }
    public function edit(){
        return "esse é o edit do CommentController";
    }
    public function delete(){
        return "esse é o delete do CommentController";
    }
}
