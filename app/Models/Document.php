<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use App\Http\Helpers\DocumentHelper;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Document
 *
 * @property int $id
 * @property int $version_id
 * @property int $menu_id
 * @property string|null $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Menu $menu
 * @property Version $version
 * @property DocumentTl $document_tl
 *
 * @package App\Models
 */
class Document extends Model
{
	protected $table = 'documents';



	protected $casts = [
		'version_id' => 'int',
		'menu_id' => 'int'
	];

	protected $fillable = [
		'version_id',
		'menu_id',
		'content'
	];

	public function menu()
	{
		return $this->belongsTo(Menu::class);
	}

	public function version()
	{
		return $this->belongsTo(Version::class);
	}

	public function document_tl()
	{
		return $this->hasOne(DocumentTl::class);
	}


}
