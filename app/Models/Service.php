<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    private static $service, $image, $imageName, $imageUrl, $directory, $extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'. self::$extension;
        self::$directory = 'service-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newService($request)
    {
        self::$service = new Service();
        self::$service->name = $request->name;
        self::$service->description = $request->description;
        self::$service->image =  self::getImageUrl($request);
        self::$service->save();
    }
    public static function updateService($request, $id)
    {
        self::$service = Service::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$service->image))
            {
                unlink(self::$service->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$service->image;
        }
        self::$service->name = $request->name;
        self::$service->description = $request->description;
        self::$service->image =  self::$imageUrl;
        self::$service->save();
    }
    public static function deleteService($id)
    {
        self::$service = Service::find($id);
        if(file_exists(self::$service->image))
        {
            unlink(self::$service->image);
        }
        self::$service->delete();
    }
}
