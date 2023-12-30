<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    private static $education;

    public static function newEducation($request)
    {
        self::$education = new Education();
        self::$education->name = $request->name;
        self::$education->university_name = $request->university_name;
        self::$education->starting_year = $request->starting_year;
        self::$education->ending_year = $request->ending_year;
        self::$education->description = $request->description;
        self::$education->save();
    }
    public static function updateEducation( $request, $id)
    {
        self::$education = Education::find($id);
        self::$education->name = $request->name;
        self::$education->university_name = $request->university_name;
        self::$education->starting_year = $request->starting_year;
        self::$education->ending_year = $request->ending_year;
        self::$education->description = $request->description;
        self::$education->save();
    }
    public static function deleteEducation($id)
    {
        self::$education = Education::find($id);
        self::$education->delete();
    }
}
