<?php

public static function formatNumber($number, $format)
    {
        /* Format türleri:
         * 1: 1.234,56
         * 2: 1,234.56
         * 3: 1234.56
         * 4: 1234,56
         *
         * Seçilen format türüne göre çıktı verir.
         */

        $decimals = 2; // Ondalık basamak sayısı. (Örnek: 1.234,56 için 2, 1.234,5678 için 4)

        try {
            if (str_contains($number, '.') && str_contains($number, ',')) {
                $res = (strpos($number, ',') > strpos($number, '.')) ? str_replace(',', '.', str_replace('.', '', $number)) : str_replace(',', '', $number);

                switch ($format) {
                    case 1:
                        return number_format($res, $decimals, ',', '.');
                    case 2:
                        return number_format($res, $decimals, '.', ',');
                    case 3:
                        return number_format($res, $decimals, '.', '');
                    case 4:
                        return number_format($res, $decimals, ',', '');
                }
            } elseif (str_contains($number, '.')) {
                switch ($format) {
                    case 1:
                        return number_format($number, $decimals, ',', '.');
                    case 2:
                        return number_format($number, $decimals, '.', ',');
                    case 3:
                        return number_format($number, $decimals, '.', '');
                    case 4:
                        return number_format($number, $decimals, ',', '');
                }
            } elseif (str_contains($number, ',')) {
                $res = str_replace(',', '.', $number);

                switch ($format) {
                    case 1:
                        return number_format($res, $decimals, ',', '.');
                    case 2:
                        return number_format($res, $decimals, '.', ',');
                    case 3:
                        return number_format($res, $decimals, '.', '');
                    case 4:
                        return number_format($res, $decimals, ',', '');
                }
            } else {
                switch ($format) {
                    case 1:
                        return number_format($number, $decimals, ',', '.');
                    case 2:
                        return number_format($number, $decimals, '.', ',');
                    case 3:
                        return number_format($number, $decimals, '.', '');
                    case 4:
                        return number_format($number, $decimals, ',', '');
                }
            }
        } catch (\Throwable $e) {
            return $number;
        }
        return $number;
    }
