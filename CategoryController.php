<?php

namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    const CATEGORIES = [
        'CT001' => ['code' => 'CT001', 'name' => 'PHP'],
        'CT002' => ['code' => 'CT002', 'name' => 'JavaScript'],
        'CT003' => ['code' => 'CT003', 'name' => 'Python'],
        ];
        function list(): View {
            return view('categories-list', [
            'catCode' => self::CATEGORIES,
            'categories' => CategoryController::CATEGORIES,
            ]);
        }
     function view(string $categoryCode) : View
     {
        return view('categories-view',[
            'category' => self::CATEGORIES[$categoryCode],
            'products' => ProductController::PRODUCTS,
        ]);
     }
}
