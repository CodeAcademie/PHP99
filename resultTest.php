<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/**
 * @covers PHP99
 */
final class ResultTest extends TestCase
{
/*
						===============================
									EXO 1
						===============================
*/

	 /**
	 * Un algo pour créer un tableau associatif à partir de deux autres tableaux.
     * @dataProvider exo1Provider
     */
    public function testExo1Sample($a, $b, $expected)
    {
		$response = mergeArrays($a, $b);
		sort($expected);
		sort($response);
		$this->assertEquals($expected, $response);
    }
	/**
     * @dataProvider exo1BonusProvider
     * @expectedException TypeError
     */
    public function testExo1Bonus($a, $b){
    	$response = mergeArrays($a, $b);

    }
    public function exo1Provider()
    {
        return [
             [["à point", "saignant", "bleu", "bien cuit"],["poulet", "boeuf", "mouton"],["poulet à point", "poulet saignant","poulet bleu","poulet bien cuit","boeuf à point", "boeuf saignant","boeuf bleu","boeuf bien cuit","mouton à point", "mouton saignant","mouton bleu","mouton bien cuit"]],
            [["John","Dean"], ["Elton"], ["Elton John","Elton Dean"]],
            [["John","Dean"],[],[]],
            [["John","Dean",1], ["Elton"], ["Elton John","Elton Dean"]],
            [[null], ["Elton"], []],
            [["Elton"], [null], []]
        ];
    }
    public function exo1BonusProvider(){
    	return [
            [null,["C"]],
            [["cou"], null]

        ];
    }

/*
						===============================
									EXO 2
						===============================
*/
    /**
     * Un algo pour transformer une chaine de caractères en tableau.
     * @dataProvider exo2Provider
     */
    public function testExo2($str, $expected){
    	$response = stringToArray($str);
    	$this->assertEquals($expected, $response);
    }
    /**
     * @dataProvider exo2BonusProvider
     * @expectedException TypeError
     */
    public function testExo2Bonus($str, $expected){
    	$response = stringToArray($str);
    }
    public function exo2Provider()
    {
        return [
        	["Bonjour, je suis toto", ["Bonjour,","je","suis","toto"]],
        	["", [""]]
        ];
    }
    public function exo2BonusProvider()
    {
        return [
        	[null, [null]],
        	[123, ["123"]]
        ];
    }

/*
						===============================
									EXO 3
						===============================
*/

 	/**
 	 * Un algo pour faire ressortir les deux derniers éléments d'un tableau dans un nouveau tableau.
     * @dataProvider exo3Provider
     */
    public function testExo3($arr, $expected){
    	$response = lastTwoObjects($arr);
    	$this->assertEquals($expected, $response);
    }

    /**
     * @dataProvider exo3BonusProvider
     * @expectedException TypeError
     */
    public function testExo3Bonus($arr, $expected){
    	$response = lastTwoObjects($arr);
    	$this->assertEquals($expected, $response);

    }
    public function exo3Provider()
    {
        return [
        	[["orange", "banane", "pomme", "fraise", "tomate", "framboise", "noix de coco", "ananas"],  ["noix de coco", "ananas"]],
        	[["orange"], ["orange"]],
        	[[], []]
        ];
    }
     public function exo3BonusProvider()
    {
        return [
        	[123, []]
        ];
    }





/*
						===============================
									EXO 4
						===============================
*/

 	/**
 	 * Un algo pour supprimer la valeur "milieu" d'un tableau
     * @dataProvider exo4Provider
     */
    public function testExo4($arr, $expected){
    	$response = deleteCenter($arr);
    	$this->assertEquals($expected, $response);
    }

    /**
     * @dataProvider exo4BonusProvider
     * @expectedException TypeError
     */
    public function testExo4Bonus($arr){
    	$response = deleteCenter($arr);

    }
    public function exo4Provider()
    {
        return [
        	[["orange", "noix de coco", "ananas"],  ["orange", "ananas"]],
        	[["orange", "noix de coco","noix de coco", "ananas"],  ["orange","noix de coco", "ananas"]],
        	[["orange"], []],
        	[[], []],

        ];
    }
     public function exo4BonusProvider()
    {
        return [
        	[123],
        	[null],
        	["123"]

        ];
    }


/*
						===============================
									EXO 5
						===============================
*/

 	/**
 	 * Un algo pour trouver la chaine de caractères la plus longue d'un tableau
     * @dataProvider exo5Provider
     */
    public function testExo5($arr, $expected){
    	$response = getLongestString($arr);
    	$this->assertEquals($expected, $response);
    }

    /**
     * @dataProvider exo5BonusProvider
     * @expectedException TypeError
     */
    public function testExo5Bonus($arr){
    	$response = getLongestString($arr);

    }
    public function exo5Provider()
    {
        return [
        	[[123456], null],
        	[["orange", "noix de coco","noix de coco", "ananas"],  "noix de coco"],
        	[["noix de coco", "", 1564815615648156489789797897489789797897], "noix de coco"],
        	[[], null],

        ];
    }
     public function exo5BonusProvider()
    {
        return [
        	[123],
        	[null],
        	["123"]

        ];
    }

/*
						===============================
									EXO 6
						===============================
*/

 	/**
 	 * Un algo pour modifier les valeurs d'un tableau de façon systèmatique
     * @dataProvider exo6Provider
     */
    public function testExo6($arr, $expected){
    	$response = replace($arr);
    	$this->assertEquals($expected, $response);
    }

    /**
     * @dataProvider exo6BonusProvider
     * @expectedException TypeError
     */
    public function testExo6Bonus($arr){
    	$response = replace($arr);

    }
    public function exo6Provider()
    {
        return [
        	[["0612459623", "0645896235", "0678145263", "0647895263", "0655069912"], ["+33612459623", "+33645896235", "+33678145263", "+33647895263", "+33655069912"]],
        	[["123"], ["123"]]

        ];
    }
     public function exo6BonusProvider()
    {
        return [
        	[null],
        	["123"],
        	[123]

        ];
    }

/*
						===============================
									EXO 7
						===============================
*/

 	/**
 	 * Un algo pour modifier les valeurs d'un tableau de façon systèmatique
     * @dataProvider exo7Provider
     */
    public function testExo7($arr, $char, $expected){
    	$response = countCharInArray($arr, $char);
    	$this->assertEquals($expected, $response);
    }

    /**
     * @dataProvider exo7BonusProvider
     * @expectedException TypeError
     */
    public function testExo7Bonus($arr){
    	$response = countCharInArray($arr);

    }
    public function exo7Provider()
    {
        return [
        	[["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"], "h", 14],
        	[["haha", "hehe", "j'aime mon travail", "une vraie joie", "je changerai pour rien au monde", "hhhhhhhh", "have fun !"], "a", 10],
        	[["123"], "a", 0],


        ];
    }
     public function exo7BonusProvider()
    {
        return [
        	[null],
        	["123"]

        ];
    }

}



