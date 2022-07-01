<?php

// This file is auto-generated, don't edit it. Thanks.
namespace Alipay\EasySDK\Base\OAuth\Models;

use AlibabaCloud\Tea\Model;

class AlipayUserInfoShareResponse extends Model {
    protected $_name = [
        'httpBody' => 'http_body',
        'code' => 'code',
        'msg' => 'msg',
        'avatar' => 'avatar',
        'cert_no' => 'cert_no',
        'cert_type' => 'cert_type',
        'mobile' => 'mobile',
        'nick_name' => 'nick_name',
        'user_id' => 'user_id',
        'user_name' => 'user_name',
    ];
    public function validate() {
        Model::validateRequired('httpBody', $this->httpBody, true);
        Model::validateRequired('code', $this->code, true);
        Model::validateRequired('msg', $this->msg, true);
        Model::validateRequired('avatar', $this->avatar, true);
        Model::validateRequired('certNo', $this->cert_no, true);
        Model::validateRequired('certType', $this->cert_type, true);
        Model::validateRequired('mobile', $this->mobile, true);
        Model::validateRequired('nickName', $this->nick_name, true);
        Model::validateRequired('userId', $this->user_id, true);
        Model::validateRequired('userName', $this->user_name, true);
    }
    public function toMap() {
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
        if (null !== $this->avatar) {
            $res['avatar'] = $this->avatar;
        }
        if (null !== $this->certNo) {
            $res['cert_no'] = $this->certNo;
        }
        if (null !== $this->certType) {
            $res['cert_type'] = $this->certType;
        }
        if (null !== $this->mobile) {
            $res['mobile'] = $this->mobile;
        }
        if (null !== $this->nickName) {
            $res['nick_name'] = $this->nickName;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return AlipaySystemOauthTokenResponse
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['http_body'])){
            $model->httpBody = $map['http_body'];
        }
        if(isset($map['code'])){
            $model->code = $map['code'];
        }
        if(isset($map['msg'])){
            $model->msg = $map['msg'];
        }
        if(isset($map['avatar'])){
            $model->avatar = $map['avatar'];
        }
        if(isset($map['cert_no'])){
            $model->certNo = $map['cert_no'];
        }
        if(isset($map['cert_type'])){
            $model->certType = $map['cert_type'];
        }
        if(isset($map['mobile'])){
            $model->mobile = $map['mobile'];
        }
        if(isset($map['nick_name'])){
            $model->nickName = $map['nick_name'];
        }
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        if(isset($map['user_name'])){
            $model->userName = $map['user_name'];
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
    public $avatar;

    /**
     * @var string
     */
    public $certNo;

    /**
     * @var string
     */
    public $certType;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $nickName;

    /**
     * @var string
     */
    public $userName;

}
