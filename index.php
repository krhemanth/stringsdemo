<?php
  $index=new old();
  $text="hemanth";
  $hey="hye world!!";
  $uctext="njit";
  
  $index->stringRev($text);
  $index->stringLength($text);
  $index->stringToLower($hey);
  $index->stringTrim($hey);
  $index->stringShuffle($hey);
  $index->wordCount($hey);
  $index->ucFirst($uctext);
  $index->htmlentities();
  $index->explode();
  $index->numberFormat();
  
  class old
  {
  
    public function stringRev($text)
    {
    echo '<h2> 1. Reverses the string </h2>';
    print 'String: '.$text.' |Reverse String: '.strrev($text);
    echo '<hr>';
    }
    public function stringLength($text)
    {
    echo '<h2> 2.To find the length of the string </h2>';
    print 'Length of ' .$text.' is '. strlen($text);
    echo $message;
    echo '<hr>';
    }
    public function stringToLower($hey)
    {
    echo '<h2> 3. Converts String to lower function </h2>';
    print 'String: '.$hey.' |ToLower String: '.strtolower($hey);
    echo '<hr>';
    }
    public function stringTrim($hey)
    {
    echo '<h2> 4. To trim the string function </h2>';
    print 'String: '.$hey.' |Trimmed String: '.trim($hey,"This is ");
    echo '<hr>';
    }
    public function stringShuffle($hey)
    {
    echo '<h2> 5.To shuffle the string</h2>';
    print 'String: '.$hey.' |Shuffled World: '.str_shuffle($hey);
    echo '<hr>';
    }
    public function wordCount($hey)
    {
    echo '<h2> 6.To count no.of words in the string</h2>';
    print 'String: '.$hey.' |Word Count: '.str_word_count($hey);
    echo'<hr>';
    }
    public function ucFirst($ucfirst)
    {
    echo '<h2> 7. Converts the first charachter into uppercase </h2>';
    print 'String: '.$ucfirst.' |UC Charachter: '.ucfirst($ucfirst);
    echo '<hr>';
    }
    public function htmlentities()
    {
    echo '<h2> 8. Htmlentities Function </h2>';
    $str = "A 'quote' is <b>bold</b>";
    echo htmlentities($str);
    echo'<hr>';
    }
    public function explode()
    {
    echo '<h2> 9. Explode function is set to split</h2>';
    $cheese = "piece1 piece2 piece3 piece4 piece5 piece6" ;
    $pieces = explode(" ", $cheese);
    echo 'String:'.$cheese.'<br>';
    echo 'pieces[0]:'.$pieces[0]; // piece1
    echo 'pieces[1]:'.$pieces[1]; // piece2
    echo '<hr>';
    }
    public function numberFormat()
    {
        echo '<h2> 10. this is number format</h2>';
        $english_format_number = number_format("23.456");
print ($english_format_number);
echo '<hr>';

    }
    }
    ?>
    
      