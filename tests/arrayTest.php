<?php

use PHPUnit\Framework\TestCase;

class ArrayTest extends TestCase
{
    /*un archivo de pruebas requiere de que se importe el elemento PHPUnit\Framework\TestCase; y ademas extender de ella 
    nuestras clases tienen que terminar en la palabra test y cada uno de nuestros metodos tiene que empezar con la palabra test
    todo eso seria lo mas importante a nivel de estructura
    y tambien es muy importante que cada metodo cuente con una afirmacion "assertEmpty" 
    el testins se basa en las asfirmaciones nosotros tenemos que afirmar que estamos recibiendo el resultado esperado
    affirmar significa que nosotros estamos afirmando un resultado*/
    public function test_array_without_data()
    {
        $users = [];
        $this->assertEmpty($users);
    }

    public function test_array_with_data()
    {
        $users = ['user_1', 'user_2'];

        $this->assertNotEmpty($users);/*afirmaciones*/
    }
}
