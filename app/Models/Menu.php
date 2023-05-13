<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Menu
 *
 * @property int $id
 * @property string|null $slug
 * @property int|null $pid
 * @property string|null $title
 * @property int $order
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Menu|null $menu
 * @property Collection|Document[] $documents
 * @property MenuTl $menu_tl
 * @property Collection|Menu[] $menus
 *
 * @package App\Models
 */
class Menu extends Model
{
	protected $table = 'menus';



	protected $casts = [
		'pid' => 'int',
		'order' => 'int'
	];

	protected $fillable = [
		'slug',
		'pid',
		'title',
		'order'
	];

	public function menu()
	{
		return $this->belongsTo(Menu::class, 'pid');
	}

	public function documents()
	{
		return $this->hasMany(Document::class);
	}

	public function menu_tl()
	{
		return $this->hasOne(MenuTl::class);
	}

	public function submenus()
	{
		return $this->hasMany(Menu::class, 'pid');
	}



}
