<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recusive;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category){
        $this->category=$category;
    }
    
    public function create(){
        $data = $this->category->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive();
        //$htmlOption = $this->categoryRecusive(0);
        return view('category.add', compact('htmlOption'));
    }
    
    public function index(){
        return view('category.index');
    }
    public function store(Request $request){
        // Khi submit form thì this trỏ đến category và trỏ đến create
        // create thì nhận vào một mảng là data: ở đây có 2 key name and parent_id
        $this->category->create([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
            'slug'=>Str::slug($request->name)
        ]);
    }
}
