<?php namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\QuestionRequest;
use Illuminate\Http\Request;

class ContactsController extends AdminController {

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
        $searchContent = '';
        $searchFromDate = '';
        $searchToDate = '';

        $contents = Contact::latest('created_at');

        if ($request->input('q')) {
            $searchContent = urldecode($request->input('q'));
            $contents = $contents->where('name', 'LIKE', '%'. $searchContent. '%');
        }

        if ($request->input('from_date')) {
            $searchFromDate = urldecode($request->input('from_date'));
            $contents = $contents->where('created_at', '>', $searchFromDate.' 00:00:00');
        }

        if ($request->input('to_date')) {
            $searchToDate = urldecode($request->input('to_date'));
            $contents = $contents->where('created_at', '<', $searchToDate.' 23:59:59');
        }

        $contents = $contents->paginate(env('ITEM_PER_PAGE'));
        return view('admin.contact.index', compact('contents', 'searchContent', 'searchFromDate', 'searchToDate'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contact = Contact::findOrFail($id);
        return view('admin.contact.form', compact('contact'));
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @param QuestionRequest $request
     * @return Response
     */
	public function update($id, ContactRequest $request)
	{
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        flash('Cập nhân liên hệ thành công!', 'success');
        return redirect('admin/contacts');
	}
}
