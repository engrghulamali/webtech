<?php
namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Image;

use App\TeamMate;
use Illuminate\Http\Request;

class TeamMateController extends Controller
{

     public function viewTeam(){
        $teams = TeamMate::get();
        $teams = json_decode(json_encode($teams));
       
        //echo "<pre>"; print_r($products); die;
        $page_title = "Team Mates";
        return view('admin.view_team')->with(compact('teams','page_title'));
    }

    public function teamAbout(){
        $teams = TeamMate::get();
        $teams = json_decode(json_encode($teams));
        return view('home.about-us')->with(compact('teams'));
    }
    public function addTeam(Request $request){

        if($request->isMethod('post')){
            $data = request()->validate([
                'name' => 'required',
                'position' => 'required',
                'image' => 'required'
            ]);

            $data = $request->all();
            $slider = new TeamMate;
            $slider->name = $data['name'];
            $slider->email = (!empty($data['email'])) ? $data['email'] : "";
            $slider->phone = (!empty($data['phone'])) ? $data['phone'] : "";
            $slider->skype = (!empty($data['skype'])) ? $data['skype'] : "";
            $slider->linkedin = (!empty($data['linkedin'])) ? $data['linkedin'] : "";
            $slider->position = (!empty($data['position'])) ? $data['position'] : "";
            // Upload Image
            if($request->hasFile('image')){
                $image_tmp = $request->image; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = public_path('images/teams/'.$filename);
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $slider->image = $filename;
                }
            }
              
            

            $slider->save();
            /*return redirect()->back()->with('flash_message_success','Product has been added successfully!');*/
            return redirect('view-team')->with('flash_message_success','Team Mate has been added successfully!');
        }
        $page_title = "Add Team Mate";
        return view('admin.add_team')->with(compact('page_title'));
    }

    public function editTeam(Request $request, $id = null){

        if($request->isMethod('post')){
            $data = request()->validate([
                 'name' => 'required',
                'position' => 'required',
                'image' => 'required'
            ]);

            $data = $request->all();
            $new_array  = array(
                'name' => $data['name'],
                'email' => (!empty($data['email'])) ? $data['email'] : "",
                'phone' => (!empty($data['phone'])) ? $data['phone'] : "",
                'skype' => (!empty($data['skype'])) ? $data['skype'] : "",
                'linkedin' => (!empty($data['linkedin'])) ? $data['linkedin'] : "",
                'position' => (!empty($data['position'])) ? $data['position'] : ""
            );
            if($request->hasFile('image')){
                $image_tmp = $request->image; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = 'images/teams/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $new_array['image'] = $filename;
                }
            }
              

            TeamMate::where(['id'=>$id])->update($new_array);
            return redirect('view-team')->with('flash_message_success','Team Mate updated Successfully!');
        }
        $teamDetails = TeamMate::where(['id'=>$id])->first();        
        $page_title = "Edit team Mate";
        return view('admin.edit_team')->with(compact('teamDetails','page_title'));
    }

    public function deleteTeam(Request $request, $id = null){
               if(!empty($id)){
            TeamMate::where(['id'=>$id])->delete();


            return redirect()->back()->with('flash_message_success','TeamMate data deleted Successfully!');
        }
    }

   
    
}

