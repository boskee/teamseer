<?php


 function autoload_810f36412fd8e41836081d3e5d0268d7($class)
{
    $classes = array(
        'Boskee\TeamSeer\Teamseer_core_apiService' => __DIR__ .'/Teamseer_core_apiService.php',
        'Boskee\TeamSeer\ArrayCustom' => __DIR__ .'/ArrayCustom.php',
        'Boskee\TeamSeer\Struct' => __DIR__ .'/Struct.php',
        'Boskee\TeamSeer\duration' => __DIR__ .'/duration.php',
        'Boskee\TeamSeer\dateTime' => __DIR__ .'/dateTime.php',
        'Boskee\TeamSeer\NOTATION' => __DIR__ .'/NOTATION.php',
        'Boskee\TeamSeer\time' => __DIR__ .'/time.php',
        'Boskee\TeamSeer\date' => __DIR__ .'/date.php',
        'Boskee\TeamSeer\gYearMonth' => __DIR__ .'/gYearMonth.php',
        'Boskee\TeamSeer\gYear' => __DIR__ .'/gYear.php',
        'Boskee\TeamSeer\gMonthDay' => __DIR__ .'/gMonthDay.php',
        'Boskee\TeamSeer\gDay' => __DIR__ .'/gDay.php',
        'Boskee\TeamSeer\gMonth' => __DIR__ .'/gMonth.php',
        'Boskee\TeamSeer\boolean' => __DIR__ .'/boolean.php',
        'Boskee\TeamSeer\base64Binary' => __DIR__ .'/base64Binary.php',
        'Boskee\TeamSeer\hexBinary' => __DIR__ .'/hexBinary.php',
        'Boskee\TeamSeer\floatCustom' => __DIR__ .'/floatCustom.php',
        'Boskee\TeamSeer\double' => __DIR__ .'/double.php',
        'Boskee\TeamSeer\anyURI' => __DIR__ .'/anyURI.php',
        'Boskee\TeamSeer\QName' => __DIR__ .'/QName.php',
        'Boskee\TeamSeer\stringCustom' => __DIR__ .'/stringCustom.php',
        'Boskee\TeamSeer\normalizedString' => __DIR__ .'/normalizedString.php',
        'Boskee\TeamSeer\token' => __DIR__ .'/token.php',
        'Boskee\TeamSeer\language' => __DIR__ .'/language.php',
        'Boskee\TeamSeer\Name' => __DIR__ .'/Name.php',
        'Boskee\TeamSeer\NMTOKEN' => __DIR__ .'/NMTOKEN.php',
        'Boskee\TeamSeer\NCName' => __DIR__ .'/NCName.php',
        'Boskee\TeamSeer\NMTOKENS' => __DIR__ .'/NMTOKENS.php',
        'Boskee\TeamSeer\ID' => __DIR__ .'/ID.php',
        'Boskee\TeamSeer\IDREF' => __DIR__ .'/IDREF.php',
        'Boskee\TeamSeer\ENTITY' => __DIR__ .'/ENTITY.php',
        'Boskee\TeamSeer\IDREFS' => __DIR__ .'/IDREFS.php',
        'Boskee\TeamSeer\ENTITIES' => __DIR__ .'/ENTITIES.php',
        'Boskee\TeamSeer\decimal' => __DIR__ .'/decimal.php',
        'Boskee\TeamSeer\integer' => __DIR__ .'/integer.php',
        'Boskee\TeamSeer\nonPositiveInteger' => __DIR__ .'/nonPositiveInteger.php',
        'Boskee\TeamSeer\negativeInteger' => __DIR__ .'/negativeInteger.php',
        'Boskee\TeamSeer\long' => __DIR__ .'/long.php',
        'Boskee\TeamSeer\intCustom' => __DIR__ .'/intCustom.php',
        'Boskee\TeamSeer\short' => __DIR__ .'/short.php',
        'Boskee\TeamSeer\byte' => __DIR__ .'/byte.php',
        'Boskee\TeamSeer\nonNegativeInteger' => __DIR__ .'/nonNegativeInteger.php',
        'Boskee\TeamSeer\unsignedLong' => __DIR__ .'/unsignedLong.php',
        'Boskee\TeamSeer\unsignedInt' => __DIR__ .'/unsignedInt.php',
        'Boskee\TeamSeer\unsignedShort' => __DIR__ .'/unsignedShort.php',
        'Boskee\TeamSeer\unsignedByte' => __DIR__ .'/unsignedByte.php',
        'Boskee\TeamSeer\positiveInteger' => __DIR__ .'/positiveInteger.php',
        'Boskee\TeamSeer\stringArray' => __DIR__ .'/stringArray.php',
        'Boskee\TeamSeer\DayActivityAPIArray' => __DIR__ .'/DayActivityAPIArray.php',
        'Boskee\TeamSeer\NoteAPIArray' => __DIR__ .'/NoteAPIArray.php',
        'Boskee\TeamSeer\NoteAPI' => __DIR__ .'/NoteAPI.php',
        'Boskee\TeamSeer\UserNotesAPIArray' => __DIR__ .'/UserNotesAPIArray.php',
        'Boskee\TeamSeer\UserNotesAPI' => __DIR__ .'/UserNotesAPI.php',
        'Boskee\TeamSeer\DayActivityAPI' => __DIR__ .'/DayActivityAPI.php',
        'Boskee\TeamSeer\LeaveTypesAPIArray' => __DIR__ .'/LeaveTypesAPIArray.php',
        'Boskee\TeamSeer\LeaveTypeAPI' => __DIR__ .'/LeaveTypeAPI.php',
        'Boskee\TeamSeer\LeaveCategoryAPIArray' => __DIR__ .'/LeaveCategoryAPIArray.php',
        'Boskee\TeamSeer\LeaveCategoryAPI' => __DIR__ .'/LeaveCategoryAPI.php',
        'Boskee\TeamSeer\NoteTypeAPIArray' => __DIR__ .'/NoteTypeAPIArray.php',
        'Boskee\TeamSeer\NoteTypeAPI' => __DIR__ .'/NoteTypeAPI.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_810f36412fd8e41836081d3e5d0268d7');

// Do nothing. The rest is just leftovers from the code generation.
{
}
