<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Client;
use Image;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::get();
        $clients = json_decode(json_encode($clients));
        //echo "<pre>"; print_r($products); die;
        $page_title = "Clients Information";
        return view('admin.view_clients')->with(compact('clients','page_title'));
       
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function addClient()
    {
    
        //echo "<pre>"; print_r($products); die;
        $page_title = "Client Registration";
        return view('admin.add_client')->with(compact('page_title'));
       
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
                'image' => 'required',
                'link' => 'required'
            ]);

            $data = $request->all();
            $slider = new Client;
            $slider->title = $data['title'];
            
           
            // Upload Image
            if($request->hasFile('image')){
                $image_tmp = $request->image; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = public_path('images/clients/'.$filename);
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $slider->image = $filename;
                }
            }
            
            $slider->link = (!empty($data['link'])) ? $data['link'] : "";
            $slider->description = (!empty($data['description'])) ? $data['description'] : "";

            $slider->save();
            /*return redirect()->back()->with('flash_message_success','Product has been added successfully!');*/
            return redirect('view-clients')->with('flash_message_success','Client  has been registered successfully!');
        
         }
        $page_title = "Register Client";
        return view('admin.add_client')->with(compact('page_title'));
    
    }

     public function editClient(Request $request, $id = null){

        if($request->isMethod('post')){
            $data = request()->validate([
                'link' => 'required'
            ]);

            $data = $request->all();
            $new_array  = array(
                'title' => $data['title'],
                'link' => (!empty($data['link'])) ? $data['link'] : "",
                'description' => (!empty($data['description'])) ? $data['description'] : "",
            );
            if($request->hasFile('image')){
                $image_tmp = $request->image; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = 'images/slider/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $new_array['image'] = $filename;
                }
            }
             

            Client::where(['id'=>$id])->update($new_array);
            return redirect('view-clients')->with('flash_message_success','Client Record updated Successfully!');
        }
        $clientDetails = Client::where(['id'=>$id])->first();        
        $page_title = "Edit Client record";
        return view('admin.edit_client')->with(compact('clientDetails','page_title'));
    }

     public function deleteClient(Request $request, $id = null){
               if(!empty($id)){
            Client::where(['id'=>$id])->delete();


            return redirect()->back()->with('flash_message_success','Client data deleted Successfully!');
        }
    }



}
