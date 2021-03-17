<?php

namespace Lwxtd\Tag;









/**
 * Laravel taggable Package by Mostafa Habibi.
 */
trait taggable
{
	/**
	 * Boot the soft taggable trait for a model.
	 *
	 * @return void
	 */

	public static function bootTaggable()
	{

			static::deleting(function($model) {
				$model->detachTags();
			});


		// check if you want to remain tags even model deleted
		// if(static::removeTagsOnDelete()) {
		// 	static::deleting(function($model) {
		// 		$model->removeTags();
		// 	});
		// }
	}
		/**
	 * Should remove Tags on model row delete (defaults to true)
	 * public static removeTagsOnDelete = false;
	 */
	// public static function removeTagsOnDelete()
	// {
	// 	return isset(static::$removeTagsOnDelete)
	// 		? static::$removeTagsOnDelete
	// 		: true;
	// }






	/**
	 * Collection of the tags on this record
	 */
	public function tags()
	{
		return $this->morphMany(Tag::class, 'taggable');
	}



	/**
	 * Delete tags related to the current record
	 */
	//check to detach tags or delete?
	public function detachTags()
	{
		$this->tags()->detach();
	//	Tag::where('taggable_type', $this->morphClass)->where('taggable_id', $this->id)->delete();
	}












}
