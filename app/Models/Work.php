<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    use HasFactory;

    private static $work, $image, $imageName, $imageUrl, $directory, $extension;


    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'. self::$extension;
        self::$directory = 'work-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newWork($request)
    {
        self::$work = new Work();
        self::$work->category_name = $request->category_name;
        self::$work->project_name = $request->project_name;
        self::$work->project_url = $request->project_url;
        self::$work->client_name =  $request->client_name;
        self::$work->industry_name = $request->industry_name;
        self::$work->technologist = $request->technologist;
        self::$work->project_description = $request->project_description;
        self::$work->image = self::getImageUrl($request);
        self::$work->save();
    }

    public static function updateWork($request, $id)
    {
        self::$work = Work::find($id);
        if($request->image)
        {
            if(file_exists(self::$work->image))
            {
                unlink(self::$work->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$work->image;
        }
        self::$work->category_name = $request->category_name;
        self::$work->project_name = $request->project_name;
        self::$work->project_url = $request->project_url;
        self::$work->complete_date = date('Y-m-d');
        self::$work->client_name =  $request->client_name;
        self::$work->industry_name = $request->industry_name;
        self::$work->technologist = $request->technologist;
        self::$work->project_description = $request->project_description;
        self::$work->image = self::$imageUrl;
        self::$work->save();
    }
    public static function deleteWork($id)
    {
        self::$work = Work::find($id);
        if(file_exists(self::$work->image))
        {
            unlink(self::$work->image);
        }
        self::$work->delete();
    }
}
