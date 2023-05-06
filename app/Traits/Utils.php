<?php


namespace App\Traits;

trait Utils
{
    /*    function makeImage($image)
      {
          $filename = uniqid() . '.' . $image->getClientOriginalExtension();

          $image_resize = Image::make($image->getRealPath())->orientate();
          $height = Image::make($image_resize)->height();
          $width = Image::make($image_resize)->width();
          $ratio = ($width / $height) * 9;
          $height = (int)round((540 * 9) / $ratio);
          $image_resize->resize('540', $height);
          $image_resize->save(public_path( 'img/' . $filename));
          return 'img/' .$filename;
      }*/

    function convertBadSymbols($string): array|string
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', 'ي', 'ك', 'ة'];
        $english = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'ی', 'ک', 'ه'];
        return str_replace($persian, $english, $string);
    }
}
