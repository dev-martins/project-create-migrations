<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SupportMaterialCourseClasse extends Model
{
    use HasFactory;

    protected $table = 'support_material_course_classe';
    
    protected $primaryKey = 'id';
    
    protected $fillable = [
        "material_id",
        "course_id",
        "classe_id",
        "order",
    ];
}
