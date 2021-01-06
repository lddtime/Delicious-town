<?php

use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingredient::query()->truncate();
        Ingredient::query()->insert([
            // 一级食材
            ['level' => 1, 'name' => '醋'],
            ['level' => 1, 'name' => '白菜'],
            ['level' => 1, 'name' => '猪肉'],
            ['level' => 1, 'name' => '黄瓜'],
            ['level' => 1, 'name' => '紫苏'],
            ['level' => 1, 'name' => '鸡蛋'],
            ['level' => 1, 'name' => '蕃茄'],
            ['level' => 1, 'name' => '茄子'],
            ['level' => 1, 'name' => '糯米'],
            ['level' => 1, 'name' => '白糖'],
            ['level' => 1, 'name' => '大蒜'],
            ['level' => 1, 'name' => '辣椒'],
            ['level' => 1, 'name' => '大葱'],
            ['level' => 1, 'name' => '香葱'],
            ['level' => 1, 'name' => '生姜'],
            ['level' => 1, 'name' => '面粉'],
            ['level' => 1, 'name' => '薏仁'],
            ['level' => 1, 'name' => '糙米'],
            ['level' => 1, 'name' => '土豆'],
            ['level' => 1, 'name' => '生菜'],
            ['level' => 1, 'name' => '扁豆'],
            ['level' => 1, 'name' => '干辣椒'],

            // 二级食材
            ['level' => 2, 'name' => '梨'],
            ['level' => 2, 'name' => '鸡肉'],
            ['level' => 2, 'name' => '冬笋'],
            ['level' => 2, 'name' => '鸭肉'],
            ['level' => 2, 'name' => '香菜'],
            ['level' => 2, 'name' => '豆腐'],
            ['level' => 2, 'name' => '草鱼'],
            ['level' => 2, 'name' => '荸荠'],
            ['level' => 2, 'name' => '菜心'],
            ['level' => 2, 'name' => '黄鱼'],
            ['level' => 2, 'name' => '豌豆'],
            ['level' => 2, 'name' => '米酒'],
            ['level' => 2, 'name' => '豆豉'],
            ['level' => 2, 'name' => '腐乳'],
            ['level' => 2, 'name' => '鲤鱼'],
            ['level' => 2, 'name' => '冰糖'],
            ['level' => 2, 'name' => '酒糟'],
            ['level' => 2, 'name' => '蒜苗'],
            ['level' => 2, 'name' => '豆芽'],
            ['level' => 2, 'name' => '粉丝'],
            ['level' => 2, 'name' => '芹菜'],
            ['level' => 2, 'name' => '茶叶'],
            ['level' => 2, 'name' => '板栗'],
            ['level' => 2, 'name' => '莲藕'],
            ['level' => 2, 'name' => '菠菜'],
            ['level' => 2, 'name' => '洋葱'],
            ['level' => 2, 'name' => '冬瓜'],
            ['level' => 2, 'name' => '芋头'],
            ['level' => 2, 'name' => '桂圆'],
            ['level' => 2, 'name' => '牛奶'],
            ['level' => 2, 'name' => '鲢鱼'],
            ['level' => 2, 'name' => '芝麻'],
            ['level' => 2, 'name' => '南瓜'],
            ['level' => 2, 'name' => '花菜'],
            ['level' => 2, 'name' => '花生'],
            ['level' => 2, 'name' => '海带'],
            ['level' => 2, 'name' => '通菜'],
            ['level' => 2, 'name' => '鸭血'],
            ['level' => 2, 'name' => '菠萝'],
            ['level' => 2, 'name' => '香干'],
            ['level' => 2, 'name' => '胡椒'],
            ['level' => 2, 'name' => '莴笋'],
            ['level' => 2, 'name' => '花椒'],
            ['level' => 2, 'name' => '葡萄'],
            ['level' => 2, 'name' => '红枣'],
            ['level' => 2, 'name' => '奶油'],
            ['level' => 2, 'name' => '蓝莓'],
            ['level' => 2, 'name' => '莜面'],
            ['level' => 2, 'name' => '孜然'],
            ['level' => 2, 'name' => '年糕'],
            ['level' => 2, 'name' => '枸杞'],
            ['level' => 2, 'name' => '金糕'],
            ['level' => 2, 'name' => '酸菜'],
            ['level' => 2, 'name' => '粉条'],
            ['level' => 2, 'name' => '豆沙'],
            ['level' => 2, 'name' => '鸽蛋'],
            ['level' => 2, 'name' => '琼脂'],
            ['level' => 2, 'name' => '春笋'],
            ['level' => 2, 'name' => '香焦'],
            ['level' => 2, 'name' => '莲子'],
            ['level' => 2, 'name' => '桂花'],
            ['level' => 2, 'name' => '豆瓣酱'],
            ['level' => 2, 'name' => '蕃茄酱'],
            ['level' => 2, 'name' => '胡萝卜'],
            ['level' => 2, 'name' => '甜面酱'],
            ['level' => 2, 'name' => '白萝卜'],
            ['level' => 2, 'name' => '沙茶酱'],
            ['level' => 2, 'name' => '十三香'],
            ['level' => 2, 'name' => '鹌鹑蛋'],
            ['level' => 2, 'name' => '可可豆'],

            // 三级食材
            ['level' => 3, 'name' => '对虾'],
            ['level' => 3, 'name' => '桂鱼'],
            ['level' => 3, 'name' => '高汤'],
            ['level' => 3, 'name' => '瑶柱'],
            ['level' => 3, 'name' => '兔肉'],
            ['level' => 3, 'name' => '螺肉'],
            ['level' => 3, 'name' => '鳗鱼'],
            ['level' => 3, 'name' => '鹅肉'],
            ['level' => 3, 'name' => '银鱼'],
            ['level' => 3, 'name' => '牛蛙'],
            ['level' => 3, 'name' => '鲥鱼'],
            ['level' => 3, 'name' => '莼菜'],
            ['level' => 3, 'name' => '淡菜'],
            ['level' => 3, 'name' => '鲶鱼'],
            ['level' => 3, 'name' => '青鱼'],
            ['level' => 3, 'name' => '火腿'],
            ['level' => 3, 'name' => '香菇'],
            ['level' => 3, 'name' => '蘑菇'],
            ['level' => 3, 'name' => '排骨'],
            ['level' => 3, 'name' => '鳝鱼'],
            ['level' => 3, 'name' => '鱿鱼'],
            ['level' => 3, 'name' => '河虾'],
            ['level' => 3, 'name' => '羊肉'],
            ['level' => 3, 'name' => '木耳'],
            ['level' => 3, 'name' => '豆苗'],
            ['level' => 3, 'name' => '猪肚'],
            ['level' => 3, 'name' => '牛肉'],
            ['level' => 3, 'name' => '鲈鱼'],
            ['level' => 3, 'name' => '白果'],
            ['level' => 3, 'name' => '腊肉'],
            ['level' => 3, 'name' => '百合'],
            ['level' => 3, 'name' => '芥兰'],
            ['level' => 3, 'name' => '淮山'],
            ['level' => 3, 'name' => '蒲菜'],
            ['level' => 3, 'name' => '韭花'],
            ['level' => 3, 'name' => '咸鱼'],
            ['level' => 3, 'name' => '鳙鱼'],
            ['level' => 3, 'name' => '桑椹'],
            ['level' => 3, 'name' => '杏仁'],
            ['level' => 3, 'name' => '樱桃'],
            ['level' => 3, 'name' => '酸汤'],
            ['level' => 3, 'name' => '银耳'],
            ['level' => 3, 'name' => '核桃'],
            ['level' => 3, 'name' => '香肠'],
            ['level' => 3, 'name' => '鹌鹑'],
            ['level' => 3, 'name' => '黄骨鱼'],
            ['level' => 3, 'name' => '花雕酒'],
            ['level' => 3, 'name' => '小龙虾'],
            ['level' => 3, 'name' => '五香料'],
            ['level' => 3, 'name' => '西兰花'],
            ['level' => 3, 'name' => '火焙鱼'],
            ['level' => 3, 'name' => '金针菇'],
            ['level' => 3, 'name' => '武昌鱼'],
            ['level' => 3, 'name' => '龙须菜'],
            ['level' => 3, 'name' => '核桃仁'],
            ['level' => 3, 'name' => '韩城花椒'],
            ['level' => 3, 'name' => '郫县豆瓣'],
            ['level' => 3, 'name' => '戚风蛋糕'],
            ['level' => 3, 'name' => '宝庆朝天椒'],
            ['level' => 3, 'name' => '柑桔'],

            // 四级食材
            ['level' => 4, 'name' => '青蟹'],
            ['level' => 4, 'name' => '海参'],
            ['level' => 4, 'name' => '水鱼'],
            ['level' => 4, 'name' => '蛇肉'],
            ['level' => 4, 'name' => '石斑'],
            ['level' => 4, 'name' => '江团'],
            ['level' => 4, 'name' => '雅鱼'],
            ['level' => 4, 'name' => '黑鱼'],
            ['level' => 4, 'name' => '榛鸡'],
            ['level' => 4, 'name' => '鸭舌'],
            ['level' => 4, 'name' => '鹿肉'],
            ['level' => 4, 'name' => '草鸡蛋'],
            ['level' => 4, 'name' => '金华火腿'],
            ['level' => 4, 'name' => '黄河鲤鱼'],
            ['level' => 4, 'name' => '松江鲈鱼'],
            ['level' => 4, 'name' => '山黑猪肉'],
            ['level' => 4, 'name' => '三黄鸡肉'],
            ['level' => 4, 'name' => '黄山毛峰'],
            ['level' => 4, 'name' => '雪花牛肉'],
            ['level' => 4, 'name' => '西湖龙井'],
            ['level' => 4, 'name' => '太湖白鱼'],
            ['level' => 4, 'name' => '太湖白虾'],
            ['level' => 4, 'name' => '太湖银鱼'],
            ['level' => 4, 'name' => '渤海对虾'],
            ['level' => 4, 'name' => '海蜇'],
            ['level' => 4, 'name' => '鸽肉'],
            ['level' => 4, 'name' => '章丘大葱'],
            ['level' => 4, 'name' => '山西老陈醋'],
            ['level' => 4, 'name' => '猴头菇'],

            // 五级食材
            ['level' => 5, 'name' => '鱼翅'],
            ['level' => 5, 'name' => '鲍鱼'],
            ['level' => 5, 'name' => '鱼肚'],
            ['level' => 5, 'name' => '燕窝'],
            ['level' => 5, 'name' => '虫草'],
            ['level' => 5, 'name' => '辽参'],
            ['level' => 5, 'name' => '松茸'],
            ['level' => 5, 'name' => '鹿茸'],
            ['level' => 5, 'name' => '驼峰'],
            ['level' => 5, 'name' => '人参'],
            ['level' => 5, 'name' => '熊掌'],
            ['level' => 5, 'name' => '鹿冲'],
            ['level' => 5, 'name' => '牛鞭'],
            ['level' => 5, 'name' => '鱼唇'],
            ['level' => 5, 'name' => '竹荪'],
            ['level' => 5, 'name' => '鹿尾'],
            ['level' => 5, 'name' => '鹿筋'],
            ['level' => 5, 'name' => '帝王蟹'],
            ['level' => 5, 'name' => '哈士蟆'],
            ['level' => 5, 'name' => '全麦粉'],
            ['level' => 5, 'name' => '槟榔芋'],
            ['level' => 5, 'name' => '碧梗米'],
            ['level' => 5, 'name' => '碧根果'],
            ['level' => 5, 'name' => '永州蕲蛇'],
            ['level' => 5, 'name' => '长江刀鱼'],
            ['level' => 5, 'name' => '日本和牛'],
            ['level' => 5, 'name' => '番红花粉'],
            ['level' => 5, 'name' => '铁棍山药'],
            ['level' => 5, 'name' => '连城白鸭'],
            ['level' => 5, 'name' => '驼掌'],

            // 六级神秘
            ['level' => 6, 'name' => '神秘九天翅'],
            ['level' => 6, 'name' => '神秘九孔鲍'],
            ['level' => 6, 'name' => '神秘黄金肚'],
            ['level' => 6, 'name' => '神秘高山虫'],
            ['level' => 6, 'name' => '神秘金丝盏'],
            ['level' => 6, 'name' => '神秘龙涎香'],
            ['level' => 6, 'name' => '神秘金蟾菇'],
            ['level' => 6, 'name' => '神秘雪川雏'],
            ['level' => 6, 'name' => '神秘金钱鳘'],
            ['level' => 6, 'name' => '神秘宝田犊'],

            // 六级其他
            ['level' => 7, 'name' => '橄榄油'],
            ['level' => 7, 'name' => '三文鱼'],
            ['level' => 7, 'name' => '黑胡椒'],
            ['level' => 7, 'name' => '迷迭香'],
            ['level' => 7, 'name' => '意大利面'],
            ['level' => 7, 'name' => '手指饼干'],
            ['level' => 7, 'name' => '奎宁牛小排'],
            ['level' => 7, 'name' => '意大利蕃茄'],
            ['level' => 7, 'name' => '马斯卡彭芝士'],
            ['level' => 7, 'name' => '马沙拉白葡萄酒'],
        ]);
    }
}
