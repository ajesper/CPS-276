<?php
    class Calculator
    {
            public function calc($opp = null, $int1 = null, $int2 = null)
            {
                try
                {
                    if($opp === null || $int1 === null || $int2 === null)
                    {
                        throw new Exception("You must enter a string and two numbers <br/>");
                    }
                    else if($opp == "+")
                    {
                        echo "The sum of the numbers is " . ($int1 + $int2) . "<br/>";
                    } 
                    else if($opp == "-")
                    {
                        echo "The difference of the numbers is " . ($int1 - $int2) . "<br/>";
                    }
                    else if($opp == "*")
                    {
                        echo "The product of the numbers is " . ($int1 * $int2) . "<br/>";
                    }
                    else if($opp == "/")
                    {
                        if($int2 == 0)
                        {
                            throw new Exception("Can't divide by 0 <br/>");
                        }
                        else
                        {
                            echo "The quotient of the numbers is " . ($int1 / $int2) . "<br/>";
                        }
                    }
                    else
                    {
                        throw new Exception("You must enter a string and two numbers <br/>");
                    }
                }
                catch(exception $e)
                {
                    echo $e->getMessage();
                }
            }
    };
?>