<?php

namespace App\Services;

use App\Enums\Gender;

class EgyptianIDParser
{
    /**
     * Parse Egyptian national ID number and extract details
     *
     * @param string $idNumber 14-digit Egyptian ID number
     * @return array|false Returns array with birth_date, gender, governorate on success, false on invalid input
     */
    public static function parse(?string $idNumber): array|false
    {
        // Remove spaces and validate length
        $idNumber = preg_replace('/\s+/', '', $idNumber);

        if (!preg_match('/^\d{14}$/', $idNumber)) {
            return false; // Invalid format
        }

        // Extract components
        $centuryDigit = (int)$idNumber[0];
        $yearOfBirth = (int)substr($idNumber, 1, 2);
        $monthOfBirth = (int)substr($idNumber, 3, 2);
        $dayOfBirth = (int)substr($idNumber, 5, 2);
        $genderDigit = (int)$idNumber[12]; // 13th digit (0-indexed)

        // Validate date components
        if ($monthOfBirth < 1 || $monthOfBirth > 12 || $dayOfBirth < 1 || $dayOfBirth > 31) {
            return false;
        }

        // Determine full birth year
        $fullYear = self::determineBirthYear($centuryDigit, $yearOfBirth);
        if (!$fullYear) {
            return false;
        }

        // Validate the date
        if (!checkdate($monthOfBirth, $dayOfBirth, $fullYear)) {
            return false;
        }

        // Determine gender (even = female, odd = male)
        $gender = ($genderDigit % 2 === 0) ? Gender::Female : Gender::Male;

        return [
            'birth_date' => sprintf('%04d-%02d-%02d', $fullYear, $monthOfBirth, $dayOfBirth),
            'gender' => $gender,
        ];
    }

    /**
     * Determine full birth year from century digit and year
     */
    private static function determineBirthYear(int $centuryDigit, int $yearOfBirth): ?int
    {
        return match ($centuryDigit) {
            1, 2 => 1900 + $yearOfBirth,
            3 => 2000 + $yearOfBirth,
            default => null,
        };
    }
}
