<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Service extends Model
{

    /**
     * @var string
     */
    protected $table = 'services';

    protected $fillable = ['id', 'badge', 'name', 'title', 'image'];



    /**
     * заглушка пустой картинкой
     * @return string
     */
    public function getImage()
    {
        if($this->image == null)
        {
            return '/img/no-image.png';
        }
        return '/uploads/' . $this->image;
    }



    /**
     * загрузка картинки
     * @param $image
     */
    public function uploadImage($image)
    {
        if($image == null) { return; }
       // $this->removeImage();
        $filename = str_random(10) . '.' . $image->extension();
        $image->move('uploads',$filename);
        $this->image = $filename;
        $this->save();

    }



    /**
     * удаление картинки

     */
    public function removeImage()
    {
        if($this->image != null)
        {
            Storage::delete('uploads/' . $this->image);
        }
    }


}
