<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public static $review;
    public static $image, $imageName, $imageUrl, $directory, $extension;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'. self::$extension;
        self::$directory = 'review-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory. self::$imageName;

        return self::$imageUrl;
    }

    public static function newReview($request)
    {
        self::$review = new Review();
        self::$review->name = $request->name;
        self::$review->from = $request->from;
        self::$review->description = $request->description;
        self::$review->image = self::getImageUrl($request);
        self::$review->save();
    }
}
