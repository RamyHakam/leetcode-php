<?php

namespace Hakam\LeetCodePhp\Tree;

class IntegerToEnglishWords
{
    /**
     * @param Integer $num
     * @return String
     */
  public  function numberToWords($num)
    {
        $b = (int)($num / 1000000000);
        $m = (int)(($num - $b * 1000000000) / 1000000);
        $t = (int)(($num - $b * 1000000000 - $m * 1000000) / 1000);
        $rest = (int)($num - $b * 1000000000 - $m * 1000000 - $t * 1000);
        $numToWord = '';
        if ($b !== 0) {
            $numToWord .= $this->ThreeToWord($b) . " Billion ";
        }
        if ($m !== 0) {
            $numToWord .= $this->ThreeToWord($m) . " Million ";
        }
        if ($t !== 0) {
            $numToWord .= $this->ThreeToWord($t) . " Thousand ";
        }
        if ($rest !== 0) {
            $numToWord .= $this->ThreeToWord($rest);
        }
        return trim($numToWord);
    }

  private  function ThreeToWord($num)
    {
        $hundred = (int)($num / 100);
        $rest = $num - $hundred * 100;
        $result = '';
        if ($rest != 0 && $hundred != 0) {
            $result = $this->convertOnes($hundred) . " Hundred " . $this->TwoToWord($rest);
        }

        if ($hundred === 0 && $rest !== 0) {
            $result = $this->TwoToWord($rest);
        }

        if ($hundred !== 0 && $rest === 0) {
            $result = $this->convertOnes($hundred) . " Hundred";
        }

        return $result;
    }

  private function convertOnes($num)
    {
        switch ($num) {
            case 1:
                return 'One';
                break;
            case 2:
                return 'Two';
                break;
            case 3:
                return 'Three';
                break;
            case 4:
                return 'Four';
                break;
            case 5:
                return 'Five';
                break;
            case 6:
                return 'Six';
                break;
            case 7:
                return 'Seven';
                break;
            case 8:
                return 'Eight';
                break;
            case 9:
                return 'Nine';
                break;
            default:
                return '';
        }
    }

   private function TwoToWord($num)
    {
        if ($num == 0) {
            return '';
        }
        if ($num < 10) {
            return $this->convertOnes($num);
        }
        if ($num < 20) {
            return $this->convertLessThan20($num);
        }
        $tens = (int)($num / 10);
        $rest = $num - $tens * 10;
        if ($rest != 0) {
            return $this->convertTens($tens) . " " . $this->convertOnes($rest);
        }
        return $this->convertTens($tens);
    }

   private function convertLessThan20($num)
    {
        switch ($num) {
            case 10:
                return 'Ten';
                break;
            case 11:
                return 'Eleven';
                break;
            case 12:
                return 'Twelve';
                break;
            case 13:
                return 'Thirteen';
                break;
            case 14:
                return 'Fourteen';
                break;
            case 15:
                return 'Fifteen';
                break;
            case 16:
                return 'Sixteen';
                break;
            case 17:
                return 'Seventeen';
                break;
            case 18:
                return 'Eighteen';
                break;
            case 19:
                return 'Nineteen';
                break;
        }
        return '';
    }

   private function convertTens($num)
    {
        switch ($num) {
            case 2:
                return 'Twenty';
                break;
            case 3:
                return 'Thirty';
                break;
            case 4:
                return 'Forty';
                break;
            case 5:
                return 'Fifty';
                break;
            case 6:
                return 'Sixty';
                break;
            case 7:
                return 'Seventy';
                break;
            case 8:
                return 'Eighty';
                break;
            case 9:
                return 'Ninety';
                break;
        }
    }
}