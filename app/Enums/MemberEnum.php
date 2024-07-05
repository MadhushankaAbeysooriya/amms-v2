<?php
namespace App\Enums;

enum MemberEnum:string {
    case President = '1';
    case Member = '2';

    public static function getValues(): array {
        return [
            self::President->value => self::President->name,
            self::Member->value => self::Member->name,
        ];
    }
}