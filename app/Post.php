<?php

namespace App;

use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements SluggableInterface
{
    use SluggableTrait;

    protected $sluggable = array(
        'build_from' => 'title',
        'save_to'    => 'slug',
        'unique'          => true,
        'on_update'       => true,
    );
    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'desc',
        'content',
        'image',
        'status',
        'seo_title',
        'views',
        'index_slide'
    ];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * post belong to one category.
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * like tags.
     * @param $query
     * @param $tag
     * @return mixed
     */
    public function scopeTagged($query, $tag)
    {
        if (strlen($tag) > 2) {
            $query->where('title', 'LIKE', '%'.$tag.'%');
        }
    }

    public function scopePublish($query)
    {
        $query->where('status', true);
    }

    /**
     * get the tags that associated with given post
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    /**
     * get the list tags of current post.
     * @return mixed
     */
    public function getTagListAttribute()
    {
        return $this->tags->lists('name')->all();
    }

    public function getRelatedPostsAttribute()
    {
        $limit = 5;
        
        $post_tag = $this->tags->lists('id');

        $relatedPosts = Post::publish()
            ->whereHas('tags', function($q) use ($post_tag){
                $q->whereIn('id', $post_tag);
            })
            ->where('id', '!=', $this->id)
            ->orderBy('updated_at', 'desc')
            ->limit($limit)
            ->get();

        $additionPosts = null;

        if ($relatedPosts->count() < $limit) {
            $categoryLimit = $limit - $relatedPosts->count();
            $additionPosts = Post::publish()
                ->where('category_id', $this->category_id)
                ->where('id', '!=', $this->id)
                ->orderBy('updated_at', 'desc')
                ->limit($categoryLimit)
                ->get();
        }
        if ($additionPosts) {
            foreach ($additionPosts as $post) {
               if (!in_array($post->id, $relatedPosts->lists('id')->all())) {
                   $relatedPosts->push($post);
               }
            }
        }
        
        return $relatedPosts;
    }
}
