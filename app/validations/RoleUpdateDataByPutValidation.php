<?php

declare(strict_types=1);

namespace Pbackbone\Validation;

use Pbackbone\Model\RoleModel as TableModel;

class RoleUpdateDataByPutValidation extends \Pbackbone\Validation\BaseValidation
{
    public function initialize()
    {
        $this->add(
            [
                "id",
                "name",
                "description",
                "isActive"
            ],
            new \Phalcon\Validation\Validator\PresenceOf([
                "message" => ":field is required"
            ])
        );

        $this->add(
            [
                "id",
            ],
            new \Phalcon\Validation\Validator\Numericality([
                "message" => ":field must be numeric",
            ])
        );

        $this->add(
            [
                "isActive",
            ],
            new \Phalcon\Validation\Validator\InclusionIn([
                "domain" => [
                    "isActive" => ["yes", "no"],
                ],
                "message" => ":field must be :domain",
            ])
        );

        $this->add(
            [
                "name",
                "description",
            ],
            new \Phalcon\Validation\Validator\StringLength([
                "max" => [
                    "name" => 50,
                    "description" => 500,
                ],
                "min" => [
                    "name" => 0,
                    "description" => 0,
                ],
                "messageMaximum" => "characters :field too long, must no more or equal than :max characters.",
                "messageMinimum" => "characters :field too short, must more or equal than :min characters.",
            ])
        );

        $this->add(
            "id",
            new \Phalcon\Validation\Validator\Callback([
                "message" => "id not found",
                "callback" => function ($data) {
                    $result = true;
                    $id = $data->id;
                    $validateData = TableModel::findFirst($id);
                    if (!$validateData) {
                        $result = false;
                    }

                    return $result;
                },
            ])
        );

        $this->add(
            "name",
            new \Phalcon\Validation\Validator\Callback([
                "message" => ":field already exist",
                "callback" => function ($data) {
                    $result = true;
                    $id = $data->id;
                    $name = $data->name;
                    $validateData = TableModel::findFirst([
                        "conditions" => "id != :id: AND name = :name:",
                        "bind" => [
                            "id" => $id,
                            "name" => $name,
                        ],
                    ]);
                    if ($validateData) {
                        $result = false;
                    }

                    return $result;
                },
            ])
        );

        // * just for string parameter
        // $this->setFilters('id', ['trim']);
        $this->setFilters('name', ['trim']);
        $this->setFilters('description', ['trim']);
        $this->setFilters('isActive', ['trim']);
    }
}
