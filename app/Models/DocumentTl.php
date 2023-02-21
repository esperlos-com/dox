<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DocumentTl
 *
 * @property int $document_id
 * @property string $language_id
 * @property string|null $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property Document $document
 * @property Language $language
 *
 * @package App\Models
 */
class DocumentTl extends Model
{
	protected $table = 'document_tl';
	public $incrementing = false;
    public $primaryKey  = 'document_id';

	protected $casts = [
		'document_id' => 'int'
	];

	protected $fillable = [
		'document_id',
		'language_id',
		'content'
	];

	public function document()
	{
		return $this->belongsTo(Document::class);
	}

	public function language()
	{
		return $this->belongsTo(Language::class);
	}
}
