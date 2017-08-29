<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Inbox;
use Carbon;

class InboxController extends Controller
{

    public function index()
    {
        $readInbox = Inbox::where('flag_read', 0)->update(['flag_read' => 1]);

        $getInbox = Inbox::get();

        return view('backend.inbox.index', compact('getInbox'));
    }
}
