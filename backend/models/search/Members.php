<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Members as MembersModel;

/**
 * Members represents the model behind the search form about `backend\models\Members`.
 */
class Members extends MembersModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['uid', 'utype', 'email_audit', 'mobile_audit', 'reg_time', 'last_login_time', 'qq_binding_time', 'sina_binding_time', 'taobao_binding_time', 'status', 'robot', 'consultant', 'bindingtime', 'remind_email_time', 'sms_num', 'reg_type'], 'integer'],
            [['username', 'email', 'mobile', 'password', 'pwd_hash', 'reg_ip', 'last_login_ip', 'qq_openid', 'sina_access_token', 'taobao_access_token', 'qq_nick', 'sina_nick', 'taobao_nick', 'weixin_nick', 'avatars', 'weixin_openid', 'imei'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MembersModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'uid' => $this->uid,
            'utype' => $this->utype,
            'email_audit' => $this->email_audit,
            'mobile_audit' => $this->mobile_audit,
            'reg_time' => $this->reg_time,
            'last_login_time' => $this->last_login_time,
            'qq_binding_time' => $this->qq_binding_time,
            'sina_binding_time' => $this->sina_binding_time,
            'taobao_binding_time' => $this->taobao_binding_time,
            'status' => $this->status,
            'robot' => $this->robot,
            'consultant' => $this->consultant,
            'bindingtime' => $this->bindingtime,
            'remind_email_time' => $this->remind_email_time,
            'sms_num' => $this->sms_num,
            'reg_type' => $this->reg_type,
        ]);

        $query->andFilterWhere(['like', 'username', $this->username])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'mobile', $this->mobile])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'pwd_hash', $this->pwd_hash])
            ->andFilterWhere(['like', 'reg_ip', $this->reg_ip])
            ->andFilterWhere(['like', 'last_login_ip', $this->last_login_ip])
            ->andFilterWhere(['like', 'qq_openid', $this->qq_openid])
            ->andFilterWhere(['like', 'sina_access_token', $this->sina_access_token])
            ->andFilterWhere(['like', 'taobao_access_token', $this->taobao_access_token])
            ->andFilterWhere(['like', 'qq_nick', $this->qq_nick])
            ->andFilterWhere(['like', 'sina_nick', $this->sina_nick])
            ->andFilterWhere(['like', 'taobao_nick', $this->taobao_nick])
            ->andFilterWhere(['like', 'weixin_nick', $this->weixin_nick])
            ->andFilterWhere(['like', 'avatars', $this->avatars])
            ->andFilterWhere(['like', 'weixin_openid', $this->weixin_openid])
            ->andFilterWhere(['like', 'imei', $this->imei]);

        return $dataProvider;
    }
}
