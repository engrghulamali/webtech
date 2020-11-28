<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Image;
use App\BlogDetail;
use Illuminate\Http\Request;

class BlogDetailController extends Controller
{


      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexHome()
    {
        $data['blogs'] = BlogDetail::paginate(8);
        $data['last_blog'] = BlogDetail::orderBy('id','DESC')->first();
        return view('home.blog',$data);
    }

          /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function blogDetails(Request $request, $id)
    {

        $blog = BlogDetail::where('id',$id)->first();
        
        return view('home.blog-details',compact('blog'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home.blog-details');
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       $data['page_title'] = "Blogs";
       $data['blogs'] = BlogDetail::paginate(10);
    return view('admin.view_blogs',$data);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
     public function addBlog(Request $request){

        if($request->isMethod('post')){
            $data = request()->validate([
                'title' => 'required',
            ]);

            $data = $request->all();
            $slider = new BlogDetail;
            $slider->title = $data['title'];
            $slider->slug = (!empty($data['slug'])) ? $data['slug'] : "";
            $slider->topic = (!empty($data['topic'])) ? $data['topic'] : "";
            // Upload Image
            if($request->hasFile('image')){
                $image_tmp = $request->image; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = public_path('blogs/blogs/'.$filename);
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $slider->image = $filename;
                }
            }
              

            $slider->body = (!empty($data['body'])) ? $data['body'] : "";
            $slider->author = (!empty($data['author'])) ? $data['author'] : "";

            $slider->save();
            /*return redirect()->back()->with('flash_message_success','Product has been added successfully!');*/
            return redirect('view-blog')->with('flash_message_success','Blog  has been added successfully!');
        }
        $page_title = "Add Blog";
        return view('admin.add_blog')->with(compact('page_title'));
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

   

  public function editBlog(Request $request, $id = null){

        if($request->isMethod('post')){
            $data = request()->validate([
                'title' => 'required'
            ]);

            $data = $request->all();
            $new_array  = array(
                'title' => $data['title'],
                'slug' => (!empty($data['description'])) ? $data['description'] : "",
                'topic' => (!empty($data['topic'])) ? $data['topic'] : "",
                'image' => (!empty($data['image'])) ? $data['image'] : "",
                'body' => (!empty($data['body'])) ? $data['body'] : "",
                'author' => (!empty($data['author'])) ? $data['author'] : ""
            );
            if($request->hasFile('image')){
                $image_tmp = $request->image; //Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $image_path = 'images/blogs/'.$filename;
                    // Resize Images
                    Image::make($image_tmp)->save($image_path);
                    //Image::make($image_tmp)->resize(600,600)->save($medium_image_path);
                    //Image::make($image_tmp)->resize(300,300)->save($small_image_path);

                    // Store image name in products table
                    $new_array['image'] = $filename;
                }
            }

            BlogDetail::where(['id'=>$id])->update($new_array);
            return redirect('view-blog')->with('flash_message_success','Blog updated Successfully!');
        }
        $blogDetails = BlogDetail::where(['id'=>$id])->first();        
        $page_title = "Edit Blog";
        return view('admin.edit_blog')->with(compact('blogDetails','page_title'));
    }

    public function deleteSlider(Request $request, $id = null){
               if(!empty($id)){
            Slider::where(['id'=>$id])->delete();


            return redirect()->back()->with('flash_message_success','Slider data deleted Successfully!');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BlogDetail  $blogDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlogDetail $blogDetail)
    {
        //
    }

     public function deleteBlog(Request $request, $id = null){
               if(!empty($id)){
            BlogDetail::where(['id'=>$id])->delete();


            return redirect()->back()->with('flash_message_success','Blog data deleted Successfully!');
        }
    }
}
