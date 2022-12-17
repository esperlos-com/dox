<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MenuTl
 *
 * @property int $menu_id
 * @property string $language_id
 * @property string|null $title
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Language $language
 * @property Menu $menu
 *
 * @package App\Models
 */
class MenuTl extends Model
{
	protected $table = 'menu_tl';
	public $incrementing = false;

    public $primaryKey  = 'menu_id';

	protected $casts = [
		'menu_id' => 'int'
	];

	protected $fillable = [
		'menu_id',
		'language_id',
		'title'
	];

	public function language()
	{
		return $this->belongsTo(Language::class);
	}

	public function menu()
	{
		return $this->belongsTo(Menu::class);
	}
}
