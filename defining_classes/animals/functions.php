<?php

function isEmpty($var) {
    return $var === '';
}

function createAnimal(string $type, string $name, int $age, $gender) {
    switch ($type) {
        case 'Cat' : {
            try {
                $cat = new Cat($name, $age, $gender);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
            break;
        case 'Dog' : {
            try {
                $cat = new Dog($name, $age, $gender);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
            break;
        case 'Frog' : {
            try {
                $cat = new Frog($name, $age, $gender);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
            break;
        case 'Tomcat' : {
            try {
                $cat = new Tomcat($name, $age);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
            break;
        case 'Kitten' : {
            try {
                $cat = new Kitten($name, $age);
            } catch (Exception $exception) {
                echo $exception->getMessage();
            }
        }
            break;
    }

}