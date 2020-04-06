<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Lesson;
use App\Model\Video;
class LessonController extends CommonController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Lesson::paginate(3);
        return view('admin.lesson.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Lesson $lesson)
    {

        if($request->hasFile('preview') && $request->file('preview')->isValid()){
            $uploads = $request->file('preview');
            $path = $uploads->store(date('Ymd'),'local');
            $preview='/uploads/'.$path;
        }
        $lesson->title = $request -> title;
        $lesson->introduce = $request -> introduce;
        $lesson->preview = $preview;
        $lesson->iscommend = $request -> iscommend;
        $lesson->ishot = $request -> ishot;
        $lesson->click = $request -> click;
        $lesson->save();
        
        $videos = json_decode($request['videos'],true);
        foreach($videos as $key => $vv){
            $lesson->videos()->create($vv);
                    }
        flash('添加课程成功')->overlay();
        return redirect('admin/lesson');
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
        $lesson = Lesson::find($id);
        $video = json_encode($lesson->videos()->get()->toArray(),JSON_UNESCAPED_UNICODE);
       //dd($video);
        return  view('admin.lesson.edit',compact('lesson','video'));
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
        $lesson = Lesson::find($id);
        if($request->hasFile('preview') && $request->file('preview')->isValid()){
            $uploads = $request->file('preview');
            $path = $uploads->store(date('Ymd'),'local');
            $preview='/uploads/'.$path;
            $lesson->preview = $preview;
        }
        $lesson->title = $request -> title;
        $lesson->introduce = $request -> introduce; 
        $lesson->iscommend = $request -> iscommend;
        $lesson->ishot = $request -> ishot;
        $lesson->click = $request -> click;
        $lesson->save();
        Video::where('lesson_id',$id)->delete();
        $videos = json_decode($request->videos,true);
        foreach($videos as $video){
           $lesson->videos()->create([
               'title' => $video['title'],
               'path' => $video['path'],]
           );
        }
        flash('修改课程成功')->overlay();
        return redirect('admin/lesson');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lesson::destroy($id);
        Video::where('lesson_id',$id)->delete();
        return $this->success('删除成功');
    }
}
