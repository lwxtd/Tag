<?php

namespace Lwxtd\Tag;


use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
    /**
 * Laravel Taggable Package by Mostafa Habibi.
 */

class Tag extends Model
{

  use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


    protected $table = 'tags';
	public $timestamps = true;
	protected $fillable = ['taggable_id', 'taggable_type'];

	public function taggable()
	{
		return $this->morphTo();
	}





    public function AllTag(){

       // Tag::all('id', 'name');
    }


}
