<?php

namespace common\models;

use Yii;
use common\helpers\Tree;
use common\models\PassportModel;
use Overtrue\Pinyin\Pinyin;

class RegionAll extends PassportModel
{
	public $provinceInfo;
	public $cityInfo;
	public $countyInfo;
	public $townInfo;
	public $villageInfo;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%region_all}}';
    }

    public static function getDb()
    {
        return Yii::$app->dbCommon;
    }	

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
           'id' => '地区ID',
            'name' => '名称',
            'parent_code' => '父级地区ID',
            'level' => '级别',
            'listorder' => '排序',
            'status' => '状态',			
        ];
    }

    /**
     * Get region parent
     * @return \yii\db\ActiveQuery
     */
    public function getRegionParent()
    {
        return $this->hasOne(Region::className(), ['code' => 'parent_code']);
    }

	/**
	 * Get the islog
	 *
	 * @return array
	 */
	public function getStatusInfos()
	{
		$datas = [
			'0' => '不显示',
			'1' => '显示',
		];	
		return $datas;
	}

	public function updateSpell()
	{
		$infos = $this->find()->where(['spell' => ''])->limit(5000)->all();
        $setting = [
            'delimiter' => '',
            'accent' => false,
        ];
		$skips = [
			'province' => ['市', '省', '壮族自治区', '维吾尔自治区', '回族自治区', '自治区'],
			'city' => ['市', '地区', '自治州', '蒙古'],
			'county' => ['自治县', '自治旗', '矿区', '区', '县', '市'],
			'town' => ['街道办事处', '地区办事处', '街道', '办事处', '镇', '乡'],
			'village' => [],//['社区'],//, '村'],
		];
		$noSkips = ['前旗', '后旗', '左旗', '右旗', '中旗', '正镶白旗', '正蓝旗', '红旗', '社旗'];
		$nations = [
		    '壮族','藏族','裕固族','彝族','瑶族',
		    '锡伯族','乌孜别克族','维吾尔族','佤族','土家族',
		    '土族','塔塔尔族','塔吉克族','水族','畲族',
		    '撒拉族','羌族','普米族','怒族','纳西族',
		    '仫佬族','苗族','蒙古族','门巴族','毛南族',
		    '满族','珞巴族','僳僳族','黎族','拉祜族',
		    '柯尔克孜族','景颇族','京族','基诺族','回族',
		    '赫哲族','哈萨克族','哈尼族','仡佬族','高山族',
		    '鄂温克族','俄罗斯族','鄂伦春族','独龙族','东乡族',
		    '侗族','德昂族','傣族','达斡尔族','朝鲜族',
		    '布依族','布朗族','保安族','白族','阿昌族',
		    '汉族',
		];
		$vSkips = ['一', '二', '三', '四', '五', '六', '七', '八', '九'];
		$i = 0;
		foreach ($infos as $info) {
			$level = $info['level'];
			//if ($level == 'province' || $level == 'city' || $level == 'county') { continue; }
			//if ($level != 'county') { continue; }
			//if ($level != 'town') { continue; }
			if ($level != 'village') { continue; }
			$name = $info['name'];
			echo $name . '-' . strlen($name) . '-';
			$name = $name != '鄂温克族自治旗' && $name != '东乡族自治县' ? str_replace($nations, '', $name) : $name;
			//echo $name . '-';
			$name = strlen($name) > 6 ? str_replace($skips[$level], '', $name) : $name;
			if (strlen($name) > 6) {
			if (strpos($name, '旗') !== false) {
				$replace = true;
				foreach ($noSkips as $noSkip) {
					if (strpos($name, $noSkip) !== false) {
						$replace = false;
						break;
					}
				}
				$name = $replace ? str_replace('旗', '', $name) : $name;
			}
			if (strpos($name, '社区') !== false) {
				$replace = true;
				foreach ($vSkips as $vSkip) {
					if (strpos($name, $vSkip . '社区') !== false) {
						$replace = false;
						break;
					}
				}
				$name = $replace ? str_replace('社区', '', $name) : $name;
			}
			if (strpos($name, '村') !== false) {
				$replace = true;
				foreach ($vSkips as $vSkip) {
					if (strpos($name, $vSkip . '村') !== false) {
						$replace = false;
						break;
					}
				}
				$name = $replace ? str_replace('村', '', $name) : $name;
			}
			}
						
            $spell = Pinyin::trans($name, $setting);
			$info->spell = $spell;
			$info->name_short = empty($name) ? 'nnnnnnnnnn' : $name;
			$spellShort = Pinyin::letter($name, $setting);
			$info->spell_short = $spellShort;
			$info->update(false);
			//echo $name . '-' . $spell . '-' . $spellShort . '<br />' . "\n";
			$i++;
		}
		echo date() . '--' . $i;
		//print_r($infos);exit();
	}

	public function getInfo($code, $levelPoints = ['province', 'city', 'country', 'town', 'village'])
	{
		$info = $this->findOne(['spell_one' => $code]);
		if (empty($info)) {
			return false;
		}

		$level = $info['level'];
		if (!in_array($level, $levelPoints)) {
			return ['status' => 400, 'message' => '行政级别有误', 'data' => $info];
		}

		$parentId = $info['parent_id'];
		while ($parentId != '1') {
			$parentInfo = $this->findOne(['region_id' => $parentId]);
			$level = $parentInfo['level'];
			$parentId = $parentInfo['parent_id'];
			$info[$parentInfo['level'] . 'Info'] = $parentInfo;
		}

		return $info;
	}

	public function getInfos()
	{
		$infos = $this->find()->where(['status' => 1])->indexBy('region_id')->asArray()->all();
		$datas = ['province' => [], 'city' => [], 'county' => [], 'town' => [], 'village' => []];
		foreach ($infos as $info) {
			$datas[$info['level']][] = $info;
		}
		foreach ($datas['town'] as & $town) {
			foreach ($datas['village'] as $village) {
				if ($village['parent_id'] == $town['region_id']) {
					$town['villages'][] = $village;
				}
			}
		}
		foreach ($datas['county'] as & $county) {
			foreach ($datas['town'] as $town) {
				if ($town['parent_id'] == $county['region_id']) {
					$county['towns'][] = $town;
				}
			}
		}
		foreach ($datas['city'] as & $city) {
			foreach ($datas['county'] as $county) {
				if ($county['parent_id'] == $city['region_id']) {
					$city['countys'][] = $county;
				}
			}
		}
		foreach ($datas['province'] as & $province) {
			foreach ($datas['city'] as $city) {
				if ($city['parent_id'] == $province['region_id']) {
					$province['cities'][] = $city;
				}
			}
		}
		//print_r($datas['city']);exit();
		return $datas;
	}

	public function spellDeal()
	{
		$infos = $this->find()->where(['spell_one' => ''])->limit(5000)->all();
		foreach ($infos as $info) {
			if ($info['parent_id'] == 1) { continue; }
			$parentInfo = $this->findOne(['region_id' => $info['parent_id']]);
		    $spellOne = $parentInfo->spell_short . '_' . $info['spell'];
			//$infoExist = $this->findOne(['spell_one' => $spellOne]);
			//echo $spellOne . '--' . $info['name'] . '--';
			//if (empty($infoExist)) {
				//echo $spellOne;
				$info->spell_one = $spellOne;
				$info->update(false);
			//}
			//echo '<br />';

		}
			
	}
}
