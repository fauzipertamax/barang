<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(false);

$routes->get('/', 'Home::index');

$routes->get('/rekap', 'RekapController::index');
$routes->post('/rekap/data','RekapController::getAllRekap',['as'=>'get.all.rekap']);

$routes->group("transaksi",function($routes){
       $routes->get('/','TransaksiController::index',['as'=>'transaksi']);
	   $routes->post('getAllTransaksi','TransaksiController::getAllTransaksi',['as'=>'get.all.transaksi']);
	   $routes->get('getSelectBarang','TransaksiController::getSelectBarang',['as'=>'get.select.barang']);
	   $routes->get('getSelectBarangs','TransaksiController::getSelectBarangs',['as'=>'get.select.barangs']);
	   
	   $routes->post('addTransaksi','TransaksiController::addTransaksi',['as'=>'add.transaksi']);	   
	   $routes->post('getTransaksiById','TransaksiController::getTransaksiById',['as'=>'get.transaksi.info']);
	   $routes->post('updateTransaksi','TransaksiController::updateTransaksi',['as'=>'update.transaksi']);
	   $routes->post('deleteTransaksi','TransaksiController::deleteTransaksi',['as'=>'delete.transaksi']);
});

$routes->group("barang",function($routes){
       $routes->get('/','BarangController::index',['as'=>'barang']);
	   $routes->post('getAllBarang','BarangController::getAllBarang',['as'=>'get.all.barang']);
	   $routes->post('addBarang','BarangController::addBarang',['as'=>'add.barang']);	   
	   $routes->post('getBarangById','BarangController::getBarangById',['as'=>'get.barang.info']);
	   $routes->post('updateBarang','BarangController::updateBarang',['as'=>'update.barang']);
	   $routes->post('deleteBarang','BarangController::deleteBarang',['as'=>'delete.barang']);
});
