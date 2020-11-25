<?php


namespace Scrum\EloquentInfrastructure\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class UserStoryDataModel
 * @package Scrum\EloquentInfrastructure\Models
 *
 * @property integer $id
 * @property string $story
 * @property string|null $demo
 * @property integer|null $estimate
 * @property integer|null $seq
 */
class UserStoryDataModel extends Model
{
    protected $table = "user_stories";
    public $incrementing = false;
    protected $keyType = "string";

    public $guarded = [];
}