<?php
class AvoidMultipleIfElseStatement
{

    public function methodWithMultipleIfElseIf()
    {
        $nb1 = 0;
        $nb2 = 10;

        if ($nb1 == 1) {
            $nb2 = 1;
        } elseif ($nb1 == $nb2) {
            $nb2 = 2;
        } elseif ($nb2 == $nb1) {
            $nb2 = 3;
        } else {
            $nb2 = 4;
        } // NOK {{Use a switch statement instead of multiple if-else if possible}}

        return $nb2;
    }

    public function methodWithMultipleIfElse()
    {
        $nb1 = 0;

        if ($nb1 == 1) {
            $nb1 = 1;
        } else {
            $nb1 = 2;
        } // NOK {{Use a switch statement instead of multiple if-else if possible}}

        if ($nb1 == 2) {
            $nb1 = 3;
        } else {
            $nb1 = 4;
        } // NOK {{Use a switch statement instead of multiple if-else if possible}}

        return $nb1;
    }

    public function methodWithOneIfElseIf()
    {
        $nb1 = 0;
        $nb2 = 10;

        if ($nb1 == 1) {
            $nb2 = 1;
        } elseif ($nb1 == $nb2) {
            $nb2 = 2;
        } else {
            $nb2 = 3;
        }

        return $nb2;
    }

    public function methodWithOneIfElse()
    {
        $nb1 = 0;

        if ($nb1 == 1) {
            $nb1 = 2;
        } else {
            $nb1 = 3;
        }

        return $nb1;
    }

    public function methodWithMultipleIfElseDifferentVariables() // Compliant (2 if on different variables)
    {
        $nb1 = 0;
        $nb2 = 0;

        if ($nb1 == 1) {
            $nb1 = 1;
        } else {
            $nb2 = 2;
        }

        if ($nb2 == 2) {
            $nb1 = 3;
        } else {
            $nb1 = 4;
        }

        return $nb1;
    }

    public function methodWithMultipleIfElseIfSeparated() // Compliant (only 2 if on the same variable)
    {
        $nb1 = 0;

        if ($nb1 == 1) {
            $nb1 = 1;
        } else {
            if ($nb1 == 2) {
                $nb1 = 3;
            } else {
                $nb1 = 2;
            }
        }

        return $nb1;
    }

    public function methodWithMultipleIfElseIfSeparatedDeep()
    {
        $nb1 = 0;

        if ($nb1 == 1) {
            $nb1 = 1;
        } else {
            if ($nb1 == 2) {
                $nb1 = 3;
            } else {
                if ($nb1 == 3) {
                    $nb1 = 4;
                } else {
                    $nb1 = 5;
                }
            }
        } // NOK {{Use a switch statement instead of multiple if-else if possible}}

        return $nb1;
    }

    public function methodWithMultipleIfElseIfSeparatedDeepButDifferentVariables() // Compliant
    {
        $nb1 = 0;
        $nb2 = 0;

        if ($nb1 == 1) {
            $nb1 = 1;
        } else {
            if ($nb1 == 2) {
                $nb1 = 3;
            } else {
                if ($nb2 == 2) {
                    $nb1 = 3;
                } else {
                    $nb1 = 2;
                }
            }
        }

        return $nb1;
    }
}
