<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;
    private static $otherImage, $otherImages, $image, $imageName, $imageUrl, $directory, $extension;

    public static function getImageUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$imageName = rand(1000, 10000).'.'. self::$extension;
        self::$directory = 'work-other-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;
        return self::$imageUrl;
    }
    public static function newOtherImage($request, $id)
    {
        foreach ($request->file('other_image') as $image)
        {
            self::$otherImage = new OtherImage();
            self::$otherImage->work_id = $id;
            self::$otherImage->image = self::getImageUrl($image);
            self::$otherImage->save();
        }
    }
    public static function updateOtherImage($request, $id)
    {
        self::$otherImages = OtherImage::where('work_id', $id)->get();
        foreach (self::$otherImages as $image)
        {
            if(file_exists($image->image))
            {
                unlink($image->image);
            }
            $image->delete();
        }
        self::newOtherImage($request, $id);
    }
}
