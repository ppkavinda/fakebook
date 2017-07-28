<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'name',
        'email',
        'password',
        'fname',
        'lname',
        'dob',
        'gender',
        'location',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function nameOrEmail(){
        return $this->fname ?: $this->username;
    }

    public function meOfFriends(){
        return $this->belongsToMany(User::class, 'friends', 'friend_id', 'user_id')->withPivot('accepted');
    }

    public function friendsOfMine(){
        return $this->belongsToMany(User::class, 'friends', 'user_id', 'friend_id')->withPivot('accepted');
    }

    public function friends(){
        return $this->friendsOfMine()->wherePivot('accepted', true)->get()
            ->merge($this->meOfFriends()->wherePivot('accepted', true)->get());
    }

    public function requestsReceived(){
        return $this->meOfFriends()->wherePivot('accepted', false)->get();
    }

    public function requestsSent(){
        return $this->friendsOfMine()->wherePivot('accepted', false)->get();
    }

    public function isFriends($id){
        return in_array($id, $this->friends()->pluck('id')->all());
    }

    public function isRequest($id){
        return in_array($id, $this->requestsReceived()->pluck('id')->all());
    }

    public function isRequestSent($id){
        return in_array($id, $this->requestsSent()->pluck('id')->all());
    }

    public function requestAdd($id){
        $this->friendsOfMine()->attach($id);
    }

    public function requestConfirm($id){
        $this->meOfFriends()->where('user_id', $id)->update(['accepted' => true]);
    }

    public function posts(){
        return $this->hasMany(\App\Post::class);
    }

    public function comments(){
        return $this->hasMany(\App\Comment::class);
    }
}
