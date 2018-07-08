<?php
namespace App;

class Comment extends Model
{
    protected $table='comments';
    public $primaryKey='id';
    protected $fillable = [
        'parent_id',
        'comment',
        'post_id',
        'user_id'
    ];


    public function post(){
        return $this->belongsTo('App\Model\Post');
    }

    public function user(){
        return $this->belongsTo('App\Model\User');
    }

    public function replies() {
        return $this->hasMany('App\Model\Comment', 'parent_id');
    }
}