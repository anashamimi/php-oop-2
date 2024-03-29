<?php
include __DIR__ . '/../Models/Product.php';

$products = [
    new Accessory('1', 'palla da tennis', 'en', '3.99', 'Trixie', 'cane', 
    'https://www.lelepetshop.it/images/thumbs/0002949_gioco-cane-palla-tennis-gigante-maxi-15-cm-diametro_550.png', 
    'pink', 'gomma'),

    new Accessory('2', 'collare', 'it', '5.50', 'Trixie', 'gatto', 
    'https://egress.storeden.net/gallery/602c486ebe7ea044d08b665d', 
    'blue', 'Nylon'),

    new Food('3', 'Matisse Sterilizzato al Salmone', 'en', '8.89', 'farmina', 'gatto', 
    'https://www.bauzaar.it/media/catalog/product/9/0/9001150_1.jpg?width=700&height=700&store=default&image-type=image', 
    '12/02/2024', '750'),

    new Food('4', 'Biscotti per Cani', 'en', '3.89', 'Pedigree', 'cane', 
    'https://arcaplanet.vtexassets.com/arquivos/ids/273530-1800-1800/pedigree-biscrock-gravy-bones.jpg?v=1770742390&quality=1&width=1800&height=1800', 
    '29/09/2024', '400'),

    new Accessory('5', 'Trasportino', 'fr', '10.79', 'Gipsy di Croci', 'gto', 
    'https://arcaplanet.vtexassets.com/arquivos/ids/261413-1800-1800/GIPSY_ROSSO-copia.jpg?v=1770742485&quality=1&width=1800&height=1800', 
    'red', 'plastica'),

    new Accessory('6', 'Ciotola', 'en', '25.34', 'Trixie', 'gatto', 
    'https://arcaplanet.vtexassets.com/arquivos/ids/270460-1800-1800/trixie-ciotola-nera.jpg?v=1770723304&quality=1&width=1800&height=1800', 
    'black', 'ceramica'),

    new Accessory('7', 'Cuccia Ciambella Pelosa', 'it', '24.99', 'LunaTeo', 'gatto', 
    'https://arcaplanet.vtexassets.com/arquivos/ids/277241-1800-1800/luna-e-teo-cuccia-pelosa-color-blu.jpg?v=1770596446&quality=1&width=1800&height=1800', 
    'light-blue', 'pelliccia in peluche'),

    new Accessory('8', 'Guinzaglio Tubolare', 'en', '25.34', 'Croci', 'cane', 
    'https://arcaplanet.vtexassets.com/arquivos/ids/282441-1800-1800/croci-guinaglio-tubolare-blu-m.jpg?v=1768435928&quality=1&width=1800&height=1800', 
    'blue', 'nylon'),
];