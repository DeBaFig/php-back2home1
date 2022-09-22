<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Property;
class AddController extends Controller
{
    public function index()
    {
        return view('admin.add.add');
        // => resources/views/admin/add/add.blade.php
    }

}