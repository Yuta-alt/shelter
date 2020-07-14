<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FamilyController extends Controller
{
    public function add()
    {
        return view('admin.family.create');
    }

    public function create()
    {
        return redirect('admin/family/create');
    }

    public function edit()
    {
        return view('admin.family.edit');
    }

    public function update()
    {
        return redirect('admin/family/edit');
    }
}
