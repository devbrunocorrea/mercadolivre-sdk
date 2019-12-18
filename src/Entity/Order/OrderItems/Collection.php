<?php

declare(strict_types=1);

/*
 * This file is part of gpupo/mercadolivre-sdk
 * Created by Gilmar Pupo <contact@gpupo.com>
 * For the information of copyright and license you should read the file
 * LICENSE which is distributed with this source code.
 * Para a informação dos direitos autorais e de licença você deve ler o arquivo
 * LICENSE que é distribuído com este código-fonte.
 * Para obtener la información de los derechos de autor y la licencia debe leer
 * el archivo LICENSE que se distribuye con el código fuente.
 * For more information, see <https://opensource.gpupo.com/>.
 *
 */

namespace Gpupo\MercadolivreSdk\Entity\Order\OrderItems;

use Gpupo\Common\Entity\CollectionInterface;
use Gpupo\CommonSdk\Entity\CollectionAbstract;
use Gpupo\CommonSdk\Entity\CollectionContainerInterface;

final class Collection extends CollectionAbstract implements CollectionInterface, CollectionContainerInterface
{
    public function factoryElement($data)
    {
        if (\is_array($data)) {
            if (\array_key_exists('item', $data)) {
                $data = array_merge($data, $data['item']);
                unset($data['item']);
            }
        }

        return new Item($data);
    }
}
