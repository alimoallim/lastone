<?php
namespace App\Models;
use CodeIgniter\Model;
class ProjectModel extends Model{
    protected $table="projects";
    protected $primarykey="id";
    protected $allowedFields =["projectname","description","status"];
}

