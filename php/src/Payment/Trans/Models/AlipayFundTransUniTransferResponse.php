<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Alipay\EasySDK\Payment\Trans\Models;

use AlibabaCloud\Tea\Model;

class AlipayFundTransUniTransferResponse extends Model
{
    protected $_name = [
        'httpBody' => 'http_body',
        'code' => 'code',
        'msg' => 'msg',
        'order_id' => 'order_id',
        'out_biz_no' => 'out_biz_no',
        'pay_fund_order_id' => 'pay_fund_order_id',
        'status' => 'status',
        'trans_date' => 'trans_date'
    ];

    public function validate()
    {
        Model::validateRequired('httpBody', $this->httpBody, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('msg', $this->msg, true);
        Model::validateRequired('order_id', $this->orderId, true);
        Model::validateRequired('out_biz_no', $this->outBizNo, true);
        Model::validateRequired('pay_fund_order_id', $this->payFundOrderId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('trans_date', $this->transDate, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->httpBody) {
            $res['http_body'] = $this->httpBody;
        }
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }
        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
        }
        if (null !== $this->outBizNo) {
            $res['out_biz_no'] = $this->outBizNo;
        }
        if (null !== $this->payFundOrderId) {
            $res['pay_fund_order_id'] = $this->payFundOrderId;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->transDate) {
            $res['trans_date'] = $this->transDate;
        }
        return $res;
    }

    /**
     * @param array $map
     * @return AlipayFundTransUniTransferResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['http_body'])) {
            $model->httpBody = $map['http_body'];
        }
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }
        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }
        if (isset($map['out_biz_no'])) {
            $model->outBizNo = $map['out_biz_no'];
        }
        if (isset($map['pay_fund_order_id'])) {
            $model->payFundOrderId = $map['pay_fund_order_id'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['trans_date'])) {
            $model->transDate = $map['trans_date'];
        }

        return $model;
    }

    /**
     * @description 响应原始字符串
     * @var string
     */
    public $httpBody;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $msg;

    /**
     * @var string
     */
    public $subCode;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var string
     */
    public $outBizNo;

    /**
     * @var string
     */
    public $payFundOrderId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $transDate;

}

