<?php


namespace App\Http\Controllers\Front_end;
use App\Http\Controllers\Controller;
use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.contact-us');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->isMethod('post')){
            $data = request()->validate([
                'first_name' => 'required',
                'last_name' => 'required',
                'phone' => 'required',
                'email' => 'required',
                'subject' => 'required',
                'message' => 'required',
            ]);

            $data = $request->all();
            $contact = new Contact;
            $contact->first_name = $data['first_name'];
            $contact->last_name = $data['last_name'];
            $contact->phone = $data['phone'];
            $contact->email = $data['email'];
            $contact->subject = $data['subject'];
            $contact->message = $data['message'];
            $contact->save();
            return redirect()->back()->with('flash_message_success','Your Message have been Sent!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
