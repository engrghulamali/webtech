<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Slider;
use Image;
use Illuminate\Http\Request;

class SliderController extends Controller
{
   public function addSlider(Request $request){

        if($request->isMethod('post')){
            $data = request()->validate([
                'title' => 'required',
                'image' => 'required',
                'baner' => 'required'
            ]);

            $data = $request->all();
            $slider = new Slider;
            $slider->title = $data['title'];
            $slider->description = (!empty($data['description'])) ? $data['description'] : "";
            $slider->button_text = (!empty($data['button_text'])) ? $data['button_text'] : "";
            $slider->link = (!empty($data['link'])) ? $data['link'] : "";
            // Upload Image
            if($request->hasFile('image')){
                $image_tmp = $request->image; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = public_path('images/slider/'.$filename);
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $slider->image = $filename;
                }
            }
              if($request->hasFile('baner')){
                $image_tmp = $request->baner; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = public_path('images/slider/'.$filename);
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $slider->baner = $filename;
                }
            }

            $slider->save();
            /*return redirect()->back()->with('flash_message_success','Product has been added successfully!');*/
            return redirect('view-slider')->with('flash_message_success','Slider Image has been added successfully!');
        }
        $page_title = "Add Slider Image";
        return view('admin.add_slider')->with(compact('page_title'));
    }

    public function editSlider(Request $request, $id = null){

        if($request->isMethod('post')){
            $data = request()->validate([
                'title' => 'required'
            ]);

            $data = $request->all();
            $new_array  = array(
                'title' => $data['title'],
                'description' => (!empty($data['description'])) ? $data['description'] : "",
                'button_text' => (!empty($data['button_text'])) ? $data['button_text'] : "",
                'link' => (!empty($data['link'])) ? $data['link'] : ""
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
              if($request->hasFile('baner')){
                $image_tmp = $request->baner; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = 'images/slider/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $new_array['baner'] = $filename;
                }
            }

            Slider::where(['id'=>$id])->update($new_array);
            return redirect('view-slider')->with('flash_message_success','Slider updated Successfully!');
        }
        $sliderDetails = Slider::where(['id'=>$id])->first();        
        $page_title = "Edit Slider";
        return view('admin.edit_slider')->with(compact('sliderDetails','page_title'));
    }

    public function deleteSlider(Request $request, $id = null){
               if(!empty($id)){
            Slider::where(['id'=>$id])->delete();


            return redirect()->back()->with('flash_message_success','Slider data deleted Successfully!');
        }
    }

    public function viewSlider(){
        $sliderImages = Slider::get();
        $sliderImages = json_decode(json_encode($sliderImages));
        //echo "<pre>"; print_r($products); die;
        $page_title = "Slider Images";
        return view('admin.view_slider')->with(compact('sliderImages','page_title'));
    }
}
