<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;

class ContactMessageController extends Controller
{
    public function index()
    {
        $messages = ContactMessage::all();
        return view('admin.contact-messages.index', compact('messages'));
    }

    public function create()
    {
        return view('admin.contact-messages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        ContactMessage::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent successfully.');
    }

    public function edit($id)
    {
        $message = ContactMessage::findOrFail($id);
        return view('admin.contact-messages.edit', compact('message'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string',
        ]);

        $message = ContactMessage::findOrFail($id);
        $message->update($request->all());

        return redirect()->route('admin.contact-messages.index')->with('success', 'Message updated successfully!');
    }

    public function destroy($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.contact-messages.index')->with('success', 'Message deleted successfully!');
    }
}

