<?php
/**
 * Created by PhpStorm.
 * User: Vilislav
 * Date: 23.12.2018 г.
 * Time: 17:09
 */

class User
{
    private $name;
    private $age;
    private $phone;
    private $address;

    /**
     * User constructor.
     * @param $name
     * @param $age
     * @param $phone
     * @param $address
     */
    public function __construct($name, $age, $phone, $address)
    {
        $this->name = $name;
        $this->age = $age;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function createTable() : string {
        $htmlTablePerson = '<table border>'.PHP_EOL;
        $htmlTablePerson .= '    <tr>'.PHP_EOL;
        $htmlTablePerson .= '        <td class="colored">'.PHP_EOL;
        $htmlTablePerson .= 'Name'.PHP_EOL;
        $htmlTablePerson .= '        </td>'.PHP_EOL;
        $htmlTablePerson .= '        <td>'.PHP_EOL;
        $htmlTablePerson .= $this->name.PHP_EOL;
        $htmlTablePerson .= '        </td>'.PHP_EOL;
        $htmlTablePerson .= '    </tr>'.PHP_EOL;

        $htmlTablePerson .= '    <tr>'.PHP_EOL;
        $htmlTablePerson .= '        <td class="colored">'.PHP_EOL;
        $htmlTablePerson .= 'Phone number'.PHP_EOL;
        $htmlTablePerson .= '        </td>'.PHP_EOL;
        $htmlTablePerson .= '        <td>'.PHP_EOL;
        $htmlTablePerson .= $this->phone.PHP_EOL;
        $htmlTablePerson .= '        </td>'.PHP_EOL;
        $htmlTablePerson .= '    </tr>'.PHP_EOL;

        $htmlTablePerson .= '    <tr>'.PHP_EOL;
        $htmlTablePerson .= '        <td class="colored">'.PHP_EOL;
        $htmlTablePerson .= 'Age'.PHP_EOL;
        $htmlTablePerson .= '        </td>'.PHP_EOL;
        $htmlTablePerson .= '        <td>'.PHP_EOL;
        $htmlTablePerson .= $this->age.PHP_EOL;
        $htmlTablePerson .= '        </td>'.PHP_EOL;
        $htmlTablePerson .= '    </tr>'.PHP_EOL;

        $htmlTablePerson .= '    <tr>'.PHP_EOL;
        $htmlTablePerson .= '        <td class="colored">'.PHP_EOL;
        $htmlTablePerson .= 'Address'.PHP_EOL;
        $htmlTablePerson .= '        </td>'.PHP_EOL;
        $htmlTablePerson .= '        <td>'.PHP_EOL;
        $htmlTablePerson .= $this->address.PHP_EOL;
        $htmlTablePerson .= '        </td>'.PHP_EOL;
        $htmlTablePerson .= '    </tr>'.PHP_EOL;
        $htmlTablePerson .= '</table>';


        return $htmlTablePerson;
    }



}