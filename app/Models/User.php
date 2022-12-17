<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $email
 * @property Carbon|null $email_verified_at
 * @property string|null $phone_number
 * @property string|null $sms_token
 * @property string|null $password
 * @property int $status
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Collection|PostComment[] $post_comments
 * @property Collection|PostFavorite[] $post_favorites
 * @property Collection|Post[] $posts
 *
 * @package App\Models
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

	protected $table = 'users';

	protected $casts = [
		'status' => 'int'
	];

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'sms_token',
		'password',
		'remember_token'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'email',
		'email_verified_at',
		'phone_number',
		'sms_token',
		'password',
		'status',
		'remember_token'
	];

	public function post_comments()
	{
		return $this->hasMany(PostComment::class);
	}

	public function post_favorites()
	{
		return $this->hasMany(PostFavorite::class);
	}

	public function posts()
	{
		return $this->belongsToMany(Post::class, 'post_users')
					->withPivot('id')
					->withTimestamps();
	}
}
