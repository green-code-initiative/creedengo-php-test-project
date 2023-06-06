<?php

class SpecificException extends Exception
{
}

function test()
{
    throw new SpecificException('Oopsie');
}

try {
    $file = 'file';
    $picture = PDF_open_image_file(
        pdf_new(),
        "jpeg",
        $file,
        '',
        0
    ); // This is the original statement, this works on PHP4
} catch (Exception $e) {
    echo "Error opening $file : " . $e->getMessage();
} // NOK {{Avoid using try-catch}}

try {
    throw new SpecificException('Hello');
} catch (SpecificException $e) {
    echo $e->getMessage() . " catch in\n";
} finally {
    echo $e->getMessage() . " finally \n";
} // NOK {{Avoid using try-catch}}

try {
    throw new \Exception('Hello');
} catch (\Exception $e) {
    echo $e->getMessage() . " catch in\n";
} // NOK {{Avoid using try-catch}}
