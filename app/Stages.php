<?php

namespace App;

/**
 * |----------------------------------------------------------------------------
 * |-------------------------- Stages Class -----------------------------------
 * |----------------------------------------------------------------------------
 * |
 * | This class is serves as a constant list of the stages supported by this 
 * | platform.
 * |
 * |----------------------------------------------------------------------------
 * |
 */
class Stages {

    public static $STAGEONE = 2;
    public static $STAGEONELEVELONE = 4;
    public static $STAGETWO = 8;
    public static $STAGETWOLEVELONE = 16;
    public static $STAGETHREE = 32;
    public static $STAGETHREELEVELONE = 64;
    public static $STAGEFOUR = 128;
    public static $STAGEFOURLEVELONE = 256;
    public static $STAGEFIVE = 512;
    public static $STAGESIX = 1024;

    /**
     * 
     * This method is responsible for taking a value and determining what stage
     * that figure stands under.
     * 
     * @param int $figure | the figure used as the criteria.
     * 
     * @return String | a depicting the stage.
     * 
     */
    public static function determineStage($figure) {
        if ($figure < self::$STAGEONE)
            return "<span style='color: green'>Stage Zero</span>";
        if ($figure >= self::$STAGEONE && $figure < self::$STAGEONELEVELONE)
            return "<span style='color: green'>Stage One</span>";
        if ($figure >= self::$STAGEONELEVELONE && $figure < self::$STAGETWO)
            return "<span style='color: green'>Stage One</span> | <span style='color:#4C97DD'> Level One</span>";
        if ($figure >= self::$STAGETWO && $figure < self::$STAGETWOLEVELONE)
            return "<span style='color: green'>Stage Two</span>";
        if ($figure >= self::$STAGETWOLEVELONE && $figure < self::$STAGETHREE)
            return "<span style='color: green'>Stage Two</span> | <span style='color:#4C97DD'> Level One</span>";
        if ($figure >= self::$STAGETHREE && $figure < self::$STAGETHREELEVELONE)
            return "<span style='color: green'>Stage Three</span>";
        if ($figure >= self::$STAGETHREELEVELONE && $figure < self::$STAGEFOUR)
            return "<span style='color: green'>Stage Three</span> | <span style='color:#4C97DD'> Level One</span>";
        if ($figure >= self::$STAGEFOUR && $figure < self::$STAGEFOURLEVELONE)
            return "<span style='color: green'>Stage Four</span>";
        if ($figure >= self::$STAGEFOURLEVELONE && $figure < self::$STAGEFIVE)
            return "<span style='color: green'>Stage Four</span> | <span style='color:#4C97DD'> Level One</span>";
        if ($figure >= self::$STAGEFIVE && $figure < self::$STAGESIX)
            return "<span style='color: green'>Stage Five</span>";
      
        if ($figure >= self::$STAGESIX)
            return "<span style='color: green'>Stage Six</span>";
    }

}
