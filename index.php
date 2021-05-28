<?php 

    // SDK do Mercado Pago
    require __DIR__ .  '/vendor/autoload.php';
    // Adicione as credenciais
    MercadoPago\SDK::setAccessToken('TEST-3977295609080069-071412-779f28b9bed5a39f27622e97e47fc4dd-252183771');

    // Cria um objeto de preferência
    $preference = new MercadoPago\Preference();

    // Cria um item na preferência
    $item = new MercadoPago\Item();
    $item->title = 'Meu produto';
    $item->quantity = 1;
    $item->unit_price = 75.56;
    $preference->items = array($item);
    $preference->save();
?>    

<script>
// Adicione as credenciais do SDK
  const mp = new MercadoPago('TEST-3a3bd445-16c1-4689-9ba7-1e5cbde652e6', {
        locale: 'es-AR'
  });

  // Inicialize o checkout
  mp.checkout({
      preference: {
          id: 'YOUR_PREFERENCE_ID'
      },
      render: {
            container: '.cho-container', // Indica onde o botão de pagamento será exibido
            label: 'Pagar', // Muda o texto do botão de pagamento (opcional)
      }
});
</script>

<div class=".cho-container">
    botão teste    
</div>

// SDK MercadoPago.js V2
<script src="https://sdk.mercadopago.com/js/v2"></script>