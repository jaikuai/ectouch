<?php

namespace app\models;

use think\Model;

/**
 * This is the model class for table "{{%ad}}".
 *
 * @property int $ad_id
 * @property int $position_id
 * @property int $media_type
 * @property string $ad_name
 * @property string $ad_link
 * @property string $ad_code
 * @property int $start_time
 * @property int $end_time
 * @property string $link_man
 * @property string $link_email
 * @property string $link_phone
 * @property string $click_count
 * @property int $enabled
 */
class Ad extends Model
{
    protected $table = 'ad';

    protected $pk = 'ad_id';

}
