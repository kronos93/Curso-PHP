<?php
    /**
     * Todas las llaves de un array asociativo deben ser un string
     * Las llaves la definen los programadores
     * El acceso al array es por medio de las llaves creadas
     */
    $numeros = [
        'uno' => 1,
        'dos' => 2,
        'tres' => 3,
        'cuatro' => 4,
        'cinco' => 5,
        'seis' => 6
    ];
    var_dump($numeros);
    var_dump($numeros['uno']);
    var_dump($numeros['cinco']);