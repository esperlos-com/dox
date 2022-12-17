<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Medium
 * 
 * @property int $id
 * @property string $url
 * @property int $type
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Medium extends Model
{
	protected $table = 'media';

	protected $casts = [
		'type' => 'int'
	];

	protected $fillable = [
		'url',
		'type'
	];
}
