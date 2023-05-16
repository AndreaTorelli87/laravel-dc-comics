<?php

   namespace App\Http\Controllers\Guest;

   use App\Http\Controllers\Controller;
   use Illuminate\Http\Request;
   // use App\Models\Train; se si usa un DB

   class PageController extends Controller
   {
      public function home() {
         $data = [
            $links = config("NavLinks.links")
         ];        

         return view("home", compact("data"));
      }
      
      // public function create() {
      //    $data = [
      //       $links = config("NavLinks.links")
      //    ];
      //    return view("create", compact("data"));
      // }
      // public function index() {
      //    $data = [
      //       $links = config("NavLinks.links")
      //    ];
      //    return view("index", compact("data"));
      // }
      // public function show() {
      //    $data = [
      //       $links = config("NavLinks.links")
      //    ];
      //    return view("show", compact("data"));
      // }
}
