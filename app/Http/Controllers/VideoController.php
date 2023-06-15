<?php
 
namespace App\Http\Controllers;
 
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
 
class VideoController extends Controller
{
    public function getVideoUploadForm()
    {
        return view('video-upload');
    }

    public function videoList()
    {
        return view('');
    }
    //Последние 10 видео
    public function index()
    {
        $Video = Video::offset(10)->limit(10); 
    }
//загрузка видео
    public function uploadVideo(Request $request)
   {
        $this->validate($request, [
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:300',
            'video' => 'required|file|mimetypes:video/mp4',
        ]);
 
        $fileName = $request->video->getClientOriginalName();
        $filePath = 'videos/' . $fileName;
 
        $isFileUploaded = Storage::disk('public')->put($filePath, file_get_contents($request->video));
 
        // File URL to access the video in frontend
        $url = Storage::disk('public')->url($filePath);
        if ($isFileUploaded) {
            $video = new Video();
            $video->title = $request->title;
            $video->description = $request->description;
            $video->path = $filePath;
            $video->save();
 
            return back()
            ->with('success','Video has been successfully uploaded.');
        }
 
        return back()
            ->with('error','Unexpected error occured');
    }
    //для отображения видео на странице
    public function allData(){
        return view('videoRols', ['data'=> Video::all()]);
    }
//для отображения видео на главной странице с лимитом в 10 записей
public function limite(){
    $limit= Video::Orderby('id', 'desc');
    return view('home', ['limits'=> $limit->limit(10)->get()]);
}
//Пробаа подключения лайков и дизлайков
public function likes()
{
    return $this->morphMany('App\Like', 'likeable');
}
}
return redirect('/welcome');
