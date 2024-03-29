<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AntChain\Ak_18805cb0f08c4da1a801fff1a8159f4d\Models;

use AlibabaCloud\Tea\Model;

class QueryAntchainWindwardIndividualtaxScoreResponse extends Model
{
    // 请求唯一ID，用于链路跟踪和问题排查
    /**
     * @var string
     */
    public $reqMsgId;

    // 结果码，一般OK表示调用成功
    /**
     * @var string
     */
    public $resultCode;

    // 异常信息的文本描述
    /**
     * @var string
     */
    public $resultMsg;

    // 分数区间
    /**
     * @var string
     */
    public $range;
    protected $_name = [
        'reqMsgId'   => 'req_msg_id',
        'resultCode' => 'result_code',
        'resultMsg'  => 'result_msg',
        'range'      => 'range',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reqMsgId) {
            $res['req_msg_id'] = $this->reqMsgId;
        }
        if (null !== $this->resultCode) {
            $res['result_code'] = $this->resultCode;
        }
        if (null !== $this->resultMsg) {
            $res['result_msg'] = $this->resultMsg;
        }
        if (null !== $this->range) {
            $res['range'] = $this->range;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryAntchainWindwardIndividualtaxScoreResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['req_msg_id'])) {
            $model->reqMsgId = $map['req_msg_id'];
        }
        if (isset($map['result_code'])) {
            $model->resultCode = $map['result_code'];
        }
        if (isset($map['result_msg'])) {
            $model->resultMsg = $map['result_msg'];
        }
        if (isset($map['range'])) {
            $model->range = $map['range'];
        }

        return $model;
    }
}
