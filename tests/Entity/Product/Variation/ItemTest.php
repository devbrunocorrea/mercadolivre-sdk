<?php

/*
 * This file is part of gpupo/mercadolivre-sdk
 * Created by Gilmar Pupo <g@g1mr.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <http://www.g1mr.com/>.
 */

namespace Entity\Product\Variation;

use Gpupo\Common\Entity\Collection;
use Gpupo\MercadolivreSdk\Entity\Product\Variation\Item;
use Gpupo\Tests\CommonSdk\Traits\EntityTrait;
use Gpupo\Tests\MercadolivreSdk\TestCaseAbstract;

/**
 * @coversDefaultClass \Gpupo\MercadolivreSdk\Entity\Product\Variation\Item
 *
 * @method collection getAttributeCombinations()    Acesso a attribute_combinations
 * @method setAttributeCombinations(collection $attribute_combinations)    Define attribute_combinations
 * @method float getAvailableQuantity()    Acesso a available_quantity
 * @method setAvailableQuantity(float $available_quantity)    Define available_quantity
 * @method float getPrice()    Acesso a price
 * @method setPrice(float $price)    Define price
 * @method array getPictureIds()    Acesso a picture_ids
 * @method setPictureIds(array $picture_ids)    Define picture_ids
 */
class ItemTest extends TestCaseAbstract
{
    use EntityTrait;
    /**
     * @return \Gpupo\MercadolivreSdk\Entity\Product\Variation\Item
     */
    public function dataProviderItem()
    {
        $data = [
            [
                'attribute_combinations' => [
                    'name'       => 'Tamanho',
                    'value_name' => '100 ml',
                ],
                'available_quantity' => 13,
                'price'              => 369.00,
                'picture_ids'        => [
                    'http://static.sepha.com.br/prd/300/300/300_3_desc_30.jpg',
                ],
            ],
        ];

        return $this->dataProviderEntitySchema(Item::class, $data);
    }

    /**
     * @testdox ``getSchema()``
     * @cover ::getSchema
     * @dataProvider dataProviderItem
     * @test
     */
    public function getSchema(Item $item)
    {
        $this->markTestIncomplete('getSchema() incomplete!');
    }

    /**
     * @testdox Possui método ``getAttributeCombinations()`` para acessar AttributeCombinations
     * @dataProvider dataProviderItem
     * @cover ::get
     * @cover ::getSchema
     * @small
     * @test
     */
    public function getAttributeCombinations(Item $item, $expected = null)
    {
        $this->assertInstanceOf(Collection::class, $item->getAttributeCombinations());

        //print_r($item->getAttributeCombinations());
        $this->assertSchemaGetter('attribute_combinations', 'collection', $item, $expected);
    }

    /**
     * @testdox Possui método ``setAttributeCombinations()`` que define AttributeCombinations
     * @dataProvider dataProviderItem
     * @cover ::set
     * @cover ::getSchema
     * @small
     * @test
     */
    public function setAttributeCombinations(Item $item, $expected = null)
    {
        $this->assertSchemaSetter('attribute_combinations', 'collection', $item);
    }

    /**
     * @testdox Possui método ``getAvailableQuantity()`` para acessar AvailableQuantity
     * @dataProvider dataProviderItem
     * @cover ::get
     * @cover ::getSchema
     * @small
     * @test
     */
    public function getAvailableQuantity(Item $item, $expected = null)
    {
        $this->assertSchemaGetter('available_quantity', 'number', $item, $expected);
    }

    /**
     * @testdox Possui método ``setAvailableQuantity()`` que define AvailableQuantity
     * @dataProvider dataProviderItem
     * @cover ::set
     * @cover ::getSchema
     * @small
     * @test
     */
    public function setAvailableQuantity(Item $item, $expected = null)
    {
        $this->assertSchemaSetter('available_quantity', 'number', $item);
    }

    /**
     * @testdox Possui método ``getPrice()`` para acessar Price
     * @dataProvider dataProviderItem
     * @cover ::get
     * @cover ::getSchema
     * @small
     * @test
     */
    public function getPrice(Item $item, $expected = null)
    {
        $this->assertSchemaGetter('price', 'number', $item, $expected);
    }

    /**
     * @testdox Possui método ``setPrice()`` que define Price
     * @dataProvider dataProviderItem
     * @cover ::set
     * @cover ::getSchema
     * @small
     * @test
     */
    public function setPrice(Item $item, $expected = null)
    {
        $this->assertSchemaSetter('price', 'number', $item);
    }

    /**
     * @testdox Possui método ``getPictureIds()`` para acessar PictureIds
     * @dataProvider dataProviderItem
     * @cover ::get
     * @cover ::getSchema
     * @small
     * @test
     */
    public function getPictureIds(Item $item, $expected = null)
    {
        $this->assertSchemaGetter('picture_ids', 'array', $item, $expected);
    }

    /**
     * @testdox Possui método ``setPictureIds()`` que define PictureIds
     * @dataProvider dataProviderItem
     * @cover ::set
     * @cover ::getSchema
     * @small
     * @test
     */
    public function setPictureIds(Item $item, $expected = null)
    {
        $this->assertSchemaSetter('picture_ids', 'array', $item);
    }
}
