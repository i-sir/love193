<?php

namespace api\wxapp\validate;

use think\Validate;


/**
    * @AdminModel(
    *     "name"             =>"MemberMatchmakerClass",
    *     "name_underline"   =>"member_matchmaker_class",
    *     "table_name"       =>"member_matchmaker_class",
    *     "validate_name"    =>"MemberMatchmakerClassValidate",
    *     "remark"           =>"红娘分类",
    *     "author"           =>"",
    *     "create_time"      =>"2025-09-18 16:40:32",
    *     "version"          =>"1.0",
    *     "use"              =>   $this->validate($params, MemberMatchmakerClass);
    * )
    */

class MemberMatchmakerClassValidate extends Validate
{

protected $rule = ['name'=>'require',
];




protected $message = ['name.require'=>'名称不能为空!',
];





//软删除(delete_time,0)  'action'     => 'require|unique:AdminMenu,app^controller^action,delete_time,0',


//    protected $scene = [
//        'add'  => ['name', 'app', 'controller', 'action', 'parent_id'],
//        'edit' => ['name', 'app', 'controller', 'action', 'id', 'parent_id'],
//    ];


}
