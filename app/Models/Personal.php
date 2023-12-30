<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;
    private static $personal, $image, $imageName, $imageUrl, $directory, $extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'. self::$extension;
        self::$directory = 'personal-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;

        return self::$imageUrl;
    }
    public static function newPersonal($request)
    {
        self::$personal = new Personal();
        self::$personal->name = $request->name;
        self::$personal->email = $request->email;
        self::$personal->mobile =  $request->mobile;
        self::$personal->age = $request->age;
        self::$personal->location = $request->location;
        self::$personal->dob = $request->dob;
        self::$personal->profession = $request->profession;
        self::$personal->description = $request->description;
        self::$personal->image = self::getImageUrl($request);
        self::$personal->save();
    }
    public static function updatePersonal($request, $id)
    {
        self::$personal = Personal::find($id);
        if($request->file('image'))
        {
            if(file_exists(self::$personal->image))
            {
                unlink(self::$personal->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$personal->image;
        }
        self::$personal->name = $request->name;
        self::$personal->email = $request->email;
        self::$personal->mobile =  $request->mobile;
        self::$personal->age = $request->age;
        self::$personal->location = $request->location;
        self::$personal->dob = $request->dob;
        self::$personal->profession = $request->profession;
        self::$personal->description = $request->description;
        self::$personal->image =  self::$imageUrl;
        self::$personal->save();
    }
    public static function deletePersonal($id)
    {
        self::$personal = Personal::find($id);
        if(file_exists(self::$personal->image))
        {
            unlink(self::$personal->image);
        }
        self::$personal->delete();
    }
}
