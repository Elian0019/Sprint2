<div class="container py-8">
<section class=" bg-white rounded-lg shadow-lg p-6 text-gray-700">
<h1 class="text-lg font-semibold mb-6">Servicios</h1>
<table class="table-auto w-full">
 <thead>
     <tr>
         <th> </th>
         <th>Precio</th>
         <th>Cantidad</th>
         <th>Total</th>
     </tr>
 </thead>
 <tbody>
     <tr>
         <td >
             <div class="flex">
                 <img class="h-15 w-20 object-cover mr-4" src="https://pix6.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768" alt="">
             </div>
         </td>
         <td class="text-center">
             200
         </td >
         <td class="text-center">
             1
         </td>
         <td class="text-center">
             200
         </td>
     </tr>
 </tbody>
</table>
</section>

</div >
    <div id="paypal-button-container" class="text-center py-6 px-4"></div>
    <script src="https://www.paypal.com/sdk/js?client-id=AVKhSf9txevemjAHOXBWaX4OixKDYfMan7KKYLXaXHvwTxC3wf8sb5fVIUv_-AZMzmUNa36t_V-UoPTA&currency=USD"></script>
    <script>
        paypal.Buttons({
            style: {
                color: 'blue',
                shape: 'pill',
                label: 'pay'
            },
            createOrder: function(data, actions){
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '200' //monto a pagar
                    }
                }]
            });
        },
        onApprove:function(data, actions){
actions.order.capture().then(function(detalles){
    alert("Pago Completado");
});
        },
        onCancel:function(data){
            alert("Pago Cancelado");
            console.log(data);
        }
        }).render('#paypal-button-container');

    </script>
