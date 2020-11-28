<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;

use App\Preference;
use Illuminate\Http\Request;

class PreferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexa()
    {
        $data['page_title']="Preferences";
        return view('admin.preferences',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
            if($request->isMethod('post')){
                $data = $request->all();
                //echo "<pre>"; print_r($data); die;
                Preference::where(['name'=>'facebook_link'])->update(['value'=>$data['facebook_link']]);
                Preference::where(['name'=>'linkedin_link'])->update(['value'=>$data['linkedin_link']]);
          
                Preference::where(['name'=>'twitter_link'])->update(['value'=>$data['twitter_link']]);
                
                Preference::where(['name'=>'heading1'])->update(['value'=>$data['heading1']]);
                Preference::where(['name'=>'link1'])->update(['value'=>$data['link1']]);
                Preference::where(['name'=>'contactus_meta_title'])->update(['value'=>$data['contactus_meta_title']]);
                Preference::where(['name'=>'contactus_meta_description'])->update(['value'=>$data['contactus_meta_description']]);
                Preference::where(['name'=>'adress'])->update(['value'=>$data['adress']]);
                Preference::where(['name'=>'telephone'])->update(['value'=>$data['telephone']]);
                Preference::where(['name'=>'email'])->update(['value'=>$data['email']]);
                Preference::where(['name'=>'opening_time'])->update(['value'=>$data['opening_time']]);
                Preference::where(['name'=>'google_plus_link'])->update(['value'=>$data['google_plus_link']]);
                Preference::where(['name'=>'footer_copyright'])->update(['value'=>$data['footer_copyright']]);
                Preference::where(['name'=>'heading1_description'])->update(['value'=>$data['heading1_description']]);
                //About Us //
                Preference::where(['name'=>'aboutus_title'])->update(['value'=>$data['aboutus_title']]);
                Preference::where(['name'=>'aboutus_description1'])->update(['value'=>$data['aboutus_description1']]);
                Preference::where(['name'=>'aboutus_description2'])->update(['value'=>$data['aboutus_description2']]);
                Preference::where(['name'=>'aboutus_button_text'])->update(['value'=>$data['aboutus_button_text']]);
                Preference::where(['name'=>'vat'])->update(['value'=>$data['vat']]);
                //Home Page data enable disable 
                Preference::where(['name'=>'products'])->update(['value'=>$data['products']]);
                Preference::where(['name'=>'training'])->update(['value'=>$data['training']]);
                Preference::where(['name'=>'media'])->update(['value'=>$data['media']]);
                Preference::where(['name'=>'clients'])->update(['value'=>$data['clients']]);
                Preference::where(['name'=>'video_link'])->update(['value'=>$data['video_link']]);

                Preference::where(['name'=>'bank_name'])->update(['value'=>$data['bank_name']]);
                Preference::where(['name'=>'iban'])->update(['value'=>$data['iban']]);
                Preference::where(['name'=>'instagram_link'])->update(['value'=>$data['instagram_link']]);
                Preference::where(['name'=>'pinterestg_link'])->update(['value'=>$data['pinterest_link']]);
                
                Preference::where(['name'=>'app_dev'])->update(['value'=>$data['app_dev']]);
                Preference::where(['name'=>'web_dev'])->update(['value'=>$data['web_dev']]);
                Preference::where(['name'=>'design'])->update(['value'=>$data['design']]);
                Preference::where(['name'=>'marketing'])->update(['value'=>$data['marketing']]);
                Preference::where(['name'=>'soft_dev'])->update(['value'=>$data['soft_dev']]);
                Preference::where(['name'=>'seo'])->update(['value'=>$data['seo']]);

         


                Preference::where(['name'=>'header'])->update(['value'=>$data['header']]);
                Preference::where(['name'=>'plantool_popup_text'])->update(['value'=>$data['plantool_popup_text']]);

                // Upload Image
                if($request->hasFile('logo')){
                    $logo = $this->uploadImage($request->logo);
                    Preference::where(['name'=>'logo'])->update(['value'=>$logo]);
                }

                if($request->hasFile('aboutus_picture')){
                    $aboutus_picture = $this->uploadImage($request->aboutus_picture);
                    Preference::where(['name'=>'aboutus_picture'])->update(['value'=>$aboutus_picture]);
                }

                return redirect()->back()->with('flash_message_success','Preferences Updated successfully!');
            }

            $page_title = "Preferences";
            $data['facebook_link'] = Preference::where(['name'=>'facebook_link'])->pluck('value')->first();
            $data['twitter_link'] = Preference::where(['name'=>'twitter_link'])->pluck('value')->first();
             $data['instagram_link'] = Preference::where(['name'=>'instagram_link'])->pluck('value')->first();
            $data['pinterest_link'] = Preference::where(['name'=>'pinterest_link'])->pluck('value')->first();
            $data['linkedin_link'] = Preference::where(['name'=>'linkedin_link'])->pluck('value')->first();
            $data['google_plus_link'] = Preference::where(['name'=>'google_plus_link'])->pluck('value')->first();
            $data['heading1'] = Preference::where(['name'=>'heading1'])->pluck('value')->first();
            $data['link1'] = Preference::where(['name'=>'link1'])->pluck('value')->first();
            $data['contactus_meta_title'] = Preference::where(['name'=>'contactus_meta_title'])->pluck('value')->first();
            $data['contactus_meta_description'] = Preference::where(['name'=>'contactus_meta_description'])->pluck('value')->first();
            $data['adress'] = Preference::where(['name'=>'adress'])->pluck('value')->first();
            $data['telephone'] = Preference::where(['name'=>'telephone'])->pluck('value')->first();
            $data['email'] = Preference::where(['name'=>'email'])->pluck('value')->first();
            $data['opening_time'] = Preference::where(['name'=>'opening_time'])->pluck('value')->first();
            $data['footer_copyright'] = Preference::where(['name'=>'footer_copyright'])->pluck('value')->first();
            $data['vat'] = Preference::where(['name'=>'vat'])->pluck('value')->first();
            $data['heading1_description'] = Preference::where(['name'=>'heading1_description'])->pluck('value')->first();
            $data['logo'] = Preference::where(['name'=>'logo'])->pluck('value')->first();
            
            // About Us //
            $data['aboutus_picture'] = Preference::where(['name'=>'aboutus_picture'])->pluck('value')->first();
            $data['aboutus_title'] = Preference::where(['name'=>'aboutus_title'])->pluck('value')->first();
            $data['aboutus_description1'] = Preference::where(['name'=>'aboutus_description1'])->pluck('value')->first();
            $data['aboutus_description2'] = Preference::where(['name'=>'aboutus_description2'])->pluck('value')->first();
            $data['aboutus_button_text'] = Preference::where(['name'=>'aboutus_button_text'])->pluck('value')->first();

            $data['products'] = Preference::where(['name'=>'products'])->pluck('value')->first();
            $data['training'] = Preference::where(['name'=>'training'])->pluck('value')->first();
            $data['media'] = Preference::where(['name'=>'media'])->pluck('value')->first();
            $data['clients'] = Preference::where(['name'=>'clients'])->pluck('value')->first(); 
            $data['header'] = Preference::where(['name'=>'header'])->pluck('value')->first();
            $data['video_link'] = Preference::where(['name'=>'video_link'])->pluck('value')->first(); 
            $data['bank_name'] = Preference::where(['name'=>'bank_name'])->pluck('value')->first(); 
            $data['iban'] = Preference::where(['name'=>'iban'])->pluck('value')->first(); 

            $data['seo'] = Preference::where(['name'=>'seo'])->pluck('value')->first();
            $data['marketing'] = Preference::where(['name'=>'marketing'])->pluck('value')->first();
             $data['web_dev'] = Preference::where(['name'=>'web_dev'])->pluck('value')->first();
            $data['soft_dev'] = Preference::where(['name'=>'soft_dev'])->pluck('value')->first();
            $data['app_dev'] = Preference::where(['name'=>'app_dev'])->pluck('value')->first();
            $data['design'] = Preference::where(['name'=>'design'])->pluck('value')->first();
            $data['plantool_popup_text'] = Preference::where(['name'=>'plantool_popup_text'])->pluck('value')->first(); 
            return view('admin.preferences')->with(compact('data','page_title'));



        }

        private function uploadImage($image){
            $image_tmp = $image; //Input::file('image');
            if($image_tmp->isValid()){
                $extension = $image_tmp->getClientOriginalExtension();
                $filename = rand(111,99999).'.'.$extension;
                $image_path = 'images/'.$filename;
                Image::make($image_tmp)->save($image_path);
                return $filename;
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
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function show(Preference $preference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function edit(Preference $preference)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Preference $preference)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Preference  $preference
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preference $preference)
    {
        //
    }
}
