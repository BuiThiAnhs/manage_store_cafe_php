<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CmsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function Laravel\Prompts\password;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        Session::put('page','cms');
        $CmsPages = CmsPage::get()-> toArray();
        return view('admin.account.count_cms')->with(compact('CmsPages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CmsPage $cmsPage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, $id=null)
    {
        Session::put('page','cms');
        if ($id ==""){
            $title ="Thêm quyền giám sát";
            $cmsPage = new CmsPage;
            $message ="Thêm thành công!";
        }
        else{
            $title="Sửa quyền giám sát";
            $cmsPage = CmsPage::find($id);
            $message ="Sửa thành công!";
        }
        if ($request->isMethod('post'))
        {
            $data = $request->all();
//            echo "<pre>";print_r($data);die;
            $ruler=[
                'title' =>'required',
                'url' =>'required',
                'description' =>'required',

            ];
            $customMessages=[
                'url.required'=>"Bắt buộc nhập đường dẫn",
                'description.required'=>"Bắt buộc nhập mô tả",
                'title.required'=>'Bắt buộc nhập tiêu đề',
            ];
            $this->validate($request, $ruler, $customMessages);

            $cmsPage->title =$data['title'];
            $cmsPage->url =$data['url'];
            $cmsPage->description =$data['description'];
            $cmsPage->meta_title =$data['meta_title'];
            $cmsPage->meta_description =$data['meta_desc'];
            $cmsPage->meta_keywords =$data['meta_key'];
            $cmsPage->status =1;
            $cmsPage->save();
            return redirect('admin/cms')->with('success_message',$message);
        }

        return view('admin.account.add_edit_cms')->with(compact('title','cmsPage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CmsPage $cmsPage)
    {
        Session::put('page','cms');
        if ($request->ajax())
        {
            $data = $request->all();
//            echo "<pre>"; print_r($data);die;
            if ($data['status'] =='Active' )
            {
                $status=0;
            }
            else{
                $status = 1;
            }
        }
        $cmsPage::where('id',$data['page_id'])->update(['status'=> $status]);
        return response()->json(['status'=>$status, ' id'=> $data['page_id']]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CmsPage $cmsPage, $id)
    {
        Session::put('page','cms');
        $cmsPage::where('id', $id)->delete();
        return redirect()->back()->with('success_message',"Xóa thành công");
    }
}
