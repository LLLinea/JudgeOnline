<?php
/**
 * drunk , fix later
 * Created by Magic.
 * User: jiaying
 * Datetime: 28/11/2017 01:00
 */

namespace Basic\Model\Problem;


use Basic\Constant\DataBaseTableConfig;
use Basic\Model\BasicBaseModel;

class ProblemModel extends BasicBaseModel
{
    private static $_instance = null;

    private function __construct() {
    }

    private function __clone() {
    }

    public static function instance() {
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    protected function getTableName() {
        return DataBaseTableConfig::PROBLEM_PROBLEM;
    }

    protected function getPrimaryId() {
        return "problem_id";
    }


}