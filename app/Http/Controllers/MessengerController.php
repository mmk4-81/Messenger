<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessengerController extends Controller
{
    public function index(): View
    {
        return view('messenger.index');
    }

}

  /** Search user profiles */
  function search(Request $request)
  {
      $getRecords = null;
      $input = $request['query'];
      $records = User::where('id', '!=', Auth::user()->id)
          ->where('name', 'LIKE', "%{$input}%")
          ->orWhere('user_name', 'LIKE', "%{$input}%")
          ->paginate(10);

      if ($records->total() < 1) {
          $getRecords .= "<p class='text-center'>Noting to show.</p>";
      }

      foreach ($records as $record) {
          $getRecords .= view('messenger.components.search-item', compact('record'))->render();
      }

      return response()->json([
          'records' => $getRecords,
          'last_page' => $records->lastPage()
      ]);
  }
