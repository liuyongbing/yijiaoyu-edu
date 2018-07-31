<?php

namespace App\Constants\Traits;

use Constants;

trait TeacherTypes
{
    public static $teacherTypes = [
        'teacher'               => 3,//教练
        'teacher_taekwondo'     => 31,//教练:齐天大圣(跆拳道)
        'teacher_pocketcat'     => 32,//教练:口袋猫(舞蹈)
        'teacher_town'          => 33,//教练:童画镇(绘画)
        'teacher_skating'       => 34,//教练:学会玩(轮滑)
        'teacher_basketball'    => 35,//教练:晓虎队(篮球)
    ];
}