<?php

namespace App\Http\Controllers;

use App\Models\MisMenu;
use Illuminate\Http\Request;

class MisMenuController extends Controller
{
    public function index()
    {
        $menus = MisMenu::paginate(20);
        return view('sysadmin.menus.index', compact('menus'));
    }

    public function create()
    {

        $menus = Mismenu::all();
        return view('sysadmin.menus.create', compact('menus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'menu' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'parent' => 'nullable|integer',
            'role' => 'nullable|string|max:255',
        ]);

        MisMenu::create($request->all());

        return redirect()->route('mis_menu.index')->with('success', 'Menu created successfully.');
    }

    public function edit(MisMenu $misMenu)
    {
        return view('mis_menu.edit', compact('misMenu'));
    }

    public function update(Request $request, MisMenu $misMenu)
    {
        $request->validate([
            'menu' => 'nullable|string|max:255',
            'url' => 'nullable|string|max:255',
            'category' => 'nullable|string|max:255',
            'parent' => 'nullable|integer',
            'role' => 'nullable|string|max:255',
        ]);

        $misMenu->update($request->all());

        return redirect()->route('mis_menu.index')->with('success', 'Menu updated successfully.');
    }

    public function destroy(MisMenu $misMenu)
    {
        $misMenu->delete();

        return redirect()->route('mis_menu.index')->with('success', 'Menu deleted successfully.');
    }
}
