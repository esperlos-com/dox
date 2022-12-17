<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Version
 * 
 * @property int $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Document[] $documents
 *
 * @package App\Models
 */
class Version extends Model
{
	protected $table = 'versions';

	protected $fillable = [
		'title'
	];

	public function documents()
	{
		return $this->hasMany(Document::class);
	}
}
