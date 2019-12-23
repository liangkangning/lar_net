<?php

use yii\db\Migration;

class m161201_115701_auth_rule extends Migration
{
    public function up()
    {
        /* 取消外键约束 */
        $this->execute('SET foreign_key_checks = 0');
        
        /* 创建表 */
        $this->createTable('{{%auth_rule}}', [
            'name' => 'varchar(64) NOT NULL',
            'data' => 'text NULL COMMENT \'serialize后的rule对象\'',
            'created_at' => 'int(11) NULL',
            'updated_at' => 'int(11) NULL',
            'PRIMARY KEY (`name`)'
        ], "ENGINE=InnoDB DEFAULT CHARSET=utf8mb4");
        
        /* 索引设置 */
        
        
        /* 表数据 */
        $this->insert('{{%auth_rule}}',['name'=>'action/actionlog','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:16:"action/actionlog";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'action/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"action/edit";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'ad/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:6:"ad/add";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'ad/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"ad/delete";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'ad/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:7:"ad/edit";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'ad/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:8:"ad/index";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'Addons/addHook','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"Addons/addHook";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'Addons/adminList','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:16:"Addons/adminList";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'Addons/edithook','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"Addons/edithook";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'Addons/execute','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"Addons/execute";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'Addons/hooks','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"Addons/hooks";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'Addons/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"Addons/index";s:9:"createdAt";i:1460030539;s:9:"updatedAt";i:1460030539;}','created_at'=>'1460030539','updated_at'=>'1460030539']);
        $this->insert('{{%auth_rule}}',['name'=>'admin/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"admin/add";s:9:"createdAt";i:1472528089;s:9:"updatedAt";i:1472528089;}','created_at'=>'1472528089','updated_at'=>'1472528089']);
        $this->insert('{{%auth_rule}}',['name'=>'admin/auth','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"admin/auth";s:9:"createdAt";i:1472528089;s:9:"updatedAt";i:1472528089;}','created_at'=>'1472528089','updated_at'=>'1472528089']);
        $this->insert('{{%auth_rule}}',['name'=>'admin/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"admin/edit";s:9:"createdAt";i:1472528089;s:9:"updatedAt";i:1472528089;}','created_at'=>'1472528089','updated_at'=>'1472528089']);
        $this->insert('{{%auth_rule}}',['name'=>'admin/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"admin/index";s:9:"createdAt";i:1472528089;s:9:"updatedAt";i:1472528089;}','created_at'=>'1472528089','updated_at'=>'1472528089']);
        $this->insert('{{%auth_rule}}',['name'=>'article/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"article/add";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'article/autoSave','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:16:"article/autoSave";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'article/batchOperate','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:20:"article/batchOperate";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'article/clear','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:13:"article/clear";s:9:"createdAt";i:1460027927;s:9:"updatedAt";i:1460027927;}','created_at'=>'1460027927','updated_at'=>'1460027927']);
        $this->insert('{{%auth_rule}}',['name'=>'article/copy','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"article/copy";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'article/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"article/edit";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'Article/examine','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"Article/examine";s:9:"createdAt";i:1460027927;s:9:"updatedAt";i:1460027927;}','created_at'=>'1460027927','updated_at'=>'1460027927']);
        $this->insert('{{%auth_rule}}',['name'=>'article/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:13:"article/index";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'article/move','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"article/move";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'article/paste','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:13:"article/paste";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'article/permit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"article/permit";s:9:"createdAt";i:1460027927;s:9:"updatedAt";i:1460027927;}','created_at'=>'1460027927','updated_at'=>'1460027927']);
        $this->insert('{{%auth_rule}}',['name'=>'article/recycle','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"article/recycle";s:9:"createdAt";i:1460027927;s:9:"updatedAt";i:1460027927;}','created_at'=>'1460027927','updated_at'=>'1460027927']);
        $this->insert('{{%auth_rule}}',['name'=>'article/setStatus','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"article/setStatus";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'Article/sort','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"Article/sort";s:9:"createdAt";i:1460027927;s:9:"updatedAt";i:1460027927;}','created_at'=>'1460027927','updated_at'=>'1460027927']);
        $this->insert('{{%auth_rule}}',['name'=>'article/update','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"article/update";s:9:"createdAt";i:1460027926;s:9:"updatedAt";i:1460027926;}','created_at'=>'1460027926','updated_at'=>'1460027926']);
        $this->insert('{{%auth_rule}}',['name'=>'attribute/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:13:"attribute/add";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'attribute/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"attribute/edit";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'attribute/index1','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:16:"attribute/index1";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'attribute/setStatus','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:19:"attribute/setStatus";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'attribute/update','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:16:"attribute/update";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/access','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"auth/access";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:8:"auth/add";s:9:"createdAt";i:1472528089;s:9:"updatedAt";i:1472528089;}','created_at'=>'1472528089','updated_at'=>'1472528089']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/addToCategory','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:18:"auth/addToCategory";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/addToGroup','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"auth/addToGroup";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/addToModel','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"auth/addToModel";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/auth','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"auth/auth";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/category','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:13:"auth/category";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/changeStatus?method=deleteGroup','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:36:"auth/changeStatus?method=deleteGroup";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/changeStatus?method=forbidGroup','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:36:"auth/changeStatus?method=forbidGroup";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/changeStatus?method=resumeGroup','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:36:"auth/changeStatus?method=resumeGroup";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/createGroup','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:16:"auth/createGroup";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"auth/delete";s:9:"createdAt";i:1472528089;s:9:"updatedAt";i:1472528089;}','created_at'=>'1472528089','updated_at'=>'1472528089']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"auth/edit";s:9:"createdAt";i:1472528089;s:9:"updatedAt";i:1472528089;}','created_at'=>'1472528089','updated_at'=>'1472528089']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/editGroup','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"auth/editGroup";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"auth/index";s:9:"createdAt";i:1459148617;s:9:"updatedAt";i:1459148627;}','created_at'=>'1456542110','updated_at'=>'1456542120']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/modelauth','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"auth/modelauth";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/removeFromGroup','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:20:"auth/removeFromGroup";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/user','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"auth/user";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        $this->insert('{{%auth_rule}}',['name'=>'auth/writeGroup','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"auth/writeGroup";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'category/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"category/add";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'category/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:13:"category/edit";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'category/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"category/index";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'category/operate/type/merge','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:27:"category/operate/type/merge";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'category/operate/type/move','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:26:"category/operate/type/move";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'category/remove','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"category/remove";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'certificate/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:18:"certificate/delete";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'certificate/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:16:"certificate/edit";s:9:"createdAt";i:1476437983;s:9:"updatedAt";i:1476437983;}','created_at'=>'1476437983','updated_at'=>'1476437983']);
        $this->insert('{{%auth_rule}}',['name'=>'certificate/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"certificate/index";s:9:"createdAt";i:1476437983;s:9:"updatedAt";i:1476437983;}','created_at'=>'1476437983','updated_at'=>'1476437983']);
        $this->insert('{{%auth_rule}}',['name'=>'channel/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"channel/add";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'channel/del','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"channel/del";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'channel/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"channel/edit";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'channel/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:13:"channel/index";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'config/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"config/add";s:9:"createdAt";i:1460031883;s:9:"updatedAt";i:1460031883;}','created_at'=>'1460031883','updated_at'=>'1460031883']);
        $this->insert('{{%auth_rule}}',['name'=>'config/del','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"config/del";s:9:"createdAt";i:1460031883;s:9:"updatedAt";i:1460031883;}','created_at'=>'1460031883','updated_at'=>'1460031883']);
        $this->insert('{{%auth_rule}}',['name'=>'config/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"config/edit";s:9:"createdAt";i:1460031883;s:9:"updatedAt";i:1460031883;}','created_at'=>'1460031883','updated_at'=>'1460031883']);
        $this->insert('{{%auth_rule}}',['name'=>'config/group','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"config/group";s:9:"createdAt";i:1459148617;s:9:"updatedAt";i:1459148627;}','created_at'=>'1200000000','updated_at'=>'1300000000']);
        $this->insert('{{%auth_rule}}',['name'=>'config/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"config/index";s:9:"createdAt";i:1459148617;s:9:"updatedAt";i:1459148627;}','created_at'=>'1200000000','updated_at'=>'1300000000']);
        $this->insert('{{%auth_rule}}',['name'=>'config/save','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"config/save";s:9:"createdAt";i:1460031883;s:9:"updatedAt";i:1460031883;}','created_at'=>'1460031883','updated_at'=>'1460031883']);
        $this->insert('{{%auth_rule}}',['name'=>'Config/sort','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"Config/sort";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'database/del','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"database/del";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'database/export','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"database/export";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'database/import','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"database/import";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'database/index?type=export','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:26:"database/index?type=export";s:9:"createdAt";i:1459148617;s:9:"updatedAt";i:1459148627;}','created_at'=>'1456542110','updated_at'=>'1456542120']);
        $this->insert('{{%auth_rule}}',['name'=>'database/index?type=import','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:26:"database/index?type=import";s:9:"createdAt";i:1459148617;s:9:"updatedAt";i:1459148627;}','created_at'=>'1456542110','updated_at'=>'1456542120']);
        $this->insert('{{%auth_rule}}',['name'=>'database/optimize','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"database/optimize";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'database/repair','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"database/repair";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'group/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"group/add";s:9:"createdAt";i:1476437986;s:9:"updatedAt";i:1476437986;}','created_at'=>'1476437986','updated_at'=>'1476437986']);
        $this->insert('{{%auth_rule}}',['name'=>'group/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"group/delete";s:9:"createdAt";i:1476437986;s:9:"updatedAt";i:1476437986;}','created_at'=>'1476437986','updated_at'=>'1476437986']);
        $this->insert('{{%auth_rule}}',['name'=>'group/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"group/edit";s:9:"createdAt";i:1476437986;s:9:"updatedAt";i:1476437986;}','created_at'=>'1476437986','updated_at'=>'1476437986']);
        $this->insert('{{%auth_rule}}',['name'=>'group/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"group/index";s:9:"createdAt";i:1476437986;s:9:"updatedAt";i:1476437986;}','created_at'=>'1476437986','updated_at'=>'1476437986']);
        $this->insert('{{%auth_rule}}',['name'=>'index/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"index/index";s:9:"createdAt";i:1459148617;s:9:"updatedAt";i:1459148627;}','created_at'=>'1456542110','updated_at'=>'1456542120']);
        $this->insert('{{%auth_rule}}',['name'=>'log/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"log/index";s:9:"createdAt";i:1472528090;s:9:"updatedAt";i:1472528090;}','created_at'=>'1472528090','updated_at'=>'1472528090']);
        $this->insert('{{%auth_rule}}',['name'=>'log/view','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:8:"log/view";s:9:"createdAt";i:1472528090;s:9:"updatedAt";i:1472528090;}','created_at'=>'1472528090','updated_at'=>'1472528090']);
        $this->insert('{{%auth_rule}}',['name'=>'login/logout','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"login/logout";s:9:"createdAt";i:1459148665;s:9:"updatedAt";i:1459148675;}','created_at'=>'1456542110','updated_at'=>'1456542120']);
        $this->insert('{{%auth_rule}}',['name'=>'menu/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:8:"menu/add";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'menu/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"menu/edit";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'Menu/import','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"Menu/import";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'menu/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"menu/index";s:9:"createdAt";i:1459148617;s:9:"updatedAt";i:1459148627;}','created_at'=>'1200000000','updated_at'=>'1300000000']);
        $this->insert('{{%auth_rule}}',['name'=>'Menu/sort','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"Menu/sort";s:9:"createdAt";i:1460031884;s:9:"updatedAt";i:1460031884;}','created_at'=>'1460031884','updated_at'=>'1460031884']);
        $this->insert('{{%auth_rule}}',['name'=>'model/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"model/add";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'model/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"model/edit";s:9:"createdAt";i:1460031883;s:9:"updatedAt";i:1460031883;}','created_at'=>'1460031883','updated_at'=>'1460031883']);
        $this->insert('{{%auth_rule}}',['name'=>'Model/generate','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"Model/generate";s:9:"createdAt";i:1460031019;s:9:"updatedAt";i:1460031019;}','created_at'=>'1460031019','updated_at'=>'1460031019']);
        $this->insert('{{%auth_rule}}',['name'=>'Model/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"Model/index";s:9:"createdAt";i:1460031882;s:9:"updatedAt";i:1460031882;}','created_at'=>'1460031882','updated_at'=>'1460031882']);
        $this->insert('{{%auth_rule}}',['name'=>'model/setStatus','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"model/setStatus";s:9:"createdAt";i:1460031883;s:9:"updatedAt";i:1460031883;}','created_at'=>'1460031883','updated_at'=>'1460031883']);
        $this->insert('{{%auth_rule}}',['name'=>'model/update','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"model/update";s:9:"createdAt";i:1460031883;s:9:"updatedAt";i:1460031883;}','created_at'=>'1460031883','updated_at'=>'1460031883']);
        $this->insert('{{%auth_rule}}',['name'=>'order/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"order/add";s:9:"createdAt";i:1476438050;s:9:"updatedAt";i:1476438050;}','created_at'=>'1476438050','updated_at'=>'1476438050']);
        $this->insert('{{%auth_rule}}',['name'=>'order/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"order/delete";s:9:"createdAt";i:1476438049;s:9:"updatedAt";i:1476438049;}','created_at'=>'1476438049','updated_at'=>'1476438049']);
        $this->insert('{{%auth_rule}}',['name'=>'order/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"order/edit";s:9:"createdAt";i:1476438049;s:9:"updatedAt";i:1476438049;}','created_at'=>'1476438049','updated_at'=>'1476438049']);
        $this->insert('{{%auth_rule}}',['name'=>'order/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"order/index";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'other','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:5:"other";s:9:"createdAt";i:1472528090;s:9:"updatedAt";i:1472528090;}','created_at'=>'1472528090','updated_at'=>'1472528090']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:8:"shop/add";s:9:"createdAt";i:1476437985;s:9:"updatedAt";i:1476437985;}','created_at'=>'1476437985','updated_at'=>'1476437985']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"shop/delete";s:9:"createdAt";i:1476437985;s:9:"updatedAt";i:1476437985;}','created_at'=>'1476437985','updated_at'=>'1476437985']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"shop/edit";s:9:"createdAt";i:1476437985;s:9:"updatedAt";i:1476437985;}','created_at'=>'1476437985','updated_at'=>'1476437985']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/group','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"shop/group";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/index&type=1','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"shop/index&type=1";s:9:"createdAt";i:1472528087;s:9:"updatedAt";i:1472528087;}','created_at'=>'1472528087','updated_at'=>'1472528087']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/index&type=2','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"shop/index&type=2";s:9:"createdAt";i:1472528087;s:9:"updatedAt";i:1472528087;}','created_at'=>'1472528087','updated_at'=>'1472528087']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/index&type=3','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"shop/index&type=3";s:9:"createdAt";i:1472528087;s:9:"updatedAt";i:1472528087;}','created_at'=>'1472528087','updated_at'=>'1472528087']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/index&type=4','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"shop/index&type=4";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/index?type=1','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"shop/index?type=1";s:9:"createdAt";i:1476437985;s:9:"updatedAt";i:1476437985;}','created_at'=>'1476437985','updated_at'=>'1476437985']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/index?type=2','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"shop/index?type=2";s:9:"createdAt";i:1476437985;s:9:"updatedAt";i:1476437985;}','created_at'=>'1476437985','updated_at'=>'1476437985']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/index?type=3','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"shop/index?type=3";s:9:"createdAt";i:1476437986;s:9:"updatedAt";i:1476437986;}','created_at'=>'1476437986','updated_at'=>'1476437986']);
        $this->insert('{{%auth_rule}}',['name'=>'shop/index?type=4','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:17:"shop/index?type=4";s:9:"createdAt";i:1476437986;s:9:"updatedAt";i:1476437986;}','created_at'=>'1476437986','updated_at'=>'1476437986']);
        $this->insert('{{%auth_rule}}',['name'=>'think/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"think/add";s:9:"createdAt";i:1460031883;s:9:"updatedAt";i:1460031883;}','created_at'=>'1460031883','updated_at'=>'1460031883']);
        $this->insert('{{%auth_rule}}',['name'=>'think/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"think/edit";s:9:"createdAt";i:1460031019;s:9:"updatedAt";i:1460031019;}','created_at'=>'1460031019','updated_at'=>'1460031019']);
        $this->insert('{{%auth_rule}}',['name'=>'think/lists','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"think/lists";s:9:"createdAt";i:1460031020;s:9:"updatedAt";i:1460031020;}','created_at'=>'1460031020','updated_at'=>'1460031020']);
        $this->insert('{{%auth_rule}}',['name'=>'train/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"train/add";s:9:"createdAt";i:1476437985;s:9:"updatedAt";i:1476437985;}','created_at'=>'1476437985','updated_at'=>'1476437985']);
        $this->insert('{{%auth_rule}}',['name'=>'train/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:12:"train/delete";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'train/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"train/edit";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'train/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"train/index";s:9:"createdAt";i:1472528088;s:9:"updatedAt";i:1472528088;}','created_at'=>'1472528088','updated_at'=>'1472528088']);
        $this->insert('{{%auth_rule}}',['name'=>'traintype/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:16:"traintype/delete";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'traintype/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"traintype/edit";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'traintype/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"traintype/index";s:9:"createdAt";i:1476437984;s:9:"updatedAt";i:1476437984;}','created_at'=>'1476437984','updated_at'=>'1476437984']);
        $this->insert('{{%auth_rule}}',['name'=>'user/action','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"user/action";s:9:"createdAt";i:1460031878;s:9:"updatedAt";i:1460031878;}','created_at'=>'1460031878','updated_at'=>'1460031878']);
        $this->insert('{{%auth_rule}}',['name'=>'user/add','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:8:"user/add";s:9:"createdAt";i:1460031877;s:9:"updatedAt";i:1460031877;}','created_at'=>'1460031877','updated_at'=>'1460031877']);
        $this->insert('{{%auth_rule}}',['name'=>'user/addaction','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"user/addaction";s:9:"createdAt";i:1460031878;s:9:"updatedAt";i:1460031878;}','created_at'=>'1460031878','updated_at'=>'1460031878']);
        $this->insert('{{%auth_rule}}',['name'=>'user/auth','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"user/auth";s:9:"createdAt";i:1460031878;s:9:"updatedAt";i:1460031878;}','created_at'=>'1460031878','updated_at'=>'1460031878']);
        $this->insert('{{%auth_rule}}',['name'=>'User/changeStatus?method=deleteUser','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:35:"User/changeStatus?method=deleteUser";s:9:"createdAt";i:1460031879;s:9:"updatedAt";i:1460031879;}','created_at'=>'1460031879','updated_at'=>'1460031879']);
        $this->insert('{{%auth_rule}}',['name'=>'user/changeStatus?method=forbidUser','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:35:"user/changeStatus?method=forbidUser";s:9:"createdAt";i:1460031878;s:9:"updatedAt";i:1460031878;}','created_at'=>'1460031878','updated_at'=>'1460031878']);
        $this->insert('{{%auth_rule}}',['name'=>'user/changeStatus?method=resumeUser','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:35:"user/changeStatus?method=resumeUser";s:9:"createdAt";i:1460031878;s:9:"updatedAt";i:1460031878;}','created_at'=>'1460031878','updated_at'=>'1460031878']);
        $this->insert('{{%auth_rule}}',['name'=>'user/delete','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:11:"user/delete";s:9:"createdAt";i:1476438050;s:9:"updatedAt";i:1476438050;}','created_at'=>'1476438050','updated_at'=>'1476438050']);
        $this->insert('{{%auth_rule}}',['name'=>'user/edit','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:9:"user/edit";s:9:"createdAt";i:1476438051;s:9:"updatedAt";i:1476438051;}','created_at'=>'1476438051','updated_at'=>'1476438051']);
        $this->insert('{{%auth_rule}}',['name'=>'user/editaction','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"user/editaction";s:9:"createdAt";i:1460031878;s:9:"updatedAt";i:1460031878;}','created_at'=>'1460031878','updated_at'=>'1460031878']);
        $this->insert('{{%auth_rule}}',['name'=>'user/index','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:10:"user/index";s:9:"createdAt";i:1459148617;s:9:"updatedAt";i:1459148627;}','created_at'=>'1456542110','updated_at'=>'1456542120']);
        $this->insert('{{%auth_rule}}',['name'=>'user/saveAction','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:15:"user/saveAction";s:9:"createdAt";i:1460031878;s:9:"updatedAt";i:1460031878;}','created_at'=>'1460031878','updated_at'=>'1460031878']);
        $this->insert('{{%auth_rule}}',['name'=>'user/setStatus','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:14:"user/setStatus";s:9:"createdAt";i:1460031878;s:9:"updatedAt";i:1460031878;}','created_at'=>'1460031878','updated_at'=>'1460031878']);
        $this->insert('{{%auth_rule}}',['name'=>'user/updateNickname','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:19:"user/updateNickname";s:9:"createdAt";i:1460031881;s:9:"updatedAt";i:1460031881;}','created_at'=>'1460031881','updated_at'=>'1460031881']);
        $this->insert('{{%auth_rule}}',['name'=>'user/updatePassword','data'=>'O:21:"common\core\rbac\Rule":3:{s:4:"name";s:19:"user/updatePassword";s:9:"createdAt";i:1460031880;s:9:"updatedAt";i:1460031880;}','created_at'=>'1460031880','updated_at'=>'1460031880']);
        
        /* 设置外键约束 */
        $this->execute('SET foreign_key_checks = 1;');
    }

    public function down()
    {
        $this->execute('SET foreign_key_checks = 0');
        /* 删除表 */
        $this->dropTable('{{%auth_rule}}');
        $this->execute('SET foreign_key_checks = 1;');
    }
}

