<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employees extends Model
{
    use HasFactory;

    protected $table = 'employees';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'phone','email','address','districtcode','pincode','course','year','state'
    ];
}
class districttable extends Model
{
    use HasFactory;

    protected $table = 'districttable';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'districtname','districtcode'
    ];
}
class statetable extends Model
{
    use HasFactory;

    protected $table = 'statetable';

    public $timestamps = false;
    /**
     * Fields.
     *
     * @var array
     */
    protected $fillable = [
        'statename','statecode'
    ];
}