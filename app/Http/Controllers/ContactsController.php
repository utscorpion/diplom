<?php

namespace App\Http\Controllers;

use App\Mail\MailClass;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactsController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show()
    {
        return view('app.contacts');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function send (Request $request)
    {
        $this->validate($request, [
            'name' => 'required|between:5,45',
            'email' => 'required|email',
            'phone' => 'required|max:15',
            'comments' => 'required|max:1500'
        ]);

        Mail::to('admin@admin.ru')->send(new MailClass($request->all()));

        return redirect(route('contacts'));
    }
}
