<?php

namespace initmodel;

/**
    * @AdminModel(
    *     "name"             =>"MemberMatchmakerClass",
    *     "name_underline"   =>"member_matchmaker_class",
    *     "table_name"       =>"member_matchmaker_class",
    *     "model_name"       =>"MemberMatchmakerClassModel",
    *     "remark"           =>"红娘分类",
    *     "author"           =>"",
    *     "create_time"      =>"2025-09-18 16:40:32",
    *     "version"          =>"1.0",
    *     "use"              => new \initmodel\MemberMatchmakerClassModel();
    * )
    */


use think\facade\Db;
use think\Model;
use think\model\concern\SoftDelete;


class MemberMatchmakerClassModel extends Model{

	protected $name = 'member_matchmaker_class';//红娘分类

	//软删除
	protected $hidden            = ['delete_time'];
	protected $deleteTime        = 'delete_time';
    protected $defaultSoftDelete = 0;
    use SoftDelete;
}
