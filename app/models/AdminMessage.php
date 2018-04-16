<?php

namespace app\models;

use think\Model;

/**
 * Class AdminMessage
 */
class AdminMessage extends Model
{
    protected $table = 'admin_message';

    protected $primaryKey = 'message_id';

    public $timestamps = false;

    protected $fillable = [
        'sender_id',
        'receiver_id',
        'sent_time',
        'read_time',
        'readed',
        'deleted',
        'title',
        'message'
    ];

    protected $guarded = [];
}
