

<?php $__env->startSection('content'); ?>
<div class="wrapper">
    <h1>Order a pizza!</h1>
    <form action="/pizza" method="POST">
        <label for="name">Your name:</label>
        <input type="text" name="name" id="name">
        <label for="type"> Choose a Pizza type:</label>
        <select name="type" id="type">
        <option value="margherita">Margherita</option>
        <option value="hawaiian">Hawaiian</option>
        <option value="veg supreme">Veg Supreme</option>
        <option value="volcano">Volcano</option>
        </select>
        <label for="base"> Choose a Base:</label>
        <select name="base" id="base">
        <option value="cheesy crust">Cheesy Crust</option>
        <option value="garlic crust">Garlic Crust</option>
        <option value="thin & crispy">Thin & Crispy</option>
        </select>
        <input type="submit" value="Order Pizza">
        </form>
        
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\cheri\Documents\laravel\pizzahouse\resources\views/pizzas\create.blade.php ENDPATH**/ ?>