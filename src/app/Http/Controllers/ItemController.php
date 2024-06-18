<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Category;
use App\Models\CategoryItem;
use App\Models\Condition;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::with('condition')->get();
        return view('user.index', compact('items'));
    }

    public function itemDetail($id)
    {
        $item_detail = Item::find($id);
        return view('user.item', compact('item_detail'));
    }

    public function sell()
    {
        return view('user.sell');
    }
}
