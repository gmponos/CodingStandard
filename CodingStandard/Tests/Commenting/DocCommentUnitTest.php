<?php
/**
 * Unit test class for DocCommentSniff.
 *
 * PHP version 5
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Greg Sherwood <gsherwood@squiz.net>
 * @author   Alexander Obuhovich <aik.bold@gmail.com>
 * @license  https://github.com/aik099/CodingStandard/blob/master/LICENSE BSD 3-Clause
 * @link     https://github.com/aik099/CodingStandard
 */

/**
 * Unit test class for DocCommentSniff.
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @author   Greg Sherwood <gsherwood@squiz.net>
 * @author   Alexander Obuhovich <aik.bold@gmail.com>
 * @license  https://github.com/aik099/CodingStandard/blob/master/LICENSE BSD 3-Clause
 * @link     https://github.com/aik099/CodingStandard
 */
class CodingStandard_Tests_Commenting_DocCommentUnitTest extends AbstractSniffUnitTest
{


    /**
     * Returns the lines where errors should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of errors that should occur on that line.
     *
     * @param string $testFile Name of the file with test data.
     *
     * @return array(int => int)
     */
    public function getErrorList($testFile)
    {
        $ret = array(
                16  => 1,
                18  => 1,
                23  => 1,
                26  => 1,
                30  => 1,
                32  => 1,
                38  => 2,
                40  => 1,
                41  => 1,
                51  => 1,
                54  => 1,
                58  => 1,
                60  => 2,
                67  => 1,
                69  => 2,
                80  => 1,
                81  => 2,
                88  => 1,
                91  => 1,
                95  => 1,
                156 => 1,
                158 => 1,
               );

        if ($testFile === 'DocCommentUnitTest.inc') {
            $ret[176] = 3;

            // Compensate for https://github.com/squizlabs/PHP_CodeSniffer/issues/1169 fix.
            $ret[176] += 1;
        }

        // Compensate for https://github.com/squizlabs/PHP_CodeSniffer/issues/1169 fix.
        $ret[14] = 1;

        return $ret;

    }//end getErrorList()


    /**
     * Returns the lines where warnings should occur.
     *
     * The key of the array should represent the line number and the value
     * should represent the number of warnings that should occur on that line.
     *
     * @param string $testFile Name of the file with test data.
     *
     * @return array(int => int)
     */
    public function getWarningList($testFile)
    {
        return array();

    }//end getWarningList()


}//end class
