<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Language
 * 
 * @property string $id
 * @property string $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property DocumentTl $document_tl
 * @property MenuTl $menu_tl
 *
 * @package App\Models
 */
class Language extends Model
{
	protected $table = 'languages';
	public $incrementing = false;

	protected $fillable = [
		'title'
	];

	public function document_tl()
	{
		return $this->hasOne(DocumentTl::class);
	}

	public function menu_tl()
	{
		return $this->hasOne(MenuTl::class);
	}
}
